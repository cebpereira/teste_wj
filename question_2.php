<?php

class Pessoa
{
    protected $nome_completo;
    protected $idade;

    public function __construct($nome, $sobrenome, $idade)
    {
        $this->nome_completo = new stdClass();
        $this->nome_completo->nome = $nome;
        $this->nome_completo->sobrenome = $sobrenome;
        $this->idade = $idade;
    }

    public function cumprimentar()
    {
        print_r("Oi, Meu nome é {$this->nome_completo->nome}");
    }
}

class Empregado extends Pessoa
{
    private $cargo;

    public function __construct($nome, $sobrenome, $idade, $cargo)
    {
        $this->nome_completo = new stdClass();
        $this->nome_completo->nome = $nome;
        $this->nome_completo->sobrenome = $sobrenome;
        $this->idade = $idade;
        $this->cargo = $cargo;
    }
}

$empregado = new Empregado('Marcelo', 'Mussi', 30, 'Developer');
$empregado->cumprimentar();
