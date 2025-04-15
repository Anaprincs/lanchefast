<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Título com Fonte, Cor e Negrito -->
            <h2 class="text-center mb-4" style="font-family: 'Arial', sans-serif; color: #a016a0; font-weight: bold;">
                <i class="bi bi-box-seam"></i> Criar Produto
            </h2>

            @if (session()->has('message'))
                <div class="alert alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif

            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <form wire:submit.prevent="salvar">
                        <!-- Campo Nome -->
                        <div class="form-group mb-3">
                            <label for="nome" class="form-label">
                                <i class="bi bi-box"></i> Nome do Produto
                            </label>
                            <input type="text" wire:model="nome" id="nome" class="form-control" required>
                        </div>

                        <!-- Campo Ingredientes -->
                        <div class="form-group mb-3">
                            <label for="ingredientes" class="form-label">
                                <i class="bi bi-list-ul"></i> Ingredientes
                            </label>
                            <input type="text" wire:model="ingredientes" id="ingredientes" class="form-control w-100" required>
                            @error('ingredientes')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Campo Valor -->
                        <div class="form-group mb-3">
                            <label for="valor" class="form-label">
                                <i class="bi bi-currency-dollar"></i> Valor
                            </label>
                            <input type="number" step="0.01" wire:model="valor" id="valor" class="form-control" required>
                        </div>

                        <!-- Campo Imagem -->
                        <div class="form-group mb-3">
                            <label for="imagem" class="form-label">
                                <i class="bi bi-camera"></i> Imagem
                            </label>
                            <input type="file" wire:model="imagem" id="imagem" class="form-control w-100">
                            @error('imagem')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Botões Centralizados -->
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-success btn-lg w-48 mx-2">
                                <i class="bi bi-check-circle"></i> Criar Produto
                            </button>
                            <a href="{{ route('produtos.index') }}" class="btn btn-secondary btn-lg w-48 mx-2">
                                <i class="bi bi-arrow-left-circle"></i> Voltar
                            </a>
                        </div>
                    </form>
                </div>
