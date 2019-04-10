<?php
// CONEXAO
require_once ('conexao.php');
// INICIANDO A SESSÃO
session_start();

if(isset($_POST['btn_enviar'])){
   $nome = mysqli_escape_string($connect, $_POST['nome']);
   $email = mysqli_escape_string($connect, $_POST['email']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);

   $error = false;

   // VALIDAÇÃO
   if(empty($nome)){
      $_SESSION['mensage'] = "Por favor, precisa preencher esse campo nome !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($email)){
      $_SESSION['mensage'] = "Por favor, precisa preencher esse campo email !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($tel)){
      $_SESSION['mensage'] = "Por favor, precisa preencher esse campo telefone !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if($error == false){
      // ISERINDO AO BANCO DE DADOS
      $sql = "INSERT INTO clientes (nome, email, tel) VALUES ('$nome', '$email', '$tel')";
      if(mysqli_query($connect, $sql)){
         $_SESSION['mensage'] = "Enviado com Sucesso, entraremos em contato !";
         header('Location: ../index.php#form');
      }else{
         $_SESSION['mensage'] = "Error ao enviar, por favo tente novamente !";
         header('Loaction: ../index.php#form');
      }
   }
}