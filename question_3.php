<?php

class UmaClasse
{

    public function __construct()
    {
        print_r('X');
    }
}

class OutraClasse extends UmaClasse
{
    public function __construct()
    {
        print_r('Y');
    }
}

$class = new OutraClasse();
