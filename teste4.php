<?php

// Recebe o registro a ser excluído
$registro = $_POST['registro'];

// Abre o arquivo de texto em modo de leitura
$handle = fopen("dados.txt", "r");

// Cria um novo arquivo de texto para armazenar os dados atualizados
$temp_handle = fopen("dados_temp.txt", "w");

// Lê o arquivo de texto e copia os registros que não devem ser excluídos para o novo arquivo de texto
while (($line = fgets($handle)) !== false) {
	if (trim($line) !== trim($registro)) {
		fwrite($temp_handle, $line);
	}
}

// Fecha os arquivos de texto
fclose($handle);
fclose($temp_handle);

// Remove o arquivo original
unlink("dados.txt");

// Renomeia o arquivo temporário para o nome original
rename("dados_temp.txt", "dados.txt");

// Redireciona de volta para a página principal
header("Location: teste3.php");

?>
