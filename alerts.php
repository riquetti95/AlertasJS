<?php
// Versão 2.0.3 | Criado por Adriano Riquetti
// https://api.rotahightech.com.br/
// RotaHighTech© 2025 . Todos os direitos reservados.

// Converte a url que contem '.php?tipo=' => 'Para a funcao JS' ---  assets/js/alerts.js
$parametros = [
    'mensagem' => 'Alerta',
    'aviso' => 'Informação',
    'erro' => 'Falha',
    'token' => 'Token de Segurança',
    'sucesso' => 'Sucesso'
];

foreach ($parametros as $chave => $titulo) {
    if (isset($_GET[$chave]) && $_GET[$chave] !== '') {
        $safeValue = htmlspecialchars($_GET[$chave], ENT_QUOTES, 'UTF-8');
        echo "<script>NovoAlerta('{$safeValue}', '{$titulo}'); </script>";
        break; // Para de verificar após encontrar o primeiro parâmetro válido
    }
}
