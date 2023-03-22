<?php

// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutu";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta SQL para recuperar os valores da tabela
$sql = "SELECT id, nome, idade, sexo, formacao, habilidades FROM tutucg";
$result = $conn->query($sql);

// Verifica se há resultados
if ($result->num_rows > 0) {
    // Loop através dos resultados
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Idade: " . $row["idade"]. " - Sexo: " . $row["sexo"]. " - Formação: " . $row["formacao"]. " - Habilidades: " . $row["habilidades"]. "<br>";
    }
} else {
    echo "Não foram encontrados resultados na tabela.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
