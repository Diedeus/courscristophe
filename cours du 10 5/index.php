<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$prenom = "Alberick, Adrien, Hugo, Nadege";
echo "<p>Bonjour $prenom</p>";

$tab = explode ("," , $prenom); 
print_r($tab);

echo '<br>';

$listePrenom = array("Gregoire","Nathalie", "Emilie", "François", "Georges");
$listePrenom2 = ["Gregoire","Nathalie", "Emilie", "François", "Georges"];

print_r($listePrenom);
echo '<br>';
echo '<pre>';
print_r($listePrenom2);
echo '</pre>';
echo '<br>';
echo $listePrenom[2];echo "   " ; echo $listePrenom[1];
echo '<br>';

$listePays[] = 'France';
$listePays[] = 'Italie';
$listePays[] = 'Espagne';
$listePays[] = 'Angleterre';
echo "<pre>" ; print_r($listePays); echo "</pre>";
echo '<br>';
echo implode('<br>',$listePays); 
echo '<br>';
?>

<?php
echo '<br>';
for($i = 0; $i < sizeof($listePays); $i++)
{
    echo $listePays[$i] . '<br>';
}
echo '<br>';

foreach($listePays as $cle => $valeur)
{
    echo "$cle - $valeur <br>";
}
echo '<br>';

?>

<?php
$tabMultiDimensionnel = array(0 => array("prenom" => "Julien", "nom" => "Cottet"), 1 => array("prenom" => "Nicolas", "nom" => "lafaye"));
echo '<pre>'; print_r($tabMultiDimensionnel); echo '</pre>';
print_r('le prénom est ' . $tabMultiDimensionnel[0]['prenom']);

?>
</body>
</html>