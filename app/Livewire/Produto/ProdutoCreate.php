<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProdutoCreate extends Component
{
    public $nome, $valor, $ingredientes, $imagem;

    use WithFileUploads;
    // Validação dos campos
    protected $rules = [
        'nome' => 'required|string|max:255',
        'valor' => 'required|numeric|min:0',
        'imagem' => 'required|file|mimes:jpg,png,jpeg,gif,webp|max:2048',

    ];
    

    // Função para salvar o produto
    public function salvar()
    {
        // Valida os dados
        $this->validate();
        if ($this->imagem) {
            // Faz o upload da imagem para o diretório 'imagens' e retorna o caminho
            $path = $this->imagem->store('imagens', 'public');
            $this->imagem = $path;
        }
        // Cria o novo produto
        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'imagem' => $this->imagem,
        ]);

        // Exibe uma mensagem de sucesso
        session()->flash('message', 'Produto criado com sucesso!');

        // Redireciona para a lista de produtos
        return redirect()->route('produtos.index');
    }

    public function render()
    {
        return view('livewire.produto.produto-create');
    }

}
