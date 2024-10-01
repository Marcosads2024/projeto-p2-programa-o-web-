<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os dados do formulário
    $nome = htmlspecialchars($_POST['nome']); // Evita injeção de HTML
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL); // Valida o e-mail
    $mensagem = htmlspecialchars($_POST['mensagem']); // Evita injeção de HTML
    
    // Verifica se o e-mail é válido
    if ($email === false) {
        echo "<h3 style='color: red;'>E-mail inválido. Tente novamente.</h3>";
    } else {
        // Simulação do envio de mensagem (pode ser salvo em um arquivo ou enviado por email)
        $msg = "Nome: $nome\nE-mail: $email\nMensagem: $mensagem\n";
        
        // Exibe mensagem de sucesso
        echo "<h3>Mensagem enviada com sucesso!</h3>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>E-mail:</strong> $email</p>";
        echo "<p><strong>Mensagem:</strong> $mensagem</p>";
        
        // Link para enviar mensagem via WhatsApp
        $whatsappNumber = '5583988278613'; // Substitua pelo seu número de WhatsApp
        $whatsappMessage = urlencode("Olá, meu nome é $nome e gostaria de falar sobre: $mensagem");
        echo "<p><a href='https://api.whatsapp.com/send?phone=$whatsappNumber&text=$whatsappMessage' target='_blank'>Enviar mensagem via WhatsApp</a></p>";
        
        // Plataformas digitais
        echo "<h4>Entre em contato pelas nossas plataformas:</h4>";
        echo "<p><strong>Instagram:</strong> <a href='https://www.cleidesantosatelie.com/seu_instagram' target='_blank'>@seu_instagram</a></p>";
        echo "<p><strong>Site:</strong> <a href='https://www.seusite.com' target='_blank'>www.seusite.com</a></p>";
        echo "<p><strong>Telefone:</strong> (83) 98827-8613</p>";
    }
} else {
?>
    <!-- Formulário de contato -->
    <form method="post" action="index.php?pagina=faleconosco">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" required></textarea><br><br>

        <input type="submit" value="Enviar Mensagem">
    </form>
<?php
}
?>
