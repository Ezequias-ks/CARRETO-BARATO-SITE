<?php
//CONEXAO
require_once ('conexao.php');
//INICIANDO A SESSÃO
session_start();

if(isset($_POST['btn_enviar'])){
   $nome = mysqli_escape_string($connect, $_POST['nome']);
   $email = mysqli_escape_string($connect, $_POST['email']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);

   $sql = "INSERT INTO clientes (nome, email, tel) VALUES ('$nome', '$email', '$tel')";

   if(mysqli_query($connect, $sql)){
      $_SESSION['mensage'] = "Cadastro com Sucesso !";
      header('Location: ../index.php');
   }else{
      $_SESSION['mensage'] = "Error em se Cadastrar !";
      header('Loaction: ../index.php');
   }
}