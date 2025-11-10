<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles - solutions</title>
</head>
<body>
    <h1>Boucles - solutions</h1>
 
    <h2>Solutions</h2>

    <p>Exercice 1 : Afficher les nombres de 1 à 10 avec une boucle for.</p>
    <?php
    for($i=1;$i<=10;$i++){
        echo "$i - ";
    }
    ?>

    <p>Exercice 2 : Créer la table de multiplication de 5 (de 1 à 10).</p>
    <?php
    $table=5;
    for ($i=1;$i<=10;$i++){
        echo "$i*$table = ".$i*$table. "<br>";
    }
    ?>
    
    <p> Exercice 3 : Afficher les éléments d’un tableau simple (prénoms).</p>
    <?php
    $prenoms=["Pierre","Paul","Jacques","Marie"];
    foreach($prenoms as $prenom){
        echo "$prenom - " ;
    }
    ?>
    
    <p>Exercice 4 : Compter de 10 à 0 avec une boucle while.</p>
    <?php
    $i=10;
    while ($i>=0){
        echo "$i - ";
        $i--;
    }
    ?>
    
    <p>Exercice 5 : Créer une liste de courses (tableau) et l’afficher avec foreach.</p>
    <?php

    ?>
    
    <p>Exercice 6 : Afficher la somme des valeurs d’un tableau de nombres.</p>
    <?php

    ?>
    
    <p>Exercice 7 : Lister les jours de la semaine dans un tableau et les afficher.</p>
    <?php

    ?>
    
    <p> Exercice 8 : Afficher les valeurs paires entre 1 et 20 avec une boucle for.</p>
    <?php

    ?>
    
    <p>Exercice 9 : Afficher seulement les notes supérieures à 10 dans un tableau de notes.</p>
    <?php

    ?>
    
    <p>Exercice 10 : Parcourir un tableau associatif (clé = nom, valeur = âge) et afficher les deux.
   </p>
    <?php

    ?>
    
    
</body>
</html>