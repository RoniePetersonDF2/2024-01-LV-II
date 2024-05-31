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
        return [];
    }

    public function getById(int $id): array
    {
        return [];
    }

    public function getByEmail(string $email): array
    {
        return [];
    }

    public function delete(int $id): bool
    {
        return true;
    }

    public function create(): int|false {
        return true;
    }



    public function update(): int|false {
        return true;
    }

}
