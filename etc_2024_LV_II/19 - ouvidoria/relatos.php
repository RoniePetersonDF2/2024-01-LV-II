<?php
require 'restritos.php';

if (verificaSePerfilDiferenteDeUsuario() == false) {
    header('location: index.php?message=Acesso restrito. Faça o login');
    exit();
}

include 'models/database/database.php';
include 'models/dao/relatodao.php';

$conn =  Database::getConexao();
$relatoDAO = new RelatoDAO($conn);
$relatos = $relatoDAO->getAll();
$count = 0;
?>
<?php include 'inc/header.php'; ?>
<main>

    <h1>Relatos</h1>

    <table>
        <thead>
            <th>#</th>
            <th>Data de Abertura</th>
            <th>Tipo</th>
            <th>Status</th>
            <th>Título</th>
            <th>Ação</th>
        </thead>

        <tbody>
            <?php if ($relatos) : ?>
                <?php foreach ($relatos as $relato) :
                    $count++; ?>
                    <tr>
                        <td><?= $count; ?></td>
                        <td><?= htmlspecialchars($relato['dataabertura']); ?></td>
                        <td><?= htmlspecialchars($relato['tipo']); ?></td>
                        <td><?= htmlspecialchars($relato['status']); ?></td>
                        <td><?= htmlspecialchars($relato['titulo']); ?></td>
                        <td>
                            <div class="table-btn">
                                <?php if ($relato['status'] == 'ABERTA' || $relato['status'] == 'PENDENTE') : ?>
                                    <a class="btn-outros" href="relatos-show.php?id=<?= $relato['id'] ?>">Responder</a>
                                <?php else: ?>
                                        <a href="relatos-show.php?id=<?= $relato['id'] ?>">Visualizar</a>
                                <?php endif; ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="6">Não existem registros cadastrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>

        <tfoot>
            <tr>
                <th colspan="6">
                    Total de registros: <?= $count; ?>
                </th>
            </tr>
        </tfoot>
    </table>
</main>
<?php include 'inc/footer.php'; ?>