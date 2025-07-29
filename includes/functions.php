<?php
function verificarAcesso() {
    if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        header('Location: ../login.php');
        exit;
    }
}

function criarSlug($texto) {
    $texto = preg_replace('~[^\pL\d]+~u', '-', $texto);
    $texto = iconv('utf-8', 'us-ascii//TRANSLIT', $texto);
    $texto = preg_replace('~[^-\w]+~', '', $texto);
    $texto = trim($texto, '-');
    $texto = preg_replace('~-+~', '-', $texto);
    $texto = strtolower($texto);
    
    if (empty($texto)) {
        return 'n-a';
    }
    
    return $texto;
}
?>