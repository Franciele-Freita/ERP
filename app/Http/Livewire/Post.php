<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $post, $post_id;

    public function mount()
    {
        $this->post = session()->get('post');
    }
    public function render()
    {
        return view('livewire.post');
    }

    public function addPost()
    {
        /* session()->forget('user.teams');
        session()->save(); */

        session()->push('product',['id'=> 1]);
        dd(session()->all());
    }
}
