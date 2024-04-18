# Mise en place d'une relation One To Many / Many To One  

**création d'une clef étrangère**

![base](./img/modele-relationnel.png=110x)

## la structure

```mysql
CREATE TABLE `personne` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `categ_id` int
)ENGINE=InnoDB;

CREATE TABLE `categ` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL
)ENGINE=InnoDB;

ALTER TABLE `personne` ADD FOREIGN KEY (`categ_id`) REFERENCES `categ` (`id`);
```

## les données (data)

```mysql
INSERT INTO `categ` (`id`, `nom`) VALUES
(1, 'VIP'),
(2, 'PAS VIP');

INSERT INTO `personne` (`id`, `prenom`, `nom`, `categ_id`) VALUES
(1, 'Brad', 'PITT', 1),
(2, 'Tom', 'CRUISE', 2),
(3, 'Angelina', 'JOLIE', 1);
```

## Déclaration des relations dans l'ORM

La classe **Personne**

```php
class Personne  extends Model
{
	public static $_table = "personne"; // la table personne Mysql
	public function categ()
	{
		return $this->belongs_to('Categ');
	}
}
```

La classe **Categ**

```php
class Categ  extends Model
{
	public static $_table = "categ";
	public function personnes()
	{
		return $this->has_many('Personne');
	}
}
```

## Affichage des données

**liste des personnes**

```php
$personnes = Model::factory('Personne')->find_many();
 foreach ($personnes as $personne) :
    echo $personne->prenom ."<br>";
    echo $personne->nom ."<br>";
    echo $personne->categ()->find_one()->nom ."<br>";
 endforeach;
```
![personnes](./img/personnes.png)
  
**liste des catégories**  


```php
$categs = Model::factory('Categ')->find_many();
 foreach ($categs as $categ) :
    echo $categ->nom ."<br>";

     foreach ($personnes as $personne) :
    echo $personne->prenom ."<br>";
    echo $personne->nom ."<br>";
    echo "<hr>";
     endforeach;
 endforeach;
```
![categories](./img/categories.png)