<?php
require_once './inc/config.inc.php';
require_once './inc/class/produit.class.php';

// la table personne devient une classe Entity Personne
$produit = Model::factory('Produit')->find_one($_GET["id"]); // ici 1 c l ID



//$body // convertir json en objet php
$body =  json_decode(file_get_contents('php://input'));


$produit->nom = $body->nom;
$produit->annee = $body->annee;
$produit->prix =$body->prix;
$produit->save();
$tab['id'] = $produit->id;
echo json_encode($tab);
