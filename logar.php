<?php 
session_start();

$bdUsuario ="admin";
$bdPass = "123";

$user =  $_REQUEST['username'];
$pass =  $_REQUEST['password'];

if($user == $bdUsuario){
    if($pass == $bdPass){
      $_SESSION['usuario'] = $bdUsuario;
      $_SESSION['senha'] = $bdPass;
      header('Location: home.php');
    }
    else{echo "senha errada ?"; }
}
else{
    echo "usuario errado ?";
};
?>