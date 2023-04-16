<?php

include_once 'includes/_head.php';
include_once 'includes/_header.php';

?>
<div id="divPai">
    <div id="divFilho">

    <!--========================CAROUSEL===============================-->
        <div class="slider">
            <div class="slides">
                <!-- Bolinhas -->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <!--Slide imagens-->
                <div class="slide first">
                    <img src="./imagens/1.png" alt="Img1">
                </div>
                <div class="slide">
                    <img src="./imagens/youtube.png" alt="Img2">
                </div>
                <div class="slide">
                    <img src="./imagens/logo.png" alt="Img3">
                </div>
                <div class="slide">
                    <img src="./imagens/instagram.png" alt="Img4">
                </div>

                <!--AutoNavegação-->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
            </div>

            <div class="manual-navigation">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>
    </div>
</div>
<!--==================FIM DO CAROUSEL=====================-->


<div id="principios">
    <strong>Princípios</strong>
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
<div class="cards">
    <div class="cards1">
        <img id="imgODS" class="imgODS" src="imagens/1.png" alt="Imagem 1">
        <img id="imgODS" class="imgODS" src="imagens/2.png" alt="Imagem 2">
        <img id="imgODS" class="imgODS" src="imagens/3.jpg" alt="Imagem 3">
        <img id="imgODS" class="imgODS" src="imagens/4.webp" alt="Imagem 4">
        <img id="imgODS" class="imgODS" src="imagens/5.gif" alt="Imagem 5">
        <img id="imgODS" class="imgODS" src="imagens/6.png" alt="Imagem 6">
    </div>
    <div class="cards2">
        <img id="imgODS" class="imgODS" src="imagens/7.png" alt="Imagem 1">
        <img id="imgODS" class="imgODS" src="imagens/8.png" alt="Imagem 2">
        <img id="imgODS" class="imgODS" src="imagens/9.png" alt="Imagem 3">
        <img id="imgODS" class="imgODS" src="imagens/10.webp" alt="Imagem 4">
        <img id="imgODS" class="imgODS" src="imagens/11.jpg" alt="Imagem 5">
        <img id="imgODS" class="imgODS" src="imagens/12.png" alt="Imagem 6">
    </div>
    <div class="cards3">
        <img id="imgODS" class="imgODS" src="imagens/13.png" alt="Imagem 1">
        <img id="imgODS" class="imgODS" src="imagens/14.png" alt="Imagem 2">
        <img id="imgODS" class="imgODS" src="imagens/15.png" alt="Imagem 3">
        <img id="imgODS" class="imgODS" src="imagens/16.webp" alt="Imagem 4">
        <img id="imgODS" class="imgODS" src="imagens/17.png" alt="Imagem 5">
    </div>
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

