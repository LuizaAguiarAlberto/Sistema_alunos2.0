<?php
	
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$idade = $_POST['idade'];
	
	include('cabecalho_conexao.php');
	
	$SQL = "INSERT INTO pessoas (nome, endereco, idade)
			VALUE ('$nome', '$endereco', $idade)";
	$texto = "Aluno inserido com sucesso<br>";
	include('rodape_conexao.php');
?>