<?php
include_once 'conexao.php';
session_start();
ob_start();
$btnEnviar = filter_input(INPUT_POST, 'btn_enviar', FILTER_SANITIZE_STRING);
if($btnEnviar){
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	
	$erro = false;
	
	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);
	
	if(in_array(' ',$dados)){
        $erro = true;
        $_SESSION['mensage'] = "Necessário preencher todos os campos";
        header('Location: ./index.php');
    }elseif(empty($nome) || strtr($nome, ' ') == false){
		$erro = true;
        $_SESSION['mensage'] = "Precisa Preencher O Campo Nome Corretamente";
        header('Location: ./index.php');
    }elseif(strlen($email)< 8 || strstr($email, '@') == false){
        $erro = true;
        $_SESSION['mensage'] = "Precisa ser um email válido";
        header('Location: ./index.php');
    }elseif(empty($tel)){
        $erro = true;
        $_SESSION['mensage'] = "Precisa ser um número válido";
        header('Location: ./index.php');
    }else{
        //INSERINDO OS DADOS AO BANCO
        $insert_tab = "INSERT INTO clientes (nome, email, tel) VALUES ('$nome', '$email', '$tel')";
        mysqli_query($connect, $insert_tab);

        if(mysqli_insert_id($connect)){
	        echo true;
        }else{
	        echo false;
        }
    }
}
	