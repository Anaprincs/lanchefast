<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>Criar Produto</h2>

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <form wire:submit.prevent="salvar">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" wire:model="nome" id="nome" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="ingredientes">Ingredientes</label>
                    <input type="text" wire:model="ingredientes" id="ingredientes" class="form-control w-100"
                        required>
                    @error('ingredientes')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Imagem -->
                <div class="form-group mb-3">
                    <label for="imagem" class="form-label">Imagem</label>
                    <input class="form-control w-100" id="imagem" type="file">
                    @error('imagem')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Botões -->
                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-success">Criar Produto</button>
                    <!-- Corrigido o link de cancelamento para incluir o ID do produto -->
                    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>

