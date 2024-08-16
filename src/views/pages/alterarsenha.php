<?= $render('header', ['usuariologado' => $usuariologado]) ?>
<main>
        <div class="container mt-5">
            <h2>Modificar Senha</h2>
            
            <!-- Formulário de Modificação de Senha -->
            <form id="passwordForm">
                <div class="mb-3">
                    <label for="currentPassword" class="form-label">Senha Atual</label>
                    <input type="password" class="form-control" id="currentPassword" placeholder="Digite a senha atual" required>
                </div>
                <div class="mb-3">
                    <label for="newPassword" class="form-label">Nova Senha</label>
                    <input type="password" class="form-control" id="newPassword" placeholder="Digite a nova senha" required>
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirme a Nova Senha</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirme a nova senha" required>
                </div>
                <button type="submit" class="btn btn-primary">Modificar Senha</button>
            </form>
        </div>
        

    </main>
    
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>




</body>

</html>