<?php
require_once './inc/config.inc.php';
require_once './inc/class/business-object.inc.php';
// je viens récupérer un tableau de personnes
$personnes = Model::factory('Personne')->find_many();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste VIP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-4">
            <h1> Liste des personnes</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Catégorie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($personnes as $personne) : ?>
                        <tr>
                            <td><?= $personne->prenom ?></td>
                            <td><?= $personne->nom ?></td>
                            <!-- comment récupérer le nom de la categorie -->
                            <?php
                            // var_dump($personne->categ()->find_one()->nom);
                            // die();
                            ?>
                            <td><?= $personne->categ()->find_one()->nom ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</body>

</html>