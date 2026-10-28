<?php
    $cardapio = [
        ["nome"=>"Pelé Café", "preco"=>"84.00", "descricao"=>"O café do Rei", "imagem"=>"imagens/cafe.jpeg"],
        ["nome"=>"Café normal", "preco"=>"12.00", "descricao"=>"Apenas um café plebeu", "imagem"=>"imagens/cafe.jpeg"]

    ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pelé Café</title>
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
        <section>
            <h1>O verdadeiro Café Pelé</h1>
        </section>
        <section class>
            <div class="produtos">
            <?php
            foreach($cardapio as $item):
            ?>
            <div class="produto">
                <article>
                    <img class="imgProduto" src=<?php echo($item['imagem']);?> alt=<?php echo($item['nome']);?> >
                    <div class="descProduto">
                        <h2><?php echo($item['nome']);?></h2>
                        <p><strong>Preço:</strong> <?php echo($item['preco']);?></p>
                        <p> <?php echo($item['descricao']);?></p>
                        <a href="cadastro.php"><button type="button" class='button'>Comprar</button></a>
                    </div>
                </article>
            </div>
            <?php
                endforeach;
            ?>
            </div>
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


