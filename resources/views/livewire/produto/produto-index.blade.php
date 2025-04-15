<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <!-- Título com Novo Ícone e Cor -->
            <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; color: #9a248e; font-weight: 600;">
                <i class="bi bi-box"></i> Produtos
            </h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('produtos.create') }}" class="btn btn-primary btn-lg">
                <i class="bi bi-plus-circle"></i> Novo Produto
            </a>
        </div>
    </div>

    <div class="card shadow-lg">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" wire:model.debounce.300ms="search" 
                        class="form-control" placeholder="Buscar produtos...">
                </div>
                <div class="col-md-3">
                    <select wire:model="perPage" class="form-select">
                        <option value="10">10 por página</option>
                        <option value="25">25 por página</option>
                        <option value="50">50 por página</option>
                        <option value="100">100 por página</option>
                    </select>
                </div>
            </div>

            @if(session()->has('message'))
                <div class="alert alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Imagem</th>
                            <th>Nome</th>
                            <th>Ingredientes</th>
                            <th>Valor</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($produtos as $produto)
                            <tr>
                                <td>
                                    @if($produto->imagem)
                                        <img src="{{ asset('storage/' . $produto->imagem) }}" 
                                            alt="{{ $produto->nome }}" 
                                            class="img-fluid rounded" style="max-width: 80px; height: 80px; object-fit: cover;">
                                    @else
                                        <span class="text-muted">Sem imagem</span>
                                    @endif
                                </td>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->ingredientes }}</td>
                                <td>R$ {{ number_format($produto->valor, 2, ',', '.') }}</td>
                                <td>
                                    <a href="{{ route('produtos.show', ['id' => $produto->id]) }}" 
                                        class="btn btn-sm btn-info" title="Ver Produto">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('produtos.edit', $produto->id) }}" 
                                        class="btn btn-sm btn-warning" title="Editar Produto">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button wire:click="delete({{ $produto->id }})" 
                                        class="btn btn-sm btn-danger" title="Excluir Produto"
                                        onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    Nenhum produto encontrado.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $produtos->links() }}
            </div>
        </div>
    </div>
</div>
