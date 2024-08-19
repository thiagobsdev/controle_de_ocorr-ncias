<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocorrências Segurança Patrimonial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= $base; ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $base; ?>/styles.css">
    <link rel="stylesheet" href="<?= $base; ?>/ocorrencia-css.css">
    <link rel="shortcut icon" href="<?= $base; ?>/assets/fotos/logoDP-World.ico" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>

    </style>
</head>

<body>
    <header class="bg-dark text-white cabecalho">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="cabecalho-conteiner container-fluid">
                <nav class="navbar navbar-expand navbar-dark bg-dark ">
                    <a class="navbar-brand" href="<?= $base; ?>">
                        <img src="<?= $base; ?>/assets/fotos/logo.gif" width="70" height="50" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= $base; ?>">Ocorrências <span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= $base; ?>/nova_ocorrencia">Registro de ocorrência</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Administrador
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?= $base; ?>/cadastro">Adicionar usuário</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="d-flex w-100 justify-content-end">
                <span>
                    Olá, <?= $usuariologado['nome']; ?>
                </span>
                <a style="margin-left:20px; margin-right:20px;" class="nav-link alterarSenha" href="<?= $base; ?>/alterar_senha">Alterar senha</a>
                <a class="nav-link" href="<?= $base; ?>/sair">Sair</a>
            </div>
        </div>
    </header>