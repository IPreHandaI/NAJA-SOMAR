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
                <li><img src="./imagens/banner.jpg" style="max-width: 100%;height: auto;"></li>
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
            <div id="box-vo">
                <div id="box-pai">
                    <div class="box-filha">
                        <img class="img-1" src="<?php echo $ods[$ido]["img"] ?>" alt="Imagem do Card">
                        <div class="box-neta">
                            <h3><?php echo $ods[$ido]["h3"] ?></h3>
                            <h2>Lorem ipsum dolor sit amet, consectetur</h2>
                            <div>
                                <h4>Lorem ipsum</h4>
                            </div>
                        </div>
                    </div>
                    <div class="box-filha">
                        <img class="img-1" src="<?php echo $ods[$ido]["img"] ?>" alt="Imagem do Card">
                        <div class="box-neta">
                            <h3><?php echo $ods[$ido]["h3"] ?></h3>
                            <h2>Lorem ipsum dolor sit amet, consectetur</h2>
                            <div>
                                <h4>Lorem ipsum</h4>
                            </div>
                        </div>
                    </div>
                    <div class="box-filha">
                        <img class="img-1" src="<?php echo $ods[$ido]["img"] ?>" alt="Imagem do Card">
                        <div class="box-neta">
                            <h3><?php echo $ods[$ido]["h3"] ?></h3>
                            <h2>Lorem ipsum dolor sit amet, consectetur</h2>
                            <div>
                                <h4>Lorem ipsum</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="box-pai-1">
                    <h1>
                        Lorem ipsum dolor
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum odio nec est facilisis porta. Suspendisse in mauris interdum, rutrum ipsum ut, condimentum lacus. Mauris feugiat scelerisque mi consectetur porttitor. Phasellus dapibus quis metus nec varius. Nullam vulputate, mi a vulputate auctor, dui sapien maximus lorem, vel molestie leo lacus quis ipsum. Suspendisse lacinia at purus sit amet feugiat. Nunc placerat porttitor metus, a feugiat est fermentum sed. Nam pharetra ex id vulputate pulvinar. Nulla pretium suscipit sapien ac placerat.<br>

                        Etiam nisi erat, maximus in aliquam vel, pellentesque a dolor. Donec et pharetra augue, sit amet commodo nibh. Sed nec sodales orci, id ultrices erat. Sed aliquam dui quis viverra sodales. In aliquam a diam sit amet posuere. Nulla sagittis varius ex sed fermentum. Nam tempus tellus tortor, vitae iaculis nisi pretium ac. Aenean finibus facilisis suscipit. Sed ut ante eget augue tincidunt facilisis. Sed eu est ac nunc congue dictum nec quis massa. Integer suscipit sapien ac condimentum viverra. Integer eleifend gravida euismod.<br>
                    </p>
                </div>
            </div>
        </main>
<?php
include_once 'includes/_footer.php';
?>
