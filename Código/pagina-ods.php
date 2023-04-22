<?php
$ido = $_GET["butao"];
include_once 'includes/_header.php';
include_once 'includes/_dados.php';
include_once 'includes/_bancoconn.php';
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/pagina-ods.css">
        <title>Document</title>
    </head>
    <body>
        <main>
            <div class="pai">
                <div class="filho1">
                    <div class="projetos">
                        <h1>Projetos</h1>
                    </div>
                    <div class="card">
                        <img src="<?php echo $ods[$ido]["img"] ?>" alt="Imagem do Card">
                        <div class="card-text">
                            <h2>Título do Card</h2>
                            <p>Texto do Card.</p>
                            <a href="#" class="card-button">Botão do Card</a>
                        </div>
                    </div> 
                    <div class="card">
                        <img src="<?php echo $ods[$ido]["img"] ?>" alt="Imagem do Card">
                        <div class="card-text">
                            <h2>Título do Card</h2>
                            <p>Texto do Card.</p>
                            <a href="#" class="card-button">Botão do Card</a>
                        </div>
                    </div> 
                    <div class="card">
                        <img src="<?php echo $ods[$ido]["img"] ?>" alt="Imagem do Card">
                        <div class="card-text">
                            <h2>Título do Card</h2>
                            <p>Texto do Card.</p>
                            <a href="#" class="card-button">Botão do Card</a>
                        </div>
                    </div> 
                </div>
                <div class="filho2">
                    <h3 id="nomeODS">Nome ODS</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, rem ullam aspernatur eum eveniet corporis quod obcaecati! Laboriosam molestias quibusdam enim nostrum nesciunt provident doloremque. Esse cupiditate in magnam autem!</p>
                </div>
                <div style="clear:both;"></div>
            </div>
        </main>
<?php
include_once 'includes/_footer.php';
?>
