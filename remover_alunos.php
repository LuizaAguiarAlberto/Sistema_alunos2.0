<?php
	$pront = $_GET['pront'];
	
	include('cabecalho_conexao.php');
	
	$SQL = "DELETE FROM pessoas WHERE id=$pront";
	
	include('rodape_conexao.php');
	
	header('location:cons_todos_alunos.php');
?>