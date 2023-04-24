
<?php

include_once 'includes/_header.php';
include_once 'includes/_dados.php';
include_once 'includes/_bancoconn.php';

?>
<link rel="stylesheet" href="CSS/home.css">
<div id="divPai">
    <div id="divFilho">
    <!--========================CAROUSEL===============================-->
    <script src="script.js"></script>
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
    </div>
<!--=====================CARDS======================-->
    <div class="card-deck">
        <div class="card card1">
            <img src="imagens/sustentabilidade.png" class="cardImg" alt="Imagem 1">
            <div class="card-body">
            <h5 class="card-title">Sustentabilidade</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ipsam aut eius alias porro ipsum cupiditate esse veritatis!</p>
            </div>
        </div>

        <div class="card card2">
            <img src="imagens/respeito.png" class="cardImg" alt="Imagem 1">
            <div class="card-body">
            <h5 class="card-title">Respeito</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ipsam aut eius alias porro ipsum cupiditate esse veritatis!</p>
            </div>
        </div>
        
        <div id="card3" class="card card3">
            <img src="imagens/transparencia.png" class="cardImg" alt="Imagem 1">
            <div class="card-body">
            <h5 class="card-title">Transparência</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ipsam aut eius alias porro ipsum cupiditate esse veritatis!</p>
            </div>
        </div>
        
        <div id="card4" class="card card4">
            <img src="imagens/consciencia.png" class="cardImg" alt="Imagem 2">
            <div class="card-body">
            <h5 class="card-title">Consciênia</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ipsam aut eius alias porro ipsum cupiditate esse veritatis!</p>
            </div>
        </div>
        
        <div class="card card5">
            <img src="imagens/harmonia.png" class="cardImg" alt="Imagem 3">
            <div class="card-body">
            <h5 class="card-title">Harmonia</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ipsam aut eius alias porro ipsum cupiditate esse veritatis!</p>
            </div>
        </div>
    </div>


<!--=================================ODS=============================================-->
<div class="colTituloOds">
    <h1 style="margin-bottom:40px;">Conheça Nossos Projetos!</h1>
</div>
<div id="cards">
    <?php
            for($i=0;$i<count($ods);$i++){
        ?>
        <form action="pagina-ods.php" method="GET">
        <input type="number" style="visibility:hidden; display:none;" name="butao" value="<?php echo $i?>">
        <button style="border:none; cursor:pointer;">
                <img src="<?php echo $ods[$i]["img"] ?>">
            </button>
            </form>
        <?php
            }
        ?>
</div>

<!--======================CURIOSIDADE==============================-->
<div class="curiosidade">
    <div class="curiosidadeDivImg">
        <img id="curiosidadeImg" src="imagens/fecomercio.webp">
    </div>
    <div class="curiosidadeDivTexto">
        <div>
            <p id="curiosidadeTexto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illum vitae, nostrum possimus recusandae ipsam repellendus tenetur consectetur numquam ullam, quae placeat eius quod. Laboriosam ducimus corrupti voluptates nobis rerum?</p>
        </div>
    </div>
</div>



<?php
include_once 'includes/_footer.php';
?>

