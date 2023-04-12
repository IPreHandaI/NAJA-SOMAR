<?php

include_once 'includes/_head.php';
include_once 'includes/_header.php';

?>
<div id="divPai">
    <div id="divFilho">
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
                    <img src="./imagens/ImgSemImg.png" alt="Img1">
                </div>
                <div class="slide">
                    <img src="./imagens/ImgSemImg.png" alt="Img1">
                </div>
                <div class="slide">
                    <img src="./imagens/ImgSemImg.png" alt="Img1">
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

<?php
include_once 'includes/_footer.php';
?>

