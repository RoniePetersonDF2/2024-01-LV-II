<?php
class LoginDAO 
{
    private $usuarios = [];

    public function __construct($array_usuarios)
    {
        $this->usuarios = $array_usuarios;
    }


    public function Login(string $nome, $password)
    {
        foreach ($this->usuarios as $usuario) {
            if ($usuario['nome'] == $nome && $usuario['password'] == $password ) {
                return $usuario;
            }
        }
        return false;
    }

}
