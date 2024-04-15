<?php
require_once './inc/config.inc.php';
require_once './inc/class/produit.class.php';

// la table personne devient une classe Entity Personne
$produit = Model::factory('Produit')->find_one($_GET["id"]); // ici 1 c l ID

$produit->delete();
$tab["message"]="done";
echo json_encode($tab);