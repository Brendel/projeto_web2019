<link rel="stylesheet" type="text/css" href="stilo.css">

<?php
	
	if (isset($_POST)) {

        $nome = $_POST["nome"];
		$rg = $_POST["rg"];
		$cpf = $_POST["cpf"];
        $sexo = $_POST["sexo"];
        $dtNascimento = $_POST["dtnascimento"];
        $endereco = $_POST["endereco"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $pais = $_POST["pais"];
		$email = $_POST["email"];
        $telefone = $_POST["telefone"];
        
        if (isset($_POST["dtnascimento"])){
		
        echo "<p> Cadastro realizado com sucesso! </p>";	
        
        }


	}

	else{
        echo "<p> Formulario incompleto </p>";
	}

	
?>