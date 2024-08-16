<?= $render('header', ['usuariologado' => $usuariologado]) ?>

<body>
    <div class="container mt-5">
        <h2>Gerenciamento de Usuários</h2>

        <!-- Formulário de Usuário -->
        <form id="userForm" method="POST" action="<?= $base; ?>/cadastro">
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
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>