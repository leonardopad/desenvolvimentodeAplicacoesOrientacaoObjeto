<?php

class produto
{
    public $codigo;
    public $nome;
    public $valor;
    public $qtdeEstoque;

    public function consultarEstoque() : int
    {
        echo 'consultando estodque do produto' . $this->nome. '\n';
    }
    public function baixarEstoque(): bool
    {
        echo 'Baixando estoque do produto' . $this->nome .'\n';
    }
}
