<?php

    # incluindo arquivo da classe Usuarios.
    require 'usuarios.php';

    # criando objeto da classe Usuario.
    $usuario = new Usuarios();
    # Atribuindo um valor a propriedade nome do objeto usuario.
    $usuario->nome = "João Pedro";

    # leio e faço a impressao do valor da propriedade nome do objeto usuario.
    echo "<p>O nome do usuário é: <b>{$usuario->nome}</b></p>";
