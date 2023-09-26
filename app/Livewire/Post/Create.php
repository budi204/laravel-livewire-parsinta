<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Create extends Component
{
    public $body;

    public function store()
    {
        $rules = [
            "body" => "required"
        ];

        $this->validate($rules);

        $post = Post::create([
            "user_id" => 1,
            "body" => $this->body
        ]);

        $this->reset();

        session()->flash("success", "Berhasil membuat post");

        $this->dispatch("postCreated");
    }
    public function render()
    {
        return view('livewire.post.create');
    }
}
