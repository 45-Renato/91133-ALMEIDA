document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Impede o envio do formulário

    
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    console.log("Usuário:", username);
    console.log("Senha:", password);

    // Verificação simples 
    if (username === "admin" && password === "1234") {
        alert("Login bem-sucedido!");
    } else {
        alert("Usuário ou senha incorretos.");
    }

    // salvar nome de usuario no localstorage
    localStorage.setItem("username", username);

    // Se a validação passar, abre o painel
    window.location.href = "painel.html";
    alert("Login bem sucedido!!")

});
