<?php
session_save_path("./tmp");
session_start();
$_SESSION['pseudo'] = "Mathieu";
$_SESSION['mdp'] = "Balmont";
print_r($_SESSION);
unset($_SESSION['mdp']);
echo '<br>';
print_r($_SESSION);
session_destroy();
echo '<br>';
print_r($_SESSION);