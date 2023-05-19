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
echo '
<div>
    <h2>Tshirt Gris</h2>
    <img src="./Images/Tshirtgris.jpg" alt="ceci est un Tshirt" style="width:3vw">
    <p>30€</p>
    <form method="post" action=""><input type="submit" name="ajout_panier" value="ajout au panier"></form>

</div>' ;

?>

<?php 

$i = 0;
while($i<5)
{
    echo "$i /";
    $i++;
}

echo '<br> <br>';

$j = 0; 
do {
    echo $j;
} while ($j > 0); 

echo '<br> <br>'; 
for($k =  0; $k <= 15; $k++)
{
    echo $k;
}

echo '<br> <br>'; 

$tab=["var1","var2","var3"];
echo $tab[1];
echo '<br>'; 
echo count($tab);

echo '<br> <br>'; 

echo '<select>';
for($l = 1; $l <= 31; $l++)
{
    echo "<option>$l</option>";
}
echo '</select>';

echo '<br> <br>'; 

// echo '<table border=\1><tr> ';
// for($m = 0; $m < 99; $m++)
// {
//     switch($m){
//         case'$m<10':
//             echo '<br>';
//          echo "<td> $m </td>";
//          case'$m<20':
//             echo '<br>';
//          echo "<td> $m </td>";
//          case'$m<30':
//             echo '<br>';
//          echo "<td> $m </td>";
//          case'$m<40':
//             echo '<br>';
//          echo "<td> $m </td>";
//          case'$m<50':
//             echo '<br>';
//          echo "<td> $m </td>";
//          case'$m<60':
//             echo '<br>';
//          echo "<td> $m </td>";
//          case'$m<70':
//             echo '<br>';
//          echo "<td> $m </td>";
//          case'$m<80':
//             echo '<br>';
//          echo "<td> $m </td>";
//          case'$m<90':
//             echo '<br>';
//          echo "<td> $m </td>";
//          case'$m<100':
//             echo '<br>';
//          echo "<td> $m </td>";
//     }
    
// }
// echo "</tr></table>";
//! solution 1 tableau 1 à 99
echo '<table border=\1>';
for ($m = 0; $m < 10; $m++)
{
    echo'<tr>';
    for ($n = 0; $n < 10; $n++)
    {
        echo '<td>' . $m . $n . '</td>';}
        echo '</tr>';
    
} echo '</table>';

echo '<br> <br>'; 

//! solution 2 tableau 1 à 99

$p = 0;
echo '<table border=\1>';
for($ligne = 0; $ligne < 10; $ligne++)
{
    echo '<tr>';
    for($cellule = 0; $cellule <10; $cellule++)
    {
        echo '<td>' . $p . '</td>';
        $p++;
    }
    echo '</tr>';
}
echo '</table>';

echo '<br> <br>'; 

//! solution 3 tableau 1 à 99

$p = 0;
echo '<table border=\1>';
for($q = 0; $q < 100; $q++)
{
    if($q % 10 === 0){
    echo '</tr>';
}
echo '<td>' . $q . '</td>';
}
echo '</table>';

echo '<br> <br>'; 

//! solution 4 tableau 1 à 99
echo '<table border=\1>';
$r = 0;
while($r <= 99)
{
    echo '</tr>';
    for($s = 0; $s <= 9; $s++)
    {
        echo "<td>$r</td>";
        $r++;
    }
    echo '</tr>';
}
echo '</table>';

echo '<br> <br>'; 


?>
















</body>
</html>