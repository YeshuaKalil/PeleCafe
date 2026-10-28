<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Café Pelé</title>
</head>
<body>

    <!-- Cabeçalho-->
    <header class="cabecalho">
        <a href="index.php">
            <img src="imagens/pele.jpeg" alt="Pelé" width="100%" height="100px">
        </a>
        <nav>
            <ul>
                <li><a href="index.php">Acesse nosso cardápio</a></li>
                <li><a href="cadastro.php">Faça seu cadastro</a></li>
            </ul>
        </nav>
    </header>

    <!-- Conteúdo -->
    <main class="conteudo">
        <section class="produtos">
            <form>
                <h3>Cadastro</h3>
                <!-- Nome de Usuário-->
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" placeholder="Digite seu nome">
                <br>

                <!-- CEP-->
                <label for="cep">CEP</label>
                <input type="text"  id="cep" name="cep" placeholder="Digite seu CEP">
                <br>
                
                <!-- Email-->
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Digite seu email">
                <br><br>

                <!-- Preferências de café-->
                <p>Como prefere seu café?</p>
                <input name="cafe" id="puro" type="radio" value="Puro">
                <label for="puro">Puro</label>

                <input name="cafe" id="comLeite" type="radio" value="Com leite">
                <label for="comLeite">Com leite</label>
                <br><br>
                

                <!-- Notificações -->
                <input type="checkbox" id="gosto" value="Eu gosto de café">
                <label for="gosto">Quero receber informações sobre ofertas no meu email.</label>
                <br><br>

                <!-- Enviar -->
                <input class='button' type="submit" id="enviar" value="Enviar">
            </form>
        </section>
    </main>

    <!-- Rodapé -->
    <footer class="rodape">
        <section>
            <h2>Nos siga nas redes!</h2>

            <a href="https://www.instagram.com" target="blank">
                <img src="imagens/instagram.jpg" alt="instagram" width="40" height="40">
            </a>

            <a href="https://www.facebook.com" target="blank">
                <img src="imagens/facebook.webp" alt="facebook" width="40" height="40">
            </a>
        
        </section>
        <section>
            <p>&copy;Pelé não autorizou o funcionamento desta página.</p>
        </section>
        
    </footer>
    
</body>
</html>