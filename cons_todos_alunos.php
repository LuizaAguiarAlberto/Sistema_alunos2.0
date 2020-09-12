<?php
	include('cabecalho_conexao.php');
	$SQL = "SELECT * FROM pessoas";
	
	$dados_recuperados = mysqli_query($con, $SQL);
	if($dados_recuperados){
		if(mysqli_num_rows($dados_recuperados)>0){
			echo"<table border='1'>";
			echo"<tr>
					<th>Prontuario</th>
					<th>Nome</th>
					<th>Idade</th>
					<th>Endereco</th>
					<th colspan='2'>Operacoes</th>
				</tr>";
			while(($resultado = mysqli_fetch_assoc($dados_recuperados)) != null){
				echo '<tr>';
					echo '<td> '.$resultado["id"].'</td>';
					echo '<td> '.$resultado["nome"].'</td>';
					echo '<td> '.$resultado["idade"].'</td>';
					echo '<td> '.$resultado["endereco"].'</td>';
					
					echo '<td><a href="editar_alunos.php?pront='.$resultado["id"].'">Editar</a></td>';
					echo '<td><a href="remover_alunos.php?pront='.$resultado["id"].'">Remover</a></td>';
				echo '</tr>';
			}
			echo "</table>";	
		}
	}
	else{
		echo"Há um problema na sintaxe do SQL<br>";
		echo mysqli_error($con);
	}
	
	mysqli_close($con);
	
?>