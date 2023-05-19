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
class Voiture 
{
    public $couleur = "vert";
    public $annee = 2010;
    public function demmarer(){
        return "Je demarre comme ça";
    }
}

$voiture = new Voiture;
echo 'la couleur de la voiture est ' . $voiture->couleur . '<br>';
echo 'annee de la voiture ' . $voiture->annee . '<br>';
echo 'maniere dont la voiture demarre ' . $voiture->demmarer() . '<br>';

echo '<pre>'; print_r($_SERVER); echo '</pre>'; echo '<br>';
echo '<pre>'; print_r($_GLOBALS); echo '</pre>'; echo '<br>';
echo '<pre>'; print_r($_REQUEST); echo '</pre>'; echo '<br>';

?>


    
</body>
</html>