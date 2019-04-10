<?php
//CONEXAO
require_once ('conexao.php');
//INICIANDO A SESSÃO
session_start();

if(isset($_POST['btn_cadastrar'])){
   $nome = mysqli_escape_string($connect, $_POST['nome']);
   $email = mysqli_escape_string($connect, $_POST['email']);
   $tel = mysqli_escape_string($connect, $_POST['tel']);
   $data_nasc = mysqli_escape_string($connect, $_POST['data_nasc']);
   $rg = mysqli_escape_string($connect, $_POST['rg']);
   $cpf = mysqli_escape_string($connect, $_POST['cpf']);
   $cnh = mysqli_escape_string($connect, $_POST['cnh']);
   $categoria = mysqli_escape_string($connect, $_POST['categoria']);
   $rua = mysqli_escape_string($connect, $_POST['rua']);
   $numero = mysqli_escape_string($connect, $_POST['numero']);
   $bairro = mysqli_escape_string($connect, $_POST['bairro']);
   $estado = mysqli_escape_string($connect, $_POST['estado']);
   $cidade = mysqli_escape_string($connect, $_POST['cidade']);
   $cep = mysqli_escape_string($connect, $_POST['cep']);
   $marca_veiculo = mysqli_escape_string($connect, $_POST['marca_veiculo']);
   $modelo_veiculo = mysqli_escape_string($connect, $_POST['modelo_veiculo']);
   $placa_veiculo = mysqli_escape_string($connect, $_POST['placa_veiculo']);
   $ano_fabrica = mysqli_escape_string($connect, $_POST['ano_fabrica']);
   $capacidade_peso = mysqli_escape_string($connect, $_POST['capacidade_peso']);
   $tipo_bau = mysqli_escape_string($connect, $_POST['tipo_bau']);

   $error = false;

   // VALIDAÇÃO
   if(empty($nome)){
      $_SESSION['mensage'] = "Por favor, preenche o campo nome !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($email)){
      $_SESSION['mensage'] = "Por favor, preenche o campo email !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($tel)){
      $_SESSION['mensage'] = "Por favor, preenche o campo telefone !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($data_nasc)){
      $_SESSION['mensage'] = "Por favor, preenche o campo data de nascimento !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($rg)){
      $_SESSION['mensage'] = "Por favor, preenche o campo RG !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($cpf)){
      $_SESSION['mensage'] = "Por favor, preenche o campo CPF !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($cnh)){
      $_SESSION['mensage'] = "Por favor, preenche o campo CNH !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($categoria)){
      $_SESSION['mensage'] = "Por favor, preenche o campo categoria !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($rua)){
      $_SESSION['mensage'] = "Por favor, preenche o campo rua !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($numero)){
      $_SESSION['mensage'] = "Por favor, preenche o campo numero !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($bairro)){
      $_SESSION['mensage'] = "Por favor, preenche o campo Bairro !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($estado)){
      $_SESSION['mensage'] = "Por favor, preenche o campo Estado !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($cidade)){
      $_SESSION['mensage'] = "Por favor, preenche o campo Cidade !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($cep)){
      $_SESSION['mensage'] = "Por favor, preenche o campo Cep !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($marca_veiculo)){
      $_SESSION['mensage'] = "Por favor, preenche o campo marca do veículo !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($modelo_veiculo)){
      $_SESSION['mensage'] = "Por favor, preenche o campo modelo do veículo !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($placa_veiculo)){
      $_SESSION['mensage'] = "Por favor, preenche o campo placa do veículo !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($ano_fabrica)){
      $_SESSION['mensage'] = "Por favor, preenche o campo no ano de fábrica !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($capacidade_peso)){
      $_SESSION['mensage'] = "Por favor, preenche o campo capacidade de peso!";
      header('Location: ../index.php#form');
      $error = true;
   }
   if(empty($tipo_bau)){
      $_SESSION['mensage'] = "Por favor, preenche o campo tipo do baú !";
      header('Location: ../index.php#form');
      $error = true;
   }
   if($error === false){
      $sql = "INSERT INTO cadastro_func (Nome, Email, Tel, Data_Nasc, RG, CPF, CNH, Categoria, Rua, Numero, Bairro, Estado, Cidade, Cep, Marca_Veiculo, Modelo_Veiculo, Placa_Veiculo, Ano_Fabrica, Capacidade_Peso, Tipo_Bau) 
              VALUES ('$nome', '$email', '$tel', '$data_nasc', '$rg', '$cpf', '$cnh', '$categoria', '$rua', '$numero', '$bairro', '$estado', '$cidade', '$cep', '$marca_veiculo', '$modelo_veiculo', '$placa_veiculo', '$ano_fabrica', '$capacidade_peso', '$tipo_bau')";
      if(mysqli_query($connect, $sql)){
         $_SESSION['mensage'] = "Cadastro com Sucesso !";
         header('Location: ../index.php#form');
      }else{
         $_SESSION['mensage'] = "Error em se Cadastrar !";
         header('Loaction: ../index.php#form');
      }
   }
}