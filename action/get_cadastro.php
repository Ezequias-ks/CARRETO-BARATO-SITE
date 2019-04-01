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
if(isset($_POST['btn_cadastrar'])){
    
     //PEGANDO OS DADOS DO INPUT 
     $nome = clear($_POST['nome']);
     $email = clear($_POST['email']);
     $tel = clear($_POST['tel']);
     $dataNasc = clear($_POST['data_nasc']);
     $rg = clear($_POST['rg']);
     $cpf = clear($_POST['cpf']);
     $cnh = clear($_POST['cnh']);
     $categoria = clear($_POST['categoria']);
     $rua = clear($_POST['rua']);
     $number = clear($_POST['numero']);
     $bairro = clear($_POST['bairro']);
     $estado = clear($_POST['estado']);
     $cidade = clear($_POST['cidade']);
     $cep = clear($_POST['cep']);
     $marcaVeiculo = clear($_POST['marca']);
     $modeloVeiculo = clear($_POST['modelo']);
     $placaVeiculo = clear($_POST['placa']);
     $anoFabrica = clear($_POST['ano_fabrica']);
     $capacidadePeso = clear($_POST['capacidade']);
     $tipoBau = clear($_POST['tipo_bau']);
    
     //VARIAVEL ERROS
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
        echo "Por favor! Preencha esse campo, com seu numero de telefone";
        $erro = 1;
     }
     if(empty($dataNasc)){
        echo "Por favor! Preencha esse campo, com a data de nascimento";
        $erro = 1;
     }
     if(empty($rg)){
        echo "Por favor! Preencha esse campo, com RG válido";
        $erro = 1;
     }
     if(empty($cpf)){
        echo "Por favor! Preencha esse campo, com CPF válido";
        $erro = 1;
     }
     if(empty($cnh)){
        echo "Por favor! Preencha esse campo, com sua CNH válida";
        $erro = 1;
     }
     if(empty($categoria)){
        echo "Por favor! Preencha esse campo, com sua Categoria";
        $erro = 1;
     }
     if(empty($rua)){
        echo "Por favor! Preencha esse campo, com o nome da rua válida";
        $erro = 1;
     }
     if(empty($number)){
        echo "Por favor! Preencha esse campo, com um numero válido";
        $erro = 1;
     }
     if(empty($bairro)){
        echo "Por favor! Preencha esse campo, com nome do bairro válido";
        $erro = 1;
     }
     if(empty($estado)){
        echo "Por favor! Preencha esse campo, com seu Estado";
        $erro = 1;
     }
     if(empty($cidade)){
        echo "Por favor! Preencha esse campo, com sua cidade exemplo: SP";
        $erro = 1;
     }
     if(empty($cep)){
        echo "Por favor! Preencha esse campo digite um cep válido";
        $erro = 1;
     }
     if(empty($marcaVeiculo)){
        echo "Por favor! Preencha esse campo, aqui a marca do seu veículo";
        $erro = 1;
     }
     if(empty($modeloVeiculo)){
        echo "Por favor! Preencha esse campo, modelo do veículo";
        $erro = 1;
     }
     if(empty($placaVeiculo)){
        echo "Por favor! Preencha esse campo, com dígito correto";
        $erro = 1;
     }
     if(empty($anoFabrica)){
        echo "Por favor! Preencha esse campo, com dígito correto";
        $erro = 1;
     }
     if(empty($capacidadePeso)){
        echo "Por favor! Preencha esse campo, com dígito correto do Peso";
        $erro = 1;
     }
     if(empty($tipoBau)){
        echo "Por favor! Preencha esse campo, selecionando com o tipo do seu Bau exemplo: Fechado";
        $erro = 1;
     }

     if($erro == 0){
        echo "Todos os campos foi digitado corretamente";
     }
     
    //INSERINDO OS DADOS AO BANCO
    $insert_tab = "INSERT INTO cadastro_func (
                                    Nome, 
                                    Email, 
                                    Tel,
                                    Data_Nasc, 
                                    RG, 
                                    CPF,
                                    CNH, 
                                    Categoria, 
                                    Rua,
                                    Numero, 
                                    Bairro, 
                                    Estado,
                                    Cidade, 
                                    Cep, 
                                    Marca_Veiculo,
                                    Modelo_Veiculo,
                                    Placa_Veiculo,
                                    Ano_Fabrica,
                                    Capacidade_Peso,
                                    Tipo_Bau
                                    ) 
                                    VALUES (
                                        '$nome', 
                                        '$email', 
                                        '$tel', 
                                        '$dataNasc', 
                                        '$rg', 
                                        '$cpf', 
                                        '$cnh', 
                                        '$categoria', 
                                        '$rua', 
                                        '$number', 
                                        '$bairro', 
                                        '$estado', 
                                        '$cidade', 
                                        '$cep', 
                                        '$marcaVeiculo', 
                                        '$modeloVeiculo', 
                                        '$placaVeiculo', 
                                        '$anoFabrica', 
                                        '$capacidadePeso',
                                        '$tipoBau'
                                    )";
    mysqli_query($connect, $insert_tab);

    if(mysqli_insert_id($connect)){
	echo true;
    }else{
	    echo false;
    }
}