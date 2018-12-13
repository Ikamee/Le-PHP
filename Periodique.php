<?php
/**
 * Created by PhpStorm.
 * User: Dylan
 * Date: 13/12/2018
 * Time: 14:32
 */

class Periodique extends Livre
{
    private $numero;

    public function __construct($nom, $auteur,$nbPage,$numero)
    {
        parent::__construct($nom, $auteur, $nbPage, false);
        $this->numero = $numero;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }


    public function main()
    {
        return parent::main().' '.$this->numero;
    }
}