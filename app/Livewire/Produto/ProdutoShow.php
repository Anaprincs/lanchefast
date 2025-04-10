<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoShow extends Component
{
    public $produto;

    public function mount($id)
    {
        // Recupera o produto pelo ID
        $this->produto = Produto::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.produto.produto-show');
    }
}
