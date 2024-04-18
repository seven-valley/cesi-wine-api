<?php

// class Region  extends Model
// {
// 	public static $_table = "region";
// 	public function personnes()
// 	{
// 		return $this->has_many('Produit');
// 	}
// }

class Produit  extends Model
{
	public static $_table = "produit"; // la table personne Mysql
	// public function region()
	// {
	// 	return $this->belongs_to('Region');
	// }
}


