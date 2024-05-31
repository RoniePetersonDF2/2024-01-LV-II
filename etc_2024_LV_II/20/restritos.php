<?php
    session_start();
    function verificaSeUsuarioEstaLogado()
    {
        // var_dump(isset($_SESSION['usuario']));
        return isset($_SESSION['usuario']);
    }

    function verificaSePerfilDiferenteDeUsuario()
    {
        return verificaSeUsuarioEstaLogado() && getTipoUsuario() !== 'USUARIO';
    }

    function getTipoUsuario() 
    {
        return isset($_SESSION['usuario']['tipo']) ? $_SESSION['usuario']['tipo'] : false;
    }

    function verificaSePerfilAdmin()
    {
        return verificaSeUsuarioEstaLogado() &&
        $_SESSION['usuario']['tipo']== 'ADMIN';
    }

    function verificaSePerfilAnalista()
    {
        return verificaSeUsuarioEstaLogado() &&
        $_SESSION['usuario']['tipo']== 'ANALISTA';
    }