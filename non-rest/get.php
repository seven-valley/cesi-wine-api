<?php
require_once './inc/config.inc.php';
require_once './inc/class/produit.class.php';

// la table personne devient une classe Entity Personne
$produits = Model::factory('Produit')->find_many(); // ici 1 c l ID



// créer un objet vide


$tableau =[]; 

foreach( $produits as $p){
    $prod =new stdClass();
    foreach($att_produit as $att){
        $prod->$att = $p->$att;
    }
   $tableau[] =$prod;
}
echo json_encode($tableau);
