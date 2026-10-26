<?php
require_once("config.php");
require_once("fonctions.php");
//afficheg le tab Notes :
echo "<h2>1. Tableau des notes initiales</h2>";
echo"<pre>";
affichageTab($notes);
echo "<h2>2. Moyenne des notes</h2>";
echo"</pre>";
$somme= Moyenne($notes);
echo "<p>La moyenne est : $somme</p>";
$doub=doublee($notes);
echo "<h2>3. Notes supérieures ou égales à 10</h2>";
echo"<pre>";
affichageTab($doub);
echo "<h2>4. Notes triées par ordre décroissant</h2>";
echo"</pre>";
$tableNote=trier($notes);
echo"<pre>";
print_r($tableNote);
echo"</pre>";
$tab=tabPlus1($notes);
echo "<h2>5. Notes après ajout de 1</h2>";
echo"<pre>";
affichageTab($tab);
echo"</pre>";
?>

