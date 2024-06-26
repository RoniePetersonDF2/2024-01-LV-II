<?php

class UsuarioDAO
{
    private PDO $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function getAll(): array
    {
        $query = 'SELECT * FROM usuarios;';
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById(int $id): array
    {
        $query = 'SELECT * FROM usuarios WHERE id = :id;';
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $value = $stmt->fetch(PDO::FETCH_ASSOC);
        return $value != false ? $value : [];
    }

    public function getByEmail(string $email): array
    {
        $query = 'SELECT * FROM usuarios WHERE email = :email;';
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $value = $stmt->fetch(PDO::FETCH_ASSOC);
        return $value != false ? $value : [];
    }

    public function delete(int $id): bool
    {
        $query = 'DELETE FROM usuarios WHERE id = :id;';
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $value = $stmt->rowCount();
        return $value > 0 ? true : false;
    }

    public function create(
        string $nome,
        string $email,
        string $password,
        string $tipoUsuario,
        int $statusUsuario
    ): int|false {
        $query = 'INSERT INTO usuarios
                (nome, email, password, tipousuario, statususuario)
                VALUES
                (:nome, :email, :password, :tipousuario, :statususuario);';
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->bindValue(':tipousuario', $tipoUsuario, PDO::PARAM_STR);
        $stmt->bindValue(':statususuario', $statusUsuario, PDO::PARAM_INT);
        $stmt->execute();
        return (int) $this->conn->lastInsertId();
    }

    public function update(
        int $id,
        string $nome,
        string $email,
        string $tipoUsuario,
        int $statusUsuario
    ): int|false {
        $query = 'UPDATE usuarios SET
            nome            = :nome,
            email           = :email,
            tipousuario     = :tipousuario,
            statususuario   = :statususuario
            WHERE id = :id;';
        $stmt = $this->conn->prepare($query);

        $stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':tipousuario', $tipoUsuario, PDO::PARAM_STR);
        $stmt->bindValue(':statususuario', $statusUsuario, PDO::PARAM_INT);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $value = $stmt->rowCount();
        return $value > 0 ? (int) $value : false;
    }

}
