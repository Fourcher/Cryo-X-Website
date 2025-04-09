<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Blog;
use Livewire\WithFileUploads;

class CreateBlog extends Component
{

    use WithFileUploads;

    public $title;
    public $slug;
    public $content;
    public $image;
    public $published;

    public function image()
    {
        $this->validate([
            'image' => 'required|image',
        ]);

        $this->image = $this->image->store('public');

        session()->flash('message', 'Image uploaded successfully.');



    }

    public function updatedTitle($value)
    {
        $this->slug = \Str::slug($value);
    }

    public function create()
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
        ]);

        if($this->image) {
            $this->validate([
                'image' => 'image|max:1024',
            ]);
            $image = $this->image->store('public');
        }
        else{
            $image = "";
        }



        

        Blog::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'image' => $image,
            'published' => $this->published,
        ]);

        session()->flash('message', 'Blog created successfully.');

        $this->title = '';
        $this->slug = '';
        $this->content = '';
        $this->image = '';
        $this->published = false;
    }

    public function render()
    {
        return view('livewire.create-blog');
    }
}
