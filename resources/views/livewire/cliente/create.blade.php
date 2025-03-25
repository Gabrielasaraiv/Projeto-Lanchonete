<div class="mt-5">
 
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        
        <div class="card">
           
                <h5 class="card-header" style="background-color: rbg(208, 239,255)">Cadastro de Clientes</h5>
                <div class="card-body">
                    <form wire:submit.prevent="store">
                        <div class="bg-light py-3 py-md-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                                        <div class="card border border-light-subtle rounded-3 shadow-sm">
                                            <div class="card-body p-3 p-md-4 p-xl-5">
                                               
                                                <div class="mb-3">
                                                    <label for="nome" class="form-label">Nome</label>
                                                    <input type="text" class="form-control" id="nome" name="nome"
                                                        placeholder="Nome Completo" wire:model.defer="nome">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="endereco" class="form-label">Endereço</label>
                                                    <input type="text" class="form-control" id="endereco" name="endereco"
                                                        placeholder="Digite seu endereço" wire:model.defer="endereco">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="telefone" class="form-label">Telefone</label>
                                                    <input type="text" class="form-control" id="telefone" name="telefone"
                                                        placeholder="Digite seu telefone" wire:model.defer="telefone">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="email"
                                                        name="email" placeholder="Email"
                                                        wire:model.defer="email">
                                                </div>
                                                
                                                
                                                <div class="mb-3">
                                                    <label for="cpf" class="form-label">CPF </label>
                                                    <input type="text" class="form-control" id="cpf" name="cpf"
                                                        placeholder="000.000.000-00" wire:model.defer="cpf">
                                                </div>
    
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Senha</label>
                                                    <input type="text" class="form-control" id="password" name="password"
                                                        placeholder="Digite sua senha" wire:model.defer="password">
                                                </div>
    
    
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        name="rememberMe" id="rememberMe">
                                                    <label class="form-check-label text-secondary" for="rememberMe">Salvar
                                                        Informações</label>
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </body>
        

    
</div>
