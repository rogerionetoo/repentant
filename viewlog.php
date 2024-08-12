<?php
// Simples autenticação por senha
$senhaCorreta = "sua_senha_aqui";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senha = $_POST['123'];

    if ($senha === $senhaCorreta) {
        // Mostra o log de acessos
        if (file_exists("acessos.log")) {
            echo "<h1>Log de Acessos</h1>";
            echo "<pre>" . file_get_contents("acessos.log") . "</pre>";
        } else {
            echo "Nenhum acesso registrado ainda.";
        }
    } else {
        echo "Senha incorreta!";
    }
} else {
    // Formulário para inserção da senha
    echo '<form method="POST" action="visualizar_acessos.php">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required>
            <button type="submit">Acessar</button>
          </form>';
}
?>
