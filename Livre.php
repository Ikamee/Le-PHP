<?php
/**
 * Created by PhpStorm.
 * User: Dylan
 * Date: 13/12/2018
 * Time: 14:32
 */

class Livre extends Document
{

    protected $nbPage;

    public function __construct($nom, $auteur, $nbPage, $estEmpruntable)
    {
        parent::__construct($nom, $auteur);
        $this->nbPage = $nbPage;
        $this->estEmpruntble = $estEmpruntable;
    }

    public function getNbPage()
    {
        return $this->nbPage;
    }

    public function setNbPage($nbPage): void
    {
        $this->nbPage = $nbPage;
    }

    public function setEstEmpruntble($estEmpruntble): void
    {
        $this->estEmpruntble = $estEmpruntble;
    }

    public function coutEmprunt()
    {
        return $this->nbPage *0.50;
    }

    public function main()
    {
        return parent::main().' '.$this->nbPage;
    }
}