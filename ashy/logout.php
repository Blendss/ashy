<?php
session_start(); // Inicie a sessão, se ainda não estiver iniciada

// Encerre a sessão
session_unset(); // Limpe todas as variáveis de sessão
session_destroy(); // Destrua a sessão

// Redirecione para a página de login ou outra página apropriada
header("Location: index.php");
?>
