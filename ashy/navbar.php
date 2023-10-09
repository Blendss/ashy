<div class="header">
    <div>
        <h4>Título do site</h4>
    </div>

    <?php
    session_start();

    if (isset($_SESSION["nome"])) {
        // Exiba uma mensagem de boas-vindas
        echo '<div style="display: flex; flex-direction: row;" id="divconta">';
        echo '<h4 style="padding-right: 10px;">Olá ' . $_SESSION["nome"] . ', bem-vindo(a)!</h4>';
        echo '<button id="botaoSair" class="btn_sair">Sair</button>';
        echo '</div>';
    } else {
        echo '<div style="display: flex; flex-direction: row;" id="divconta">';
        echo '<a href="#" onclick="showLogin()" id="showLogin" style="padding-right: 10px;">Entrar</a>';
        echo '<a href="#" id="showSignup" class="link2">Crie uma conta</a>';
        echo '</div>';
    }
    ?>
</div>
<div class="navbar">
    <ul class="lista">
        <li class="item">
            <h4><a href="index.php">História</a></h4>
        </li>
        <li class="item">
            <h4><a href="#">Perfil</a></h4>
        </li>
        <li class="item">
            <h4><a href="#">Arte</a></h4>
        </li>
        <li class="item">
            <h4><a href="tendencias.php">Tendências</a></h4>
        </li>
    </ul>
</div>

<!-- INICIO DOS POP UPS  -->
<div id="overlay" class="overlay"></div>
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeLogin">&times;</span>
        <h2>Login</h2>
        <form method="POST" action="auth.php">
        <div class="divform">
            <input required class="forminput" type="email" id="loginEmail" name="loginEmail" placeholder="E-mail">
            <input required class="forminput" type="password" id="loginPassword" name="loginPassword" placeholder="Senha">
            <button class="forminput" type="submit" id="loginButton">Login</button>
            <?php
            if (isset($_SESSION["erroLogin"])) {
                echo '<div style="color: red;">' . $_SESSION["erroLogin"] . '</div>';
                unset($_SESSION["erroLogin"]); // Limpa a mensagem de erro
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo 'showLogin();'; // Chama a função showLogin()
                echo '});';
                echo '</script>';
            }
            ?>
            </div>
        </form>
    </div>
</div>


<div id="signupModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeSignup">&times;</span>
        <h2>Criar Conta</h2>
        <form id="signupForm" method="POST" action="conexao.php">
            <div style="display: flex; flex-direction: row;">
                <div style="width: 50%;">
                    <img class="tend" src="docs/img/tend02.jpg" alt="imagem tendencia 2" style="height: 85%; width: 80%; padding-top: 25px;">
                </div>
                <div class="divform">
                    <input required class="forminput" type="text" id="fullName" name="fullName" placeholder="Nome Completo">
                    <input required class="forminput" type="email" id="signupEmail" name="signupEmail" placeholder="E-mail">
                    <input required class="forminput" type="password" id="signupPassword" name="signupPassword" placeholder="Senha">
                    <input required class="forminput" type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirmar Senha">
                    <button class="forminput" type="submit" id="signupButton">Criar Conta</button>
                    <div id="mensagemErro" style="color: red;"></div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var botaoSair = document.getElementById("botaoSair");

        if (botaoSair) {
            botaoSair.addEventListener("click", function() {
                // Redireciona para o arquivo logout.php ao clicar no botão "Sair"
                window.location.href = "logout.php";
            });
        }
    });
</script>