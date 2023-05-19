<?php
session_save_path("./tmp");
session_start();
echo 'bonjour ' . $_SESSION['pseudo'] . ' as tu reçu les adaptateurs ? <br>';  