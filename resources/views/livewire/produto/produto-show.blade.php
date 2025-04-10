<div class="container">
    <h1>Detalhes do Produto</h1>

    <div class="card">
        <div class="card-body">
            <!-- Nome do Produto -->
            <h3 class="card-title">{{ $produto->nome }}</h3>

            <!-- Ingredientes do Produto -->
            <p><strong>Ingredientes:</strong> {{ $produto->ingredientes }}</p>

            <!-- Imagem do Produto -->
            @if($produto->imagem)
                <div class="mb-3">
                    <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}" class="img-fluid" style="max-width: 300px;">
                </div>
            @else
                <p><strong>Imagem não disponível.</strong></p>
            @endif

            <!-- Botões para Editar e Voltar -->
            <div class="mt-4">
                <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-primary">Editar Produto</a>
                <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar para a lista</a>
            </div>
        </div>
    </div>
</div>
