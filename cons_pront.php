<?php
	
	$pront = $_POST['pront'];
	include('cabecalho_conexao.php');
	$SQL = "SELECT * FROM pessoas WHERE id = $pront";
	
	$dados_recuperados = mysqli_query($con, $SQL);
	
	if($dados_recuperados){
		if(mysqli_num_rows($dados_recuperados)>0){
		
			while(($resultado = mysqli_fetch_assoc($dados_recuperados)) != null){
				echo $resultado['nome']."-". $resultado['idade'] ."-". $resultado['endereco']."<br>";
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
	mysqli_close($con);
	echo "<a href='menu.php'>Voltar</a>";
	
?>