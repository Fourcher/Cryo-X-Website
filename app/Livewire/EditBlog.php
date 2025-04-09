<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Blog;
use Livewire\WithFileUploads;

class EditBlog extends Component
{

    use WithFileUploads;

    public $blog;
    public $title;
    public $slug;
    public $content;
    public $image;
    public $published;


    public function mount(Blog $blog)
    {
        $this->title = $blog->title;
        $this->slug = $blog->slug;
        $this->content = $blog->content;
        $this->image = $blog->image;
        $this->published = $blog->published;
    }



    public function update()
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'image' => 'required|image',
        ]);

        if($this->image != $this->image){
            $this->image = $this->image->store('public');
        }


        $blog = Blog::find($this->blog->id);

        $blog->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'image' => $this->image,
            'published' => $this->published,
        ]);
    }

    public function render()
    {
        return view('livewire.edit-blog');
    }
}
