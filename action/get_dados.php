<?php
// CONEXAO
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

//PEGANDO OS DADOS DO FORMULARIO
if(isset($_POST['btn_enviar'])){
    
     //PEGANDO OS DADOS DO INPUT 
     $nome = clear($_POST['nome']);
     $email = clear($_POST['email']);
     $tel = clear($_POST['tel']);
    
     $erro = 0;

     //VALICACÕES
     if(empty($nome) OR strstr($nome, ' ') ==false){
        echo "Digite corretamento seu nome";
        $erro = 1;
     }
     if(strlen($email)< 8 || strstr($email, '@')==false){
        echo "digite seu email corretamente";
        $erro = 1;
     }
     if(empty($tel)){
        echo "digite um numero válido";
        $erro = 1;
     }

     if($erro == 0){
        echo "Todos os campos foi digitado corretamente";
     }
     
    //INSERINDO OS DADOS AO BANCO
    $insert_tab = "INSERT INTO clientes (nome, email, tel) VALUES ('$nome', '$email', '$tel')";
    mysqli_query($connect, $insert_tab);

    if(mysqli_insert_id($connect)){
	echo true;
    }else{
	    echo false;
    }
}

    

