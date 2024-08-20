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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript">
        const BASE = "<?= $base; ?>"
    </script>
</head>

<div class="d-flex">

    <div class="container-xxl my-5">
        <div class="card mb-4 mb-3">
            <div class="">
                <div style=" width: 100%; display:flex; justify-content: center; align-content: center; ">
                    <img src="<?= $base; ?>/assets/fotos/logoDPWPDF.png" alt="" style="margin-left: 30px">
                    <h3 style="font-size: 24px;width: 100%; margin-top: 10px ; margin-left: 300px"> REGISTRO  DE OCORRÊNCIA <BR>SEGURANÇA PATRIMONIAL</h3>
                    <div style=" width: 100%; display: flex; align-items: end ;flex-direction:column; margin-right: 10px; margin-top: 10px" >
                        <div>
                            <strong>ID:</strong><?= " " . $ocorrencia->id . " "; ?>| <strong>Data:</strong> <?= " " . DateTime::createFromFormat('Y-m-d', $ocorrencia->data_ocorrencia)->format('d/m/Y') . " "; ?> |
                            <strong>Hora:</strong> <?= " " . $ocorrencia->hora_ocorrencia . " "; ?>
                        </div>
                        <strong>Registrado por:</strong> <?= " " . $ocorrencia->usuario->nome . " "; ?>
                    </div>
                </div>
            </div>
            <div class="card-body ocorrencia-content" id="ocorrencia-001">
                <h5 class="card-title" style="text-align:center"><?= " " . $ocorrencia->titulo . " "; ?></h5>
                <p class="card-text">
                    <strong>Área:</strong> <?= " " . $ocorrencia->area . " "; ?><br>
                    <strong>Local:</strong> <?= " " . $ocorrencia->local . " "; ?><br>
                    <strong>Tipo:</strong> <?= " " . $ocorrencia->tipo_natureza . " "; ?><br>
                    <strong>Natureza:</strong> <?= " " . $ocorrencia->natureza . " "; ?>
                </p>

                <!-- Informações do Ativo -->

                <h6>Ativos:</h6>

                <?php if (!empty($ocorrencia->ativosLista)) : ?>
                    <table class="table table-light table-striped ">
                        <thead>
                            <tr>
                                <th>Tipo de ativo</th>
                                <th>Identificação do ativo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($ocorrencia->ativosLista as $ativo): ?>
                                <tr>
                                    <td><?= $ativo->tipo_ativo; ?></td>
                                    <td><?= $ativo->id_ativo; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <p>A lista de ativos está vazia.</p>
                <?php endif; ?>

                <!-- Se houver envolvidos -->
                <h6>Envolvidos:</h6>

                <?php if (!empty($ocorrencia->envolvidosLista)) : ?>
                    <table class="table table-light table-striped ">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Tipo de Documento</th>
                                <th>Número do Documento</th>
                                <th>Vínculo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ocorrencia->envolvidosLista as $envolvido): ?>
                                <tr>
                                    <td><?= $envolvido->nome; ?></td>
                                    <td><?= $envolvido->tipo_de_documento; ?></td>
                                    <td><?= $envolvido->numero_documento; ?></td>
                                    <td><?= $envolvido->vinculo; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <p>A lista de envolvidos está vazia.</p>
                <?php endif; ?>

                <!-- Descrição da Ocorrência -->
                <h6>Descrição da ocorrência:</h6>
                <p class="card-text"><?= nl2br($ocorrencia->descricao) . " "; ?>.</p>

                <!-- Ações Tomadas -->
                <h6 class="">Ações Tomadas:</h6>
                <p class="card-text"><?= nl2br($ocorrencia->acoes) . " "; ?>.</p>


                <!-- Fotos -->
                <h6>Fotos:</h6>
                <div class="container" style="display: grid; grid-template-columns: auto auto;grid-column-gap: 10px;grid-row-gap: 10px;">
                    <img style="width:100%" src="https://s2-g1.glbimg.com/HZv14k4yxIpeHe6I9175CP68wNM=/1200x/smart/filters:cover():strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2018/O/6/7KT8s9SAGsADGtMJQf4g/24824-18-web-ban-foto-destaque-dpw-santos-1400x788px.png" alt="">
                    <img style="width:100%" src="https://s2-g1.glbimg.com/HZv14k4yxIpeHe6I9175CP68wNM=/1200x/smart/filters:cover():strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2018/O/6/7KT8s9SAGsADGtMJQf4g/24824-18-web-ban-foto-destaque-dpw-santos-1400x788px.png" alt="">
                    <img style="width:100%" src="https://s2-g1.glbimg.com/HZv14k4yxIpeHe6I9175CP68wNM=/1200x/smart/filters:cover():strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2018/O/6/7KT8s9SAGsADGtMJQf4g/24824-18-web-ban-foto-destaque-dpw-santos-1400x788px.png" alt="">
                    <img style="width:100%" src="https://s2-g1.glbimg.com/HZv14k4yxIpeHe6I9175CP68wNM=/1200x/smart/filters:cover():strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2018/O/6/7KT8s9SAGsADGtMJQf4g/24824-18-web-ban-foto-destaque-dpw-santos-1400x788px.png" alt="">
                    <img style="width:100%" src="https://s2-g1.glbimg.com/HZv14k4yxIpeHe6I9175CP68wNM=/1200x/smart/filters:cover():strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2018/O/6/7KT8s9SAGsADGtMJQf4g/24824-18-web-ban-foto-destaque-dpw-santos-1400x788px.png" alt="">
                    <img style="width:100%" src="https://s2-g1.glbimg.com/HZv14k4yxIpeHe6I9175CP68wNM=/1200x/smart/filters:cover():strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2018/O/6/7KT8s9SAGsADGtMJQf4g/24824-18-web-ban-foto-destaque-dpw-santos-1400x788px.png" alt="">


                </div>

            </div>
        </div>
    </div>
</div>