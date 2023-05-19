<?php
$mysqli = new Mysqli("localhost","db_user", "12345", "entreprise");

echo '<pre>';
print_r($mysqli);
echo '</pre>';
echo '<pre>';
print_r(get_class_methods($mysqli));
echo '</pre>';

$mysqli->query("INSERT INTO entreprise.employes(prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Christophe', 'LE GOFF', 'm', 'formateur', '2023-04-17', 100)");
echo $mysqli->affected_rows . ' enregistrement(s) affecté(s) par la requète INSERT<br>'; 