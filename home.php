<?php
session_start();
include "verifica.php";
echo "Ola {$_SESSION ['usuario']}, você está logado!";
?>