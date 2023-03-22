<!DOCTYPE html>
<html>
<head>
	<title>Alterar Valores</title>
</head>
<body>
	<h2>Alterar Valores na Tabela</h2>

	<?php
	// Verifica se o formulário foi enviado
	if (isset($_POST['submit'])) {

		// Conexão com o banco de dados
		$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tutu";


		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Verificação de erros na conexão
		if (!$conn) {
		  die("Conexão falhou: " . mysqli_connect_error());
		}

		// Obtém os valores do formulário
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$idade = $_POST['idade'];
		$sexo = $_POST['sexo'];
		$formacao = $_POST['formacao'];
		$habilidades = $_POST['habilidades'];

		// Executa uma consulta SQL UPDATE para alterar os valores na tabela
		$sql = "UPDATE tutucg SET nome='$nome', idade=$idade, sexo='$sexo', formacao='$formacao', habilidades='$habilidades' WHERE id=$id";

		if (mysqli_query($conn, $sql)) {
		  echo "Valores alterados com sucesso!";
		} else {
		  echo "Erro ao alterar valores: " . mysqli_error($conn);
		}

		// Encerra a conexão
		mysqli_close($conn);
	}
	?>

	<!-- Formulário HTML para inserir os valores -->
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		ID: <input type="text" name="id"><br>
		Nome: <input type="text" name="nome"><br>
		Idade: <input type="text" name="idade"><br>
		Sexo: <input type="text" name="sexo"><br>
		Formação: <input type="text" name="formacao"><br>
		Habilidades: <input type="text" name="habilidades"><br>
		<input type="submit" name="submit" value="Alterar">
	</form>

</body>
</html>
