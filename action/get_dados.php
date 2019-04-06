<?php
//SESSAO
session_start();
//CONEXAO
require_once 'conexao.php';
//CLEAR
function clear($input){
   GLOBAL $connect;
   //SQL
   $var = mysqli_escape_string($connect, $input);
   //XSS
   $var = htmlspecialchars($var);
   return $var;
}
//VERIFICANDO O CLICK DO BTN/ ESCAPANDO AS STRINGS/ PEGANDO DADOS DO INPUT
if (isset($_POST['btn_enviar'])){
   $name = $_POST['nome'];
   $email = $_POST['email'];
   $tel = $_POST['tel'];

   $erro = 0;

   //VALICACÕES
   if(empty($nome) || strstr($nome, ' ') ==false){
            $_SESSION['mensage'] = "Digite corretamente seu nome";
            $erro = 1;
            header('Location: ../index.php');
   }
   if(strlen($email)< 8 || strstr($email, '@') ==false){
            $_SESSION['mensage'] = "digite seu email corretamente";
            $erro = 1;
            header('Location: ../index.php');
   }
   if(empty($tel)){
            $_SESSION['mensage'] = "digite um numero válido";
            $erro = 1;
            header('Location: ../index.php');
   }
   if($erro == 0){
            $_SESSION['mensage'] = "Todos os campos foi digitado corretamente";
            header('Location: ../index.php');
   }

   //INSERINDO AO BANCO DE DADOS, AS INFORMAÕES DO CLIENTE VINDO DO FORMULARIO
   $sql = "INSERT INTO clientes (nome, email, tel) VALUES ('$name', '$email', '$tel')";
   if(mysqli_query($connect, $sql)){ 
            $_SESSION['mensage'] = "Cadastro com Sucesso!";
            header('Location: ../index.php');
         }else{
            $_SESSION['mensage'] = "ERROR ao cadastrar!";
            header('Location: ../index.php');
         }

}
