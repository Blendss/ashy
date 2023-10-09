<?php
// Inicie a sessão
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ashy";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Obtenha as credenciais do formulário
    $email = $_POST["loginEmail"];
    $senha = $_POST["loginPassword"];

    // Consulta SQL para obter o hash da senha do banco de dados
    $sql = "SELECT id, nome, senha FROM cadastro WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $senhaHash = $row["senha"];

        // Verifique a senha usando password_verify
        if (password_verify($senha, $senhaHash)) {
            // Autenticação bem-sucedida, obtenha o nome do usuário
            $nomeDoUsuario = $row["nome"];

            // Armazene o email e o nome na sessão
            $_SESSION["email"] = $email;
            $_SESSION["nome"] = $nomeDoUsuario;

            echo "Login bem-sucedido! Bem-vindo, " . $nomeDoUsuario;
            // Redirecione para a mesma página
            header("Location: index.php");
            exit();
        } else {
            // Autenticação falhou, defina a mensagem de erro
            $_SESSION["erroLogin"] = "Email ou senha incorretos.";
            // Redirecione para a mesma página
            header("Location: index.php");
            exit();
        }
    } else {
        // Usuário não encontrado, defina a mensagem de erro
        $_SESSION["erroLogin"] = "Usuário não encontrado.";
        // Redirecione para a mesma página
        header("Location: index.php");
        exit();
    }

    $conn->close();
} else {
    // Se o formulário não foi submetido, redirecione para a mesma página
    header("Location: index.php");
    exit();
}
?>
