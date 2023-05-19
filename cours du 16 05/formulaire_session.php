<?php
session_save_path("./tmp");
session_start();
if($_POST){
    $_SESSION["pseudo"] = $_POST['pseudo'];
}

if (isset($_SESSION['pseudo'])){
    echo "votre pseudo est: " . $_SESSION['pseudo'] . "<br>";
    echo '<br> <p>la pause dans 8minutes</p>';
} else {
    echo ' <form method="post" action="">
    <label for="pseudo">Pseudo:</label><br>
    <input type="text" name="pseudo" value""><br>
    <input type="submit" value="envoi>"';
}