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




<!--=====================CARDS======================-->
    <div class="card-deck">
        <div class="card">
            <img src="imagem-1.jpg" class="card-img-top" alt="Imagem 1">
            <div class="card-body">
            <h5 class="card-title">Título do Card 1</h5>
            <p class="card-text">Texto descritivo do Card 1.</p>
            <a href="#" class="btn btn-primary">Botão de Ação 1</a>
            </div>
        </div>
        
        <div class="card">
            <img src="imagem-2.jpg" class="card-img-top" alt="Imagem 2">
            <div class="card-body">
            <h5 class="card-title">Título do Card 2</h5>
            <p class="card-text">Texto descritivo do Card 2.</p>
            <a href="#" class="btn btn-primary">Botão de Ação 2</a>
            </div>
        </div>
        
        <div class="card">
            <img src="imagem-3.jpg" class="card-img-top" alt="Imagem 3">
            <div class="card-body">
            <h5 class="card-title">Título do Card 3</h5>
            <p class="card-text">Texto descritivo do Card 3.</p>
            <a href="#" class="btn btn-primary">Botão de Ação 3</a>
            </div>
        </div>
        
        <div class="card">
            <img src="imagem-4.jpg" class="card-img-top" alt="Imagem 4">
            <div class="card-body">
            <h5 class="card-title">Título do Card 4</h5>
            <p class="card-text">Texto descritivo do Card 4.</p>
            <a href="#" class="btn btn-primary">Botão de Ação 4</a>
            </div>
        </div>
    </div>

<?php
include_once 'includes/_footer.php';
?>

