<?php

namespace App\Livewire\Clientes;

use App\Models\Clientes;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $search = '';
    protected $perPage = ""; // registros por pagina

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 10],
    ];



    public function render()
    {
        $clientes = Clientes::where('nome', 'like', "%{$this->search}%")
            ->orWhere('email', 'like', "%{$this->search}%")
            ->orWhere('cpf', 'like', "%{$this->search}%")
            ->paginate($this->perPage);

        return view('livewire.clientes.index', compact('clientes'));
    }

    public function delete($id)
    {
        Clientes::findOrfail($id)->delete();
        session()->flash('message', 'Cliente deletado com sucesso');
    }
}
