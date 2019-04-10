<?php
//CONEXAO
require_once ('conexao.php');
//INICIANDO A SESSÃO
session_start();

if(isset($_POST['btn_enviar'])){
   $nome = mysqli_escape_string($connect, $_POST['nome']);
   $email = mysqli_escape_string($connect, $_POST['email']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);

   $error = false;

   // VALIDAÇÃO
   if(empty($nome)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($email)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($tel)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($data_nasc)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($rg)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($cpf)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($cnh)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($categoria)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($rua)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($numero)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($bairro)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($estado)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($cidade)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($cep)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($marca_veiculo)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($modelo_veiculo)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($placa_veiculo)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($ano_fabrica)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($capacidade_peso)){
      $_SESSION['mensage'] = "Por favor preenche !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($tipo_bau)){
      $_SESSION['mensage'] = "Por favor preenche !";
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