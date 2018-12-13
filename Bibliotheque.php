<?php
/**
 * Created by PhpStorm.
 * User: Dylan
 * Date: 13/12/2018
 * Time: 15:37
 */

class Bibliotheque
{
    private $name;
    private $liste;

    public function __construct($name)
    {
        $this->name=$name;
        $this->liste=[];
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }


    public function add(object $input)
    {
        $this->liste[]=$input;
    }

    public function getlist()
    {
        foreach ($this->liste as $value)
        {
            echo $value."\n";
        }
    }

    public function getCountDvd()
    {
        $count = 0;

        foreach ($this->liste as $value)
        {
            if ($value instanceof Video && $value->getType()=='DVD')
            {
                $count++;
            }
        }

        return $count;
    }
}