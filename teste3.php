<!DOCTYPE html>
<html>
<head>
	<title>Excluir Cadastro</title>
</head>
<body>

	<h1>Excluir Cadastro</h1>

	<form action="teste4.php" method="post">
		<label for="registro">Selecione o registro a ser excluído:</label>
		<select id="registro" name="registro">
			<?php
				// Abre o arquivo de texto com os dados
				$handle = fopen("dados.txt", "r");

				// Lê o arquivo de texto e exibe os registros existentes
				while (($line = fgets($handle)) !== false) {
					echo "<option value='$line'>$line</option>";
				}

				// Fecha o arquivo de texto
				fclose($handle);
			?>
		</select><br><br>

		<input type="submit" value="Excluir">
	</form>

</body>
</html>
