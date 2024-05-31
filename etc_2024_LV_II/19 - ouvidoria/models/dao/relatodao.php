<?php
date_default_timezone_set('America/Sao_Paulo');
class RelatoDAO
{
    private PDO $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function getAll(): array
    {
        $query = 'SELECT * FROM relatos ORDER BY dataabertura desc, tipo;';
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById(int $id): array
    {
        $query = 'SELECT * FROM relatos WHERE id = :id;';
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $value = $stmt->fetch(PDO::FETCH_ASSOC);
        return $value != false ? $value : [];
    }

    public function delete(int $id): bool
    {
        $query = 'DELETE FROM relatos WHERE id = :id;';
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $value = $stmt->rowCount();
        return $value > 0 ? true : false;
    }

    public function create(
        string $titulo,
        string $descricao,
        string $tipoRelato,
        string $anexo,
        string $usuarioId
    ): int|false {

        $dataAbertura = date('Y-m-d H:i:s');
        $usuarioId = $usuarioId != null ? $usuarioId : null;
        $query = 'INSERT INTO relatos 
        (dataabertura, titulo, descricao, tipo, usuarioid, anexo) 
        VALUES 
        (:dataabertura, :titulo, :descricao, :tipo, :usuarioid, :anexo);';
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':dataabertura', $dataAbertura, PDO::PARAM_STR);
        $stmt->bindValue(':titulo', $titulo, PDO::PARAM_STR);
        $stmt->bindValue(':descricao', $descricao, PDO::PARAM_STR);
        $stmt->bindValue(':tipo', $tipoRelato, PDO::PARAM_STR);
        $stmt->bindValue(':usuarioid', $usuarioId, PDO::PARAM_STR);
        $stmt->bindValue(':anexo', $anexo, PDO::PARAM_STR);
        $stmt->execute();
        return (int) $this->conn->lastInsertId();
    }


    public function updateStatusRelato(
        int $id,
        string $status
    ): int|false {
        $query = 'UPDATE relatos SET
        status   = :status
        WHERE id = :id;';
        $stmt = $this->conn->prepare($query);

        $stmt->bindValue(':status', $status, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $value = $stmt->rowCount();
        return $value > 0 ? (int) $value : false;
    }
}
