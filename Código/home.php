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
                    <img src="./imagens/ImgSemImg.png" alt="Img1">
                </div>
                <div class="slide">
                    <img src="./imagens/ImgSemImg2.jfif" alt="Img2">
                </div>
                <div class="slide">
                    <img src="./imagens/ImgSemImg.png" alt="Img3">
                </div>
                <div class="slide">
                    <img src="./imagens/ImgSemImg2.jfif" alt="Img4">
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

<?php
include_once 'includes/_footer.php';
?>

