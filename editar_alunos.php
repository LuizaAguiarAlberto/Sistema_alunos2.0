<?php
	$pront = $_GET['pront'];
	include('cabecalho_conexao.php');
	$SQL = "SELECT * FROM pessoas WHERE id = $pront";
	
	$alterar = mysqli_query($con, $SQL);
	
	if($alterar){
		if(mysqli_num_rows($alterar)>0){
		
			while(($resultado = mysqli_fetch_assoc($alterar)) != null){
				$pront = $resultado['id'];
				$nome = $resultado['nome'];
				$idade = $resultado['idade'];
				$endereco = $resultado['endereco'];
			}		
		}
		else{
			echo "Usuário não identificado no banco de dados";
		}
	}
	else{
		echo "Há um problema na sintaxe do SQL";
		echo mysqli_error ($con);
	}
	
	echo'
	<form action="alterar.php" method="POST">
	
		<label>Prontuario:</label>
		<input type="text" name="pront" value="'.$pront.'" readonly="readonly">
		<br>
		
		<label>Nome:</label>
		<input type="text" name="nome" value="'.$nome.'">
		<br>
		
		<label>Idade:</label>
		<input type="number" name="idade" value="'.$idade.'">
		<br>
		
		<label>Endereco:</label>
		<input type="text" name="endereco" value="'.$endereco.'">
		<br>
		
		
		
		<input type="submit" value="Salvar Informacoes">		
	</form>	
	';

	mysqli_close($con);

?>