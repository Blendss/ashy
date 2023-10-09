<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ashy";

// Criar uma conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Receber dados do formulário
$nome = $_POST["fullName"];
$email = $_POST["signupEmail"];
$senha = $_POST["signupPassword"];

// Hash da senha (recomendado para segurança)
$hashedSenha = password_hash($senha, PASSWORD_DEFAULT);

// Inserir dados na tabela
$sql = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome', '$email', '$hashedSenha')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Erro ao criar a conta: " . $conn->error;
}

// Fechar a conexão
$conn->close();
?>
