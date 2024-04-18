<?php

class Categ  extends Model
{
	public static $_table = "categ";
	public function personnes()
	{
		return $this->has_many('Personne');
	}
}

class Personne  extends Model
{
	public static $_table = "personne"; // la table personne Mysql
	public function categ()
	{
		return $this->belongs_to('Categ');
	}
}


