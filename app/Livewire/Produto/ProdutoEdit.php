<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $produto;
    public $nome, $ingredientes, $valor, $imagem;

    // Carrega o produto corretamente no método mount
    public function mount($produto)
    {
        // Carrega o produto pelo ID
        $this->produto = Produto::find($produto);

        // Verifica se o produto foi encontrado
        if ($this->produto) {
            $this->nome = $this->produto->nome;
            $this->ingredientes = $this->produto->ingredientes;
            $this->valor = $this->produto->valor;
            $this->imagem = $this->produto->imagem;
        } else {
            // Se não encontrar o produto, você pode redirecionar ou exibir uma mensagem
            session()->flash('error', 'Produto não encontrado.');
            return redirect()->route('produtos.index');
        }
    }

    // Função de atualização
    public function atualizar()
    {
        // Atualiza o produto com os dados fornecidos
        $this->produto->update([
            'nome' => $this->nome,
            'valor' => $this->valor,
            'ingredientes' => $this->ingredientes,
            'imagem' => $this->imagem,
        ]);

        // Mensagem de sucesso
        session()->flash('message', 'Produto atualizado com sucesso!');
        
        // Redireciona para a página de visualização do produto
        return redirect()->route('produtos.show', ['produto' => $this->produto->id]);
    }

    // Renderiza a view
    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}
