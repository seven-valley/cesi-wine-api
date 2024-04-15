<?php

// Produit class = table produit
class Produit  extends Model
{
	// la jointure de la class BO Businnes Object( ou Entity)  
	// et la table personne
	public static $_table = "produit"; // la table personne Mysql
	
}
$att_produit = ['id', 'nom', 'annee','prix'];
