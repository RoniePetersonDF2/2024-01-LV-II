<?php
include 'models/database/database.php';
include 'models/dao/usuariodao.php';

$conn =  Database::getConexao();
$usuarioDAO = new UsuarioDAO($conn);
$usuarios = $usuarioDAO->getAll();
$count = 0;

include 'inc/header.php';
?>
<main>
    <h1>Usuários</h1>

    <div class="div-create">
        <a href="usuarios-create.php" class="btn">Novo usuário</a>
    </div>
    <table>
        <thead>
            <th>#</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Tipo</th>
            <th>Status</th>
            <th>Ação</th>
        </thead>

        <tbody>
            <?php if ($usuarios) : ?>
                <?php foreach ($usuarios as $usuario) :
                    $count++; ?>
                    <tr>
                        <td><?= $count; ?></td>
                        <td><?= htmlspecialchars($usuario['nome']); ?></td>
                        <td><?= htmlspecialchars($usuario['email']); ?></td>
                        <td><?= htmlspecialchars($usuario['tipousuario']); ?></td>
                        <td><?= htmlspecialchars($usuario['statususuario']) == 1 ?  'ATIVO' : 'INATIVO'; ?></td>
                        <td>
                            <div class="table-btn">
                                <a href="usuarios-show.php?id=<?= $usuario['id'] ?>">Detalhar</a>
                                <a class="btn-elogio" href="usuarios-edit.php?id=<?= $usuario['id'] ?>">Alterar</a>
                                <a class="btn-outros" href="usuarios-delete.php?id=<?= $usuario['id'] ?>" onclick="return confirm('Confirma a operação de exclusão?');">Excluir</a>
                            </div>
                        </td>
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
</main>
<?php include 'inc/footer.php'; ?>