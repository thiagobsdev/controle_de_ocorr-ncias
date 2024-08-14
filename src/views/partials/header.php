<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocorrências Segurança Patrimonial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/fotos/logoDP-World.ico" type="image/x-icon">
    <style>
        .cabecalho {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            margin-bottom: 20px;
            z-index: 1000;
        }

        .cabecalho-conteiner {
            max-width: 1200px;
            width: 100%;
            padding-left: 20px;
            padding-right: 20px;
        }

        .imgCarrossel {
            object-fit: contain;
            max-height: 500px;
            width: 100%;
        }

        .alterarSenha {
            margin-right: 20px;
            margin-left: 20px;
        }
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
                                <a class="nav-link" href="<?= $base; ?>/registro">Registro de ocorrência</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Administrador
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?= $base; ?>/">Adicionar usuário</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="d-flex w-100 justify-content-end">
                <span >
                    Olá, <?=$usuariologado['nome'] ;?>
                </span>
                <a class="nav-link alterarSenha" href="<?= $base; ?>/registro">Alterar senha</a>
                <a class="nav-link" href="<?= $base; ?>/registro">Sair</a>
            </div>
        </div>
    </header>