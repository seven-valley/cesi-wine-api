<?php

// detecter la method ???

// detecter URL
// http://localhost/wine-api/rest/personne/4

// http://localhost/wine-api/rest/toto/tutu/tata/4

 // toto/tutu/tata/4


if(isset($_SERVER['REDIRECT_URL'])){ 
	$url =$_SERVER['REDIRECT_URL'];
}

 $method = $_SERVER['REQUEST_METHOD'];

 $tab['url'] =$url;
 $tab['method'] =$method;
 echo json_encode($tab);