<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoShow extends Component
{
    public $produto;
    public $nome;
    public $ingredientes;
    public $imagem;
    public $valor;
    public $id;

    // O método mount vai receber o id do produto da rota
    public function mount($id)
    {
        // Buscar o produto pelo ID
        $produto = Produto::find($id);
    }

    public function render()
    {
        // Passa o produto para a view do Livewire
        $produto = Produto::find($id);
        return view('livewire.produto.produto-show', compact('produtos'));
    }
}
