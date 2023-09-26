<?php

namespace App\Livewire\Post;

use Livewire\Attributes\On;
use Livewire\Attributes\lazy;
use Livewire\Component;

#[lazy]

class Index extends Component
{
    #[On("postCreated")]

    public function updateList()
    {
    }

    public function placeholder()
    {
        return <<<BLADE
            <div>
                Loading...
            <div/>
        BLADE;
    }

    public function render()
    {
        return view('livewire.post.index', [
            "posts" => \App\Models\Post::query()->with("user")->latest()->get()
        ]);
    }
}
