<?php

require 'Utilisateur.php';
require 'Produit.php';



$produit1 = new Produit("p1","Produit1",100);

// echo "<pre>";
// var_dump($produit1);
// echo "</pre>";

echo $produit1::$remise;
// echo "Le nom de la reference est : ".$produit1->getReference()."<br>";
// echo "Le nom du produit est : ".$produit1->getName()."<br>";
// echo "Le prix du produit coûte : ".$produit1->getPrice()."euro"."<br>";

