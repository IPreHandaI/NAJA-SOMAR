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
        <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
        <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
        <div class="swiffy-slider">
            <ul class="slider-container">
                <li><img src="./imagens/ImgSemImg.png" style="max-width: 100%;height: auto;"></li>
                <li><img src="./imagens/2.png" style="max-width: 100%;height: auto;"></li>
                <li><img src="./imagens/fecomercio.webp" style="max-width: 100%;height: auto;"></li>
            </ul>

            <button type="button" class="slider-nav"></button>
            <button type="button" class="slider-nav slider-nav-next"></button>

            <div class="slider-indicators">
                <button class="active" style="background-color:gray;"></button>
                <button style="background-color:gray;"></button>
                <button style="background-color:gray;"></button>
            </div>
        </div>

<!--=======================PROJETOS===========================-->

        <div class="tiltuloProjetos">
            <h1>PROJETOS</h1>
        </div>
        <div class="pai">
            <div class="cardsProjetos">
                <div class="cardProjetos">
                    <img id="cardImg" src="<?php echo $ods[$ido]["img"] ?>" alt="Imagem do Card">
                    <div class="card-content">
                        <h3>Título do Card 1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ullam mollitia quae praesentium omnis doloremque ut magnam, ad quia, excepturi id recusandae, error quibusdam labore nulla aspernatur? Aspernatur cum ab, aperiam rerum autem fuga? Asperiores, sed rem. Incidunt error molestias vel repellat nihil praesentium laborum.</p>
                    </div>
                </div>
                <div class="cardProjetos">
                    <img id="cardImg" src="<?php echo $ods[$ido]["img"] ?>" alt="Imagem do Card">
                    <div class="card-content">
                        <h3>Título do Card 2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ullam mollitia quae praesentium omnis doloremque ut magnam, ad quia, excepturi id recusandae, error quibusdam labore nulla aspernatur? Aspernatur cum ab, aperiam rerum autem fuga? Asperiores, sed rem. Incidunt error molestias vel repellat nihil praesentium laborum.</p>
                    </div>
                </div>
            </div>
            <div id="box-pai-1">
                <h1>Lorem ipsum dolor sit amet.</h1>
                <?php
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "<a>" . $linha['Sobre'] . "</a> <br>";
                    }
                ?>
            </div>
        </div>

<!--=============================ODS=============================-->

    </main>
<?php
include_once 'includes/_footer.php';
?>
