<?php
// Incluindo topo e menu (deve ser incluído uma única vez)
include_once 'topo.php';
include_once 'menu.php';

// Verifica o conteúdo da página a ser carregada via URL
if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];

    // Inclui a página solicitada ou exibe uma página padrão
    if ($pagina == 'paginainicial') {
        include_once 'paginainicial.php';
    } elseif ($pagina == 'sobre') {
        include_once 'quemsomos.php';
    } elseif ($pagina == 'faleconosco') {
        include_once 'faleconosco.php';
    } elseif ($pagina == 'produtos') {
        include_once 'produtos.php';
    } else {
        // Se a página não for encontrada, exibe uma mensagem de erro
        echo "<h2>Página não encontrada.</h2>";
    }
} else {
    // Página padrão (caso nenhuma seja solicitada via URL)
    include_once 'paginainicial.php';
}

// Incluindo o rodapé
include_once 'rodape.php';
?>
