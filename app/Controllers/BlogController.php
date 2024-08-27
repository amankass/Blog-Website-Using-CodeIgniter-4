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
        return view('blog/index', $data); // Make sure to create this view
    }

    public function create()
    {
        // Ensure only logged-in users can create a blog
        if (!session()->get('logged_in')) {
            return redirect()->to('/auth')->with('fail', 'You must log in first.');
        }
        return view('blog/create'); // Create this view for the blog form
    }

    public function store()
    {
        // Validate input
        $validated = $this->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'max_size[image,2048]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png,image/gif,image/webp]',
        ]);

        if (!$validated) {
            return view('blog/create', ['validation' => $this->validator]);
        }
        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('uploads', $imageName);
        // Save blog post
        $this->blogModel->save([
            'user_id' => session()->get('user_id'),
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'image' => $imageName,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/blog')->with('success', 'Blog post created successfully.');
    }

    public function edit($id)
    {
        $data['blog'] = $this->blogModel->find($id);
        return view('blog/edit', $data); // Create this view for editing blog
    }

    public function update($id)
    {
        // Validate input
    $validated = $this->validate([
        'title' => 'required',
        'content' => 'required',
        'image' => 'max_size[image,2048]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png,image/gif,image/webp]',
    ]);

    if (!$validated) {
        return view('blog/edit', ['validation' => $this->validator, 'blog' => $this->blogModel->find($id)]);
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

    return redirect()->to('/blog')->with('success', 'Blog post updated successfully.');
}

    public function delete($id)
    {
        $this->blogModel->delete($id);
        return redirect()->to('/blog')->with('success', 'Blog post deleted successfully.');
    }
}