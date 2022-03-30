<!DOCTYPE html>
<html>
<head>
    <title>Oficina da Net Formulário de Contato em PHP</title>
    <meta charset="iso-8859-1">
    <link rel="stylesheet" href="style.css" media="all" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
    <h2>Formulário de contato - <a href="https://www.oficinadanet.com.br">Oficina da Net</a></h2>
    <form method="post" onsubmit="validaForm(); return false;" class="form">
    <p class="name">
        <label for="name">Nome</label>
        <input type="text" placeholder="Seu Nome" />
    </p>
    <p class="email">
        <label for="email">E-mail</label>
        <input type="text" placeholder="mail@exemplo.com.br" />
    </p>
    <p class="text">
        <label for="mensagem">Mensagem</label>
        <textarea placeholder="Escreva sua mensagem" /></textarea>
    </p>
    <p class="submit">
        <input type="submit" value="Enviar" />
    </p>
    </form>
</body>
</html>