<?php
	$pront = $_POST['pront'];
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$endereco = $_POST['endereco'];

	include('cabecalho_conexao.php');
	
	$SQL = "UPDATE pessoas SET nome='$nome', idade='$idade', endereco='$endereco' WHERE id=$pront";
	
	include('rodape_conexao.php');
	
	header('location:cons_todos_alunos.php');
?>