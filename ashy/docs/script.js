document.addEventListener("DOMContentLoaded", function() {
  
    // Seleciona os elementos para o modal de login
  var loginModal = document.getElementById("loginModal");
  var closeLoginButton = document.getElementById("closeLogin");

  // Seleciona os elementos para o modal de criação de conta
  var showSignupButton = document.getElementById("showSignup");
  var signupModal = document.getElementById("signupModal");
  var closeSignupButton = document.getElementById("closeSignup");

  // Seleciona a camada de fundo escura
  var overlay = document.getElementById("overlay");

  // Exibe o modal de login quando o link for clicado
 

  // Exibe o modal de criação de conta quando o link for clicado
  showSignupButton.addEventListener("click", function() {
    signupModal.style.display = "block";
    overlay.style.display = "block"; // Exibe a camada de fundo escura
  });

  // Fecha o modal de login quando o botão de fechar for clicado
  closeLoginButton.addEventListener("click", function() {
    loginModal.style.display = "none";
    overlay.style.display = "none"; // Oculta a camada de fundo escura
  });

  // Fecha o modal de criação de conta quando o botão de fechar for clicado
  closeSignupButton.addEventListener("click", function() {
    signupModal.style.display = "none";
    overlay.style.display = "none"; // Oculta a camada de fundo escura
  });

    

  // Seleciona o formulário
  var signupForm = document.getElementById("signupForm");

  // Adiciona um ouvinte de evento para o evento "submit" do formulário
  signupForm.addEventListener("submit", function(event) {
    var senhaInput = document.getElementById("signupPassword");
    var confirmarSenhaInput = document.getElementById("confirmPassword");
    var mensagemErro = document.getElementById("mensagemErro");

    var senha = senhaInput.value;
    var confirmarSenha = confirmarSenhaInput.value;

    // Verifica se as senhas coincidem
    if (senha !== confirmarSenha) {
      mensagemErro.textContent = "As senhas não coincidem.";
      event.preventDefault(); // Impede o envio do formulário
    } else {
      mensagemErro.textContent = ""; // Limpa a mensagem de erro se as senhas coincidirem.
    }
  });

});

function showLogin() {
  loginModal.style.display = "block";
  overlay.style.display = "block"; // Exibe a camada de fundo escura
}