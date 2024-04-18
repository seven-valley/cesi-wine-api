<?php
require_once './inc/config.inc.php';
require_once './inc/class/business-object.inc.php';
// je viens récupérer un tableau de personnes
$produits = Model::factory('Produit')->find_many();
// detecter la method ???

// detecter URL
// http://localhost/wine-api/rest/personne/4

// http://localhost/wine-api/rest/toto/tutu/tata/4

 // toto/tutu/tata/4


if(isset($_SERVER['REDIRECT_URL'])){ 
	$url =$_SERVER['REDIRECT_URL'];
}

 $method = $_SERVER['REQUEST_METHOD'];

//  $tab['url'] =$url;
//  $tab['method'] =$method;
//  echo json_encode($tab);

$tableau =[]; 
// je fais la liste de tous les attribut de produits
$att_produit = ['id', 'nom', 'annee','prix'];
foreach( $produits as $p){
    $prod =new stdClass();
    foreach($att_produit as $att){
        $prod->$att = $p->$att;
    }
   $tableau[] =$prod;
}
echo json_encode($tableau);