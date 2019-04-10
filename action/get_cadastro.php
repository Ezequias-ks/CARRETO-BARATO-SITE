<?php
// CONEXAO
require_once ( 'conexao.php');
// INICIANDO A SESSÃO
session_start();

//PEGANDO OS DADOS DO FORMULARIO
if(isset($_POST['btn_cadastrar'])){
    
     //PEGANDO OS DADOS DO INPUT 
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $tel = $_POST['tel'];
     $dataNasc = $_POST['data_nasc'];
     $rg = $_POST['rg'];
     $cpf = $_POST['cpf'];
     $cnh = $_POST['cnh'];
     $categoria = $_POST['categoria'];
     $rua = $_POST['rua'];
     $number = $_POST['numero'];
     $bairro = $_POST['bairro'];
     $estado = $_POST['estado'];
     $cidade = $_POST['cidade'];
     $cep = $_POST['cep'];
     $marcaVeiculo = $_POST['marca'];
     $modeloVeiculo = $_POST['modelo'];
     $placaVeiculo = $_POST['placa'];
     $anoFabrica = $_POST['ano_fabrica'];
     $capacidadePeso = $_POST['capacidade'];
     $tipoBau = $_POST['tipo_bau'];

    print_r($_POST);
     //VARIAVEL ERROS
     $erro = false;

    
     //VALICACÕES
     if(empty($nome)){
        $_session['msg'] = "Por favor preeencha o nome";
     }
    
     if(empty($email)){
        $_SESSION['msg'] = "digite seu email corretamente";
        header('Location: ../index.php');
        $erro = true;
     }
     if(empty($tel)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo, com seu numero de telefone";
         header('Location: ../index.php');
         $erro = true;
     }
     if(empty($dataNasc)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo, com a data de nascimento";
         header('Location: ../index.php');
         $erro = true;
     }
     if(empty($rg)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo, com RG válido";
         header('Location: ../index.php');
         $erro = true;
     }
     if(empty($cpf)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo, com CPF válido";
         header('Location: ../index.php');
         $erro = true;
     }
     if(empty($cnh)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo, com sua CNH válida";
         header('Location: ../index.php');
         $erro = true;
     }
     if(empty($categoria)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo, com sua Categoria";
         header('Location: ../index.php');
         $erro = true;
     }
     if(empty($rua)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo, com o nome da rua válida";
         header('Location: ../index.php');
         $erro = true;
     }
     if(empty($number)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo, com um numero válido";
         header('Location: ../index.php');
         $erro = true;
     }
     if(empty($bairro)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo, com nome do bairro válido";
         header('Location: ../index.php');
         $erro = true;
     }
     if(empty($estado)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo, com seu Estado";
         header('Location: ../index.php');
         $erro = true;
     }
     if(empty($cidade)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo, com sua cidade exemplo: SP";
         header('Location: ../index.php');
         $erro = true;
     }
     if(empty($cep)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo digite um cep válido";
         header('Location: ../index.php');
         $erro = true;
     }
     if(empty($marcaVeiculo)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo, aqui a marca do seu veículo";
         header('Location: ../index.php');
         $erro = true;
     }
     if(empty($modeloVeiculo)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo, modelo do veículo";
         header('Location: ../index.php');
         $erro = true;
     }
     if(empty($placaVeiculo)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo, com dígito correto";
         header('Location: ../index.php');
         $erro = true;
     }
     if(empty($anoFabrica)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo, com dígito correto";
         header('Location: ../index.php');
         $erro = true;
     }
     if(empty($capacidadePeso)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo, com dígito correto do Peso";
         header('Location: ../index.php');
         $erro = true;
     }
     if(empty($tipoBau)){
         $_SESSION['msg'] = "Por favor! Preencha esse campo, selecionando com o tipo do seu Bau exemplo: Fechado";
         header('Location: ../index.php');
         $erro = true;
     }
     if($erro === false){
      //INSERINDO OS DADOS AO BANCO
      $sql = "INSERT INTO cadastro_func ( Nome, Email, Tel, Data_Nasc, RG, CPF, CNH, Categoria, Rua, Numero, Bairro, Estado, Cidade, Cep, Marca_Veiculo, Modelo_Veiculo, Placa_Veiculo, Ano_Fabrica, Capacidade_Peso, Tipo_Bau) VALUES ('$nome', '$email', '$tel', '$dataNasc', '$rg', '$cpf', '$cnh', '$categoria', '$rua', '$number', '$bairro', '$estado', '$cidade', '$cep','$marcaVeiculo', '$modeloVeiculo', '$placaVeiculo', '$anoFabrica', '$capacidadePeso','$tipoBau')";

         if(mysqli_query($connect, $sql)){
            $_SESSION['msg'] = "Cadastro com Sucesso !";
            header('Location: ../index.php#cadastrar');
         }else{
            $_SESSION['msg'] = "Error ao se Cadastrar !";
            header('Loaction: ../index.php#cadastrar');
         }
   }
}