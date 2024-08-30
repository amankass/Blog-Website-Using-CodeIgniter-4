<?php

namespace App\Controllers;

use App\Models\BlogModel;

class BlogController extends BaseController
{
    protected $blogModel;

        public function __construct()
    {
        $this->blogModel = new BlogModel();
        helper(['url', 'form']);
    }

        public function index()
    {
        $data['blogs'] = $this->blogModel->findAll();
        return view('blog/index', $data);
    }

        public function create()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/auth')->with('fail', 'You must log in first.');
        }
        return view('blog/create'); 
    }

    public function store()
{
    // Validate inputs
    $validated = $this->validate([
        'title' => 'required',
        'content' => 'required',
        'image' => 'max_size[image,18432]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png,image/gif,image/webp]',
    ]);

    if (!$validated) {
        return view('blog/create', ['validation' => $this->validator]);
    }

    // Handle image upload
    $image = $this->request->getFile('image');
    $imageName = $image->getRandomName();
    $image->move('uploads', $imageName);

    // Sanitize content before saving (optional)
    $content = htmlspecialchars($this->request->getPost('content'), ENT_QUOTES, 'UTF-8');

    // Save blog post data
    $this->blogModel->save([
        'user_id' => session()->get('user_id'),
        'title' => $this->request->getPost('title'),
        'content' => $content,
        'image' => $imageName,
        'created_at' => date('Y-m-d H:i:s'),
    ]);

    return redirect()->to('/blog')->with('success', 'Blog post created successfully.');
}


        public function edit($id)
        {
            $data['blog'] = $this->blogModel->find($id);
            return view('blog/edit', $data); 
        }

        public function update($id)
    {
        $validated = $this->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'max_size[image,18432]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png,image/gif,image/webp]',
        ]);

        if (!$validated) {
            return view('blog/edit', ['validation' => $this->validator, 
            'blog' => $this->blogModel->find($id)]);
        }

        $image = $this->request->getFile('image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move('uploads', $imageName);
        } else {
            $imageName = $this->request->getPost('current_image');
        }

        $this->blogModel->update($id, [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'image' => $imageName,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->to('/blog')->with('success', 
        'Blog post updated successfully.');
    }

    public function view($id)
    {
        // Fetch the current blog post
        $blog = $this->blogModel->find($id);
        if (!$blog) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Blog post not found');
        }
    
        // Fetch other blog posts to recommend, excluding the current one
        $relatedBlogs = $this->blogModel->where('id !=', $id)->findAll(3); // Fetch 3 other blog posts
    
        // Pass the blog and related blogs to the view
        return view('blog/view', [
            'blog' => $blog,
            'relatedBlogs' => $relatedBlogs
        ]);
    }
    


    public function delete($id)
    {
        $blog = $this->blogModel->find($id);
        if (!$blog) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Blog post not found');
        }

        if ($blog['user_id'] != session()->get('user_id')) {
            return redirect()->to('/blog')->with('error', 
            'You are not authorized to delete this blog post.');
        }
        $this->blogModel->delete($id);

        if (!empty($blog['image'])) {
            unlink('uploads/' . $blog['image']);
        }
        return redirect()->to('/blog')->with('success', 
        'Blog post deleted successfully.');
    }
    
}