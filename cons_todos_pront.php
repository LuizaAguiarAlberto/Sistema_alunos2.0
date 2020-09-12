<?php
include('cabecalho.inc.php')
?>
	<form action="cons_pront.php" method="POST">
		<label>Prontuário:</label>
		<input type="number" name="pront">
		<br>

		<input type="submit" value="Consultar">		
	</form>

	
<?php
	include("rodape.inc.php");
?>