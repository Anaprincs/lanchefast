<div class="container mt-5">
    <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; font-weight: bold; color: #2c3e50;">
        Detalhes do Produto
    </h2>

    @if ($produtos->isEmpty()) 
        <div class="alert alert-warning text-center">
            Nenhum produto encontrado.
        </div>
    @else 
        @foreach ($produtos as $produto)
            <div class="card shadow-lg rounded-lg mb-5 mx-auto" style="max-width: 700px; min-height: 450px;">
                <div class="row no-gutters">
                    <!-- Imagem do Produto -->
                    <div class="col-md-6">
                        <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}"
                             class="card-img rounded-left" style="height: 100%; object-fit: cover;">
                    </div>

                    <!-- Informações do Produto -->
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title text-primary mb-3" style="font-size: 1.8rem;">
                                <i class="bi bi-box"></i> {{ $produto->nome }}
                            </h5>

                            <!-- Ingredientes com Ícone -->
                            <p class="card-text">
                                <i class="bi bi-egg-fried"></i> <strong>Ingredientes:</strong> {{ $produto->ingredientes }}
                            </p>

                            <!-- Preço com Ícone -->
                            <p class="card-text">
                                <i class="bi bi-cash-coin"></i> <strong>Preço:</strong> R$ {{ number_format($produto->valor, 2, ',', '.') }}
                            </p>

                            <!-- Botão para voltar à lista de produtos -->
                            <div class="text-center mt-4">
                                <a href="{{ route('produtos.index') }}" class="btn btn-outline-primary btn-lg">
                                    <i class="bi bi-arrow-left-circle"></i> Voltar para a lista
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
