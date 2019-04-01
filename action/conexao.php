<?php
//VARIAVEIS
$server_name ="localhost";
$user_name ="root";
$password_name ="";
$db_name ="carretobarato";

//CONEXAO COM A BASE DE DADOS
$connect = mysqli_connect($server_name, $user_name, $password_name, $db_name);
mysqli_set_charset($connect,"utf-8");
if(mysqli_connect_error()){
    echo "ERROR em se conectar ao Banco: ".mysqli_connect_error();
}