<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class MenuUsers extends Component
{   
    use WithPagination;

    protected $paginationTheme="bootstrap";
    public $search;

    public function render()
    {
        $users=User::where('name', 'LIKE', '%'.$this->search. '%')
            ->orwhere('email', 'LIKE', '%'.$this->search. '%')
            ->paginate();
        return view('livewire.menu-users',compact('users'));
    }

    public function limpiar_page(){
        $this->resetPage();
       
    }
}
