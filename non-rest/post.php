<?php
require_once './inc/config.inc.php';
require_once './inc/class/produit.class.php';
// créer un objet produit
$produit = Model::factory('Produit')->create();


//$body // convertir json en objet php
$body =  json_decode(file_get_contents('php://input'));


$produit->nom = $body->nom;
$produit->annee = $body->annee;
$produit->prix =$body->prix;
$produit->save();
$tab['id'] = $produit->id;
echo json_encode($tab);



