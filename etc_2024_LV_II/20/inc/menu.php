<nav>
    <ul class="nav-principal">
        <?php if (verificaSePerfilDiferenteDeUsuario() == false) : ?>
            <li><a href="relatos-create.php?tipo=sugestao">Sugestão</a></li>
            <li><a href="relatos-create.php?tipo=elogio">Elogio</a></li>
            <li><a href="relatos-create.php?tipo=reclamacao">Reclamação</a></li>
        <?php endif; ?>
        <?php if (verificaSePerfilDiferenteDeUsuario()) : ?>
            <li>
                <a href="relatos.php">Relatos</a>
            </li>
            <li>
                <a href="usuarios.php">Usuários</a>
            </li>
        <?php endif; ?>
        <li>
            <?php if (verificaSeUsuarioEstaLogado() == false) : ?>
                <a href="login.php">Login</a>
            <?php else : ?>
                <a href="logout.php">Logout</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>