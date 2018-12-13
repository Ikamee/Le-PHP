<?php
/**
 * Created by PhpStorm.
 * User: Dylan
 * Date: 13/12/2018
 * Time: 14:31
 */

abstract class Document
{
    protected $nom;
    protected $Auteur;
    protected $estEmpruntble;

    public function __construct($nom, $auteur)
    {
        $this->nom = $nom;
        $this->auteur = $auteur;
    }

    abstract public function coutEmprunt();

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    public function getAuteur()
    {
        return $this->Auteur;
    }

    public function setAuteur($Auteur): void
    {
        $this->Auteur = $Auteur;
    }

    public function getEstEmpruntble()
    {
        return $this->estEmpruntble;
    }

    public function main()
    {
        return $this->nom.' '.$this->auteur.' '.$this->estEmpruntble;

    }


}