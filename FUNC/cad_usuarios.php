<html>

<head>
	<title>Cadastrando...</title>
</head>
<body>

	<?php 
		
		$nome=$_POST['nome'];
		$endereco=$_POST['endereco'];
		$cidade=$_POST['cidade'];
		$estado=$_POST['estado'];
		$email=$_POST['email'];
		$senha=$_POST['senha'];
		$cpf=$_POST['cpf'];
		$telefone=$_POST['telefone'];
		$data_nasc=$_POST['data_nasc'];
		$genero=$_POST['genero'];

		//$host = "127.0.0.1";
		//$user = "root";
		//$pass = "instrutor";
		//$banco = "cad_usuarios";

		//$mysqli_connection = new MySQLi('$host', '$user', '$pass', '$banco');

		$link = mysqli_connect("127.0.0.1", "root", "instrutor", "cad_usuarios") or die ("Erro ao conectar Banco de Dados !");

		$sql = "INSERT INTO usuario(nome, endereco, cidade, estado, email, senha, cpf, telefone, data_nasc, genero) VALUES ('$nome', '$endereco', '$cidade', '$estado', '$email', '$senha', '$cpf', '$telefone', '$data_nasc', '$genero' )";

		mysqli_query($link, $sql) or die ("Erro ao cadastrar registro !");

		mysqli_close($link);
		echo "<h2>Cliente Cadastrado com Sucesso !<h2>";



		//var_dump($link);

		//$db = mysql_select_db($banco, $link);

		/*if(!$link){
   			 echo "Error: Unable to connect to MySQL." . PHP_EOL;
    		echo "<br>Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    		echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
   			 exit;

			}else{
   				
					echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
					echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
			}*/

	?>

	



	
	</body>
	</html>