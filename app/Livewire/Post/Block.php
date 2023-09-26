<?php

namespace App\Livewire\Post;

use Livewire\Component;

class Block extends Component
{
    public \App\Models\Post $post;
    public function render()
    {
        return view('livewire.post.block');
    }
}
