<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title("Users")]

class Index extends Component
{
    use \Livewire\WithPagination;

    public function render()
    {
        return view('livewire.user.index', [
            "users" => User::query()->latest()->paginate(10)
        ]);
    }
}
