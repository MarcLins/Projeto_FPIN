<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<?php 
		$title ="Usuários - WikiLítica PnP";
		include 'INC/head.php'; 
		?>
	</head>

<body>
	<?php 
		include 'INC/nav.php'; 
	?>
	
	<div class="pagina">		
		<h1>Cadastro de Usuário</h1>

		<p>A Organização PnP deseja fomentar a publicação de informações sobre candidatos aos cargos eletivos na eleição 2018 de forma que suas ideias e propostas sejam melhor conhecidas pela população, desta forma, espera-se que a população possa escolher melhor seus representantes.</p>

		<form>
			<fieldset>
				<legend>Informe seus Dados:</legend><br>
	  			Nome:<input type="text" name="name"><br><br>
	  			Endereço:<input type="text" name="endereço"><br><br>
	  			Cidade:<input type="text" name="cidade"><br><br>
	  			Estado:<input type="text" name="estado"><br><br>
	  			E-mail:<input type="email" name="email"><br><br>
	  			Senha:<input type="password" name="senha"><br><br>
	  			CPF:<input type="number" name="cpf"><br><br>
	  			Telefone:<input type="number" name="telefone"><br><br>
	  			Data de Nascimento:<input type="date" name="nasc"><br><br>
	  			<input type="radio" name="genero" value="homem" checked>Homem<br><br>
	  			<input type="radio" name="genero" value="mulher">Mulher<br><br>
	  			<input type="submit" value="Enviar"><br><br>
			</fieldset>
		</form><br>		
	</div>
	
	<div class="footer">
		<?php include 'INC/footer.php'; ?>
	</div>	
</body>
</html>