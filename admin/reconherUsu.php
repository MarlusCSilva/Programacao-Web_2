<?php
session_start();
$qualquer = $_SESSION['marlus'];
echo '<h1> Bem vindo'. $qualquer.'</h1>';
?>