
<?php

include_once 'includes/_header.php';
include_once 'includes/_dados.php';
include_once 'includes/_bancoconn.php';

?>
<?php
    //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
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
                <li><img src="./imagens/fecomercio.webp" style="max-width: 100%;height: auto;"></li>
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


<!--=================================ODS=============================================-->
<div class="colTituloOds">
    <h1 style="margin-bottom:40px;">Conheça Nossos Projetos!</h1>
</div>
<div id="cards">
    <?php
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo '<form action="pagina-ods.php" method="GET">';
            echo '<input type="number" style="visibility:hidden; display:none;" name="butao" value="'.$row['odsid'].'">';
            echo '<button style="border:none; cursor:pointer;"><img src="'.$row['Imagem'].'"></button>';
            echo '</form>';
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

