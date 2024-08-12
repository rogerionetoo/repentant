<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userAgent = $_POST['userAgent'];
    $dataHora = $_POST['dataHora'];

    // Grava as informações em um arquivo de log
    $arquivo = fopen("acessos.log", "a");
    fwrite($arquivo, "Acesso em: " . $dataHora . " - Dispositivo: " . $userAgent . "\n");
    fclose($arquivo);
}
?>
