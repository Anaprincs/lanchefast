
<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2 class="text-center">Editar Produto</h2>

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
            <form wire:submit.prevent="atualizar">
                <div class="form-group mb-3">
                    <label for="nome">Nome</label>
                    <input type="text" wire:model="nome" id="nome" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="ingredientes">Ingredientes</label>
                    <input type="text" wire:model="ingredientes" id="ingredientes" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="valor">Valor</label>
                    <input type="number" step="0.01" wire:model="valor" id="valor" class="form-control"
                        required>
                </div>

                <div class="form-group mb-3">
                    <label for="formFileSm" class="form-label">Imagem</label>
                    <input type="file" wire:model="imagem" id="formFileSm" class="form-control form-control-sm">
                    @error('imagem')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Atualizar</button>
                
            </form>
                </div>
            </div>
        </div>
    </div>
    </div>
