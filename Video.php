<?php
/**
 * Created by PhpStorm.
 * User: Dylan
 * Date: 13/12/2018
 * Time: 14:32
 */

class Video extends Document
{
    private $type;


    public function __construct($nom, $auteur, $type)
    {
        parent::__construct($nom, $auteur);
        $this->type = $type;
        $this->estEmpruntble = true;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type): void
    {
        $this->type = $type;
    }

    public function coutEmprunt()
    {
        return 70;
    }

    public function main()
    {
        return parent::main().' '.$this->type;
    }

}