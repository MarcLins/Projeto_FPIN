<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<?php 
		$title ="Informações - WikiLítica PnP";
		include 'INC/head.php'; 
		?>
	</head>

<body>
	<?php 
		include 'INC/nav.php'; 
	?>
	
	<div class="pagina">		
		<h1>Organização PnP <br>(Povo no Poder)</h1>

		<p>A Organização PnP deseja fomentar a publicação de informações sobre candidatos aos cargos eletivos na eleição 2018 de forma que suas ideias e propostas sejam melhor conhecidas pela população, desta forma, espera-se que a população possa escolher melhor seus representantes.</p>		
		<form>
				<fieldset>
					<legend>Buscar Informações:</legend><br>
		  			Nome do Candidato:<input type="text" name="name"><br><br>
		  			Cidade:<input type="text" name="cidade"><br><br>
		  			Estado:<input type="text" name="estado"><br><br>
		  			<input type="submit" value="Buscar"><br><br>
				</fieldset>
			</form><br>
	</div>

	<div class="footer">
		<?php include 'INC/footer.php'; ?>
	</div>	
</body>
</html>