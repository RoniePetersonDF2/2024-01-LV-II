<?php
include 'models/database/database.php';
include 'models/dao/relatodao.php';
include 'models/dao/respostadao.php';

$conn =  Database::getConexao();
$relatoDAO = new RelatoDAO($conn);
$id = $_GET['id'] ?? 0;
$relato = $relatoDAO->getById($id);
if (!$relato) {
    header('Location: index.php?message=Relato não encontrado.');
    exit();
}

$respostas = [];
$count = 0;
if ($relato['tipo'] === 'RECLAMACAO') {
    $respostaDAO = new RespostaDAO($conn);
    $respostas = $respostaDAO->getByRelatoId($id);
}
?>
<?php include 'inc/header.php'; ?>
<main>
    <h1>Relatos - Nº: <?= $relato['id']; ?></h1>

    <br>

    <ul>
        <li class="lista-row">
            <h2>Data de abertura</h2>
            <h2>Tipo</h2>
            <h2>Status</h2>
        </li>

        <li class="lista-row">
            <p><?= $relato['dataabertura']; ?></p>
            <p><?= $relato['tipo']; ?></p>
            <p><?= $relato['status']; ?></p>
        </li>

        <li>
            <h2>Título</h2>
            <p><?= $relato['titulo']; ?></p>
        </li>

        <li>
            <h2>Descrição</h2>
            <p><?= $relato['descricao']; ?></p>
        </li>
    </ul>

    <br>
    <?php if ($relato['status'] === 'CONCLUIDA') :  ?>
        <div class="container-form-buttons">
            <a href="relatos.php" class="btn btn-voltar">Voltar</a>
        </div>
    <?php else : ?>
        <h2>Resposta</h2>
        <br>
        <form action="relatos-resposta-save.php" method="post">
            <input type="hidden" name="relatoId" value="<?= $relato['id']; ?>">
            <textarea class="form-controle" name="resposta" id="resposta" rows="10" cols="100" placeholder="Informe a resposta ao relato." required autofocus></textarea>

            <br>
            <h2>Status da Resposta</h2>
            <select name="statusResposta" class="form-controle">
                <option value="CONCLUIDA">CONCLUÍDA</option>
                <option value="PENDENTE">PENDENTE</option>
                <option value="CANCELADA">CANCELADA</option>
            </select>

            <div class="container-form-buttons">
                <button type="submit" class="btn-button">Enviar</button>
                <a class="btn btn-voltar" href="relatos.php">Voltar</a>
            </div>
        </form>
    <?php endif; ?>

    <?php if ($relato['tipo'] === 'RECLAMACAO') :  ?>
        <br><hr><br>
        <h2>Respostas ao Relato</h2>

        <table>
        <thead>
            <th>#</th>
            <th>Data Resposta</th>
            <th>Status</th>
            <th>Descrição</th>
        </thead>

        <tbody>
            <?php if ($respostas) : ?>
                <?php foreach ($respostas as $resposta) :
                    $count++; ?>
                    <tr>
                        <td><?= $count; ?></td>
                        <td><?= htmlspecialchars($resposta['dataresposta']); ?></td>
                        <td><?= htmlspecialchars($resposta['statusresposta']) == 1 ?  'CONCLUÍDO' : 'PENDENTE'; ?></td>
                        <td><?= htmlspecialchars($resposta['descricao']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="5">Não existem registros cadastrados.</td>
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
    <?php endif; ?>

</main>
<?php include 'inc/footer.php'; ?>