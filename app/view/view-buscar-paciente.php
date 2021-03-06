<!DOCTYPE html>

<html lang="pt">
    <?php include "app/view/includes/helpers.php"; ?>
    <head>
        <title>Health Info |  Buscar Paciente</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="shortcut icon" href="img/icont.ico" >
    </head>
    <body>
        <?php include "app/view/includes/view-head.php"; ?>
        <div class="cad-paciente">
            <h3>Buscar: <?= $valor; ?> Total: <?= totalBusca($pacientes);?></h3>
            <?php if(count($pacientes) > 0): ?>
                <?php if($mostrarTabela): ?>
                    <table>
                        <tr>
                            <th>CPF</th>
                            <th>Nome</th>
                            <th class="change">Cidade</th>
                            <th>Estado</th>
                            <th>Opção</th>
                        </tr>
                        <?php foreach ($pacientes as $p): ?>
                            <tr>
                                <td><?= $p->cpf; ?></a></td>
                                <td><?= $p->nome; ?></td>
                                <td class="change"><?= $p->cidade; ?></td>
                                <td><?= $p->estado; ?></td>
                                <td><a href="atualizar-paciente.php?id=<?=base64_encode($p->id);?>">Ver</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </table> 
                <?php endif; ?>
            <?php else: ?>
                <h2>Paciente não encontrado!</h2>
            <?php endif; ?> 
        </div>
        <footer id="footer">
            <!--<p class="foot1">Copyright&copy; <?= date("Y"); ?></p>-->
        </footer>
    </body>
</html>