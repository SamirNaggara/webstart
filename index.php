<?php 
echo "<h1>Hello World</h1>";
?>
<p>C'est parti pour 3 ans !</p>

<h2><?= "Salut"?></h2>
<!-- Ceci permet d'ouvrir le php, et d'ajouter un echo -->

<?php
/* Debut d'un commentaire
phpinfo();   -> Permet d'afficher pleins d'infos sur le serveur
Fin d'un commentaire
*/ 

// Double slash permet de faire un commentaire sur une ligne



// VARIABLES

$nom = "<p>Samir</p>";

echo $nom;

$nom = "<p>Robert</p>";

echo $nom;

$nom2 = $nom;

$nom = "<p>Tom</p>";

echo $nom2;

/*
Lorsqu'on affecte une variable à une autre variable, on peut modifier la première sans modifier la seconde

*/

echo gettype($nom);

// Type Int

$num1 = 8;

echo gettype($num1);

$num2 = 12;

$addition = $num1 + $num2;
$soustraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;
$modulo = $num1 % $num2;

echo $division;
echo gettype($division);










