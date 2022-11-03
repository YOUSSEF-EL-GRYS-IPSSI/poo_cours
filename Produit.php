<?php


class Produit
{
    private $reference;
    private $name;
    private $price;
    

    public static $remise = 20 ;

    public function __construct($reference, $name, $price)
    {

        $this->setReference($reference);
        $this->setName($name);
        $this->setPrice($price);  
     }

    function setReference($reference){

        $this->reference = $reference;
    }

    function setName($name){

        $this->name = $name;
    }

    function setPrice($price){

        $this->price = $price;
    }
///////////////////////////////////////////////

    function getReference(){

        return $this->reference;
    }

    function getName(){

        return $this->name;
    }

    function getPrice(){

        return $this->price;
    }


}
