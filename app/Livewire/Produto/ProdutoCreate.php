<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome, $preco, $descricao;

    // Validação dos campos
    protected $rules = [
        'nome' => 'required|string|max:255',
        'preco' => 'required|numeric|min:0',
        'descricao' => 'required|string|max:1000',
    ];

    // Função para salvar o produto
    public function salvar()
    {
        // Valida os dados
        $this->validate();

        // Cria o novo produto
        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'descricao' => $this->imagem,
        ]);

        // Exibe uma mensagem de sucesso
        session()->flash('message', 'Produto criado com sucesso!');

        // Redireciona para a lista de produtos
        return redirect()->route('produto.lista');
    }

    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
