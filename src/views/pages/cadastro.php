<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ocorrencia-css.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        /* Estiliza as fotos e centraliza o botão de excluir */
        .carousel-item img {
            max-height: 600px;
            object-fit: cover;
            width: 100%;
        }

        .delete-btn-container {
            text-align: center;
            margin-top: 10px;
        }
    </style>
    <title>Ocorrências Security</title>
</head>

<body>
    <header>
        <div class="container-xxl conteiner-registro"></div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets/fotos/logo.gif" alt="Bootstrap" width="50" height="30">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        </div>
    </header>
    </header>
    <body>
        <div class="container mt-5">
            <h2>Gerenciamento de Usuários</h2>
            
            <!-- Formulário de Usuário -->
            <form id="userForm" method="POST" action="<?=$base;?>/cadastro">
                <div class="mb-3">
                    <label for="userName" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="userName" placeholder="Digite o nome" name="nome">
                </div>
                <div class="mb-3">
                    <label for="userEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="userEmail" placeholder="Digite o email" name="email">
                </div>
                <div class="mb-3">
                    <label for="userPassword" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="userPassword" placeholder="Digite a senha" name="senha">
                </div>
                <div class="mb-3">
                    <label for="userAccessLevel" class="form-label">Nível de Acesso</label>
                    <select class="form-select" id="userAccessLevel" name="nivel">
                        <option selected>Selecione o nível de acesso</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Usuário">Usuário</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status">
                        <option selected>Selecione status do usuário</option>
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
    
            <!-- Tabela de Usuários -->
            <div class="mt-5">
                <h4>Lista de Usuários</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Nível de Acesso</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="userTableBody">
                        <!-- Usuários serão inseridos aqui -->
                    </tbody>
                </table>
            </div>
        </div>
        

    </body>
    
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>




</body>

</html>