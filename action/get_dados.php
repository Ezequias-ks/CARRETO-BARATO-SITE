<?php
//CONEXAO
require_once ('conexao.php');
//INICIANDO A SESSÃO
session_start();

if(isset($_POST['btn_enviar'])){
   $nome = mysqli_escape_string($connect, $_POST['nome']);
   $email = mysqli_escape_string($connect, $_POST['email']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);

   $error = false;

   // VALIDAÇÃO
   if(empty($nome)){
      $_SESSION['mensage'] = "Por favor preenche o campo NOME !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($email)){
      $_SESSION['mensage'] = "Por favor preenche o campo EMAIL !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($tel)){
      $_SESSION['mensage'] = "Por favor preenche o campo TEL !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if($error == false){
      $sql = "INSERT INTO clientes (nome, email, tel) VALUES ('$nome', '$email', '$tel')";
      if(mysqli_query($connect, $sql)){
         $_SESSION['mensage'] = "Cadastro com Sucesso !";
         header('Location: ../index.php#form');
      }else{
         $_SESSION['mensage'] = "Error em se Cadastrar !";
         header('Loaction: ../index.php#form');
      }
   }
}