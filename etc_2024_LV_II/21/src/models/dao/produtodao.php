<?php
class ProdutoDAO 
{
    private $produtos = [];

    public function __construct($array_produtos)
    {
        $this->produtos = $array_produtos;
    }


    public function getAll(): array
    {
        return $this->produtos;
    }

    public function getById(int $id)
    {
        foreach ($this->getAll() as $produto) {
            if ($produto['id'] == $id) {
                return $produto;
            }
        }
        return false;
    }
}