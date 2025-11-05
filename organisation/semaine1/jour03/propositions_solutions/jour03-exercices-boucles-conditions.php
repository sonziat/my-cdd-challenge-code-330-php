<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 03 - Conditions</title>
</head>
<body>
    <h1>Les Conditions</h1>
    <h2>Exercices pratiques</h2>
    <pre>
Jour 3 — Conditions & Boucles (exercices supplémentaires, sans correction)

    // Exercice 1 : Vérifier si un utilisateur est majeur (afficher "Majeur" ou "Mineur" selon $age).

    // Exercice 2 : Afficher un message selon l'heure (matin, après-midi, soir) à partir de $heure (0-23).
    // Exercice 3 : Afficher une note en lettre (A, B, C, D, E) selon une note sur 20 dans $note.

    // Exercice 4 : Vérifier si une variable $val est vide (empty) et afficher un message approprié.

    // Exercice 5 : Vérifier un mot de passe simple contenu dans $password (au moins 6 caractères).

    // Exercice 6 : Afficher un message selon l'âge ($age) : enfant (<13), ado (13-17), adulte (18-64), senior (65+).

    // Exercice 7 : Tester si un nombre $n est pair ou impair.

    // Exercice 8 : Choix de menu avec switch : $choix (1: "Nouveau", 2: "Ouvrir", 3: "Quitter").

    // Exercice 9 : Rediriger selon le jour de la semaine (1=lundi ... 7=dimanche) avec switch et afficher une action différente pour chaque jour.

    // Exercice 10 : Afficher une météo simulée : selon la valeur de $meteo ("soleil", "pluie", "nuageux", "neige"), afficher un message adapté.

    </pre>

    <h2>Solutions</h2>

<?php
    echo "<p>Exercice 1 : Vérifier si un utilisateur est majeur (afficher \"Majeur\" ou \"Mineur\" selon \$age).</p>";

    echo "Solution 1 <br>";
    $age = 15;
    if ($age >= 18) {
        echo "Vous avez $age ans et vous êtes <b>Majeur</b>";
    } else {
        echo "Vous avez $age ans et vous êtes <b>Mineur</b>";
    }
    echo "<br>";

    echo "Solution 2 <br>";
    $age = 18;
    echo $age . "<br>";
    echo($age) > 17 ? "Majeur" : "Mineur";
    echo "<br>";
?>

<p>Exercice 2 : Afficher un message selon l'heure (matin, après-midi, soir) à partir de $heure (0-23).</p>
<?php
    echo "<p>Solution 1 : if... else </p>";
    $heure = date("H:i");
    echo $heure."<br>";
    // matin : minuit à <12h; aprem : de 12h à <18h; Soir : de 18h à <minuit
    if($heure <=12){
        echo "matin";
    }elseif($heure<=18){
        echo "aprem";
    }else{
        echo "soir";
    }
    echo "<br>";
    echo "<p>Solution 1.2: Autre syntaxe du if  </p>";
    $h = 22;
    echo $h."H <br>";
    if($h <= 12) echo "matin";
    elseif($h <= 18) echo "aprem";
    else echo "Soir";

    echo "<p>Solution 2: Switch </p>";
     // aproximatif -> il faut caster ou convertir l'heure en entier.
     //TODO: convertir l'heure en entier.
     $heure=3;
     echo $heure."H <br>";
     switch($heure){
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
        case 10:
        case 11:
        case 12:
            echo "matin";
            break;
        case 13:
        case 14:
        case 15:
        case 16:
        case 17:
        case 18:
            echo "aprem";
            break;
        default : echo "soir";
     }
?>
<?php
    echo "<p>Solution 3: Match </p>";
    $age = 60;

    $result = match (true) {
        $age >= 65 => 'senior',
        $age >= 25 => 'adult',
        $age >= 18 => 'young adult',
        default => 'kid',
    };
var_dump($result);

?>





<hr>

// Exercice 3 : Afficher une note en lettre (A, B, C, D, E) selon une note sur 20 dans $note.



// Exercice 4 : Vérifier si une variable $val est vide (empty) et afficher un message approprié.



// Exercice 5 : Vérifier un mot de passe simple contenu dans $password (au moins 6 caractères).



// Exercice 6 : Afficher un message selon l'âge ($age) : enfant (<13), ado (13-17), adulte (18-64), senior (65+).



// Exercice 7 : Tester si un nombre $n est pair ou impair.


// Exercice 8 : Choix de menu avec switch : $choix (1: "Nouveau", 2: "Ouvrir", 3: "Quitter").



// Exercice 9 : Rediriger selon le jour de la semaine (1=lundi ... 7=dimanche) avec switch et afficher une action différente pour chaque jour.


// Exercice 10 : Afficher une météo simulée : selon la valeur de $meteo ("soleil", "pluie", "nuageux", "neige"), afficher un message adapté.
?>

</body>
</html>