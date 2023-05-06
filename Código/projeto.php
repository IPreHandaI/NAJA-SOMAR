<?php

include_once 'includes/_header.php';
include_once 'includes/_bancoconn.php';
include_once 'includes/_dados.php';

?>

<link rel="stylesheet" href="CSS/projeto.css">

<aside>
    <div id="h1Div">
        <h1 id="h1Projetos">Títulos Semelhantes:</h1>
    </div>
    <div id="card-container">
      <div class="card">
        <img src="imagens/1.png" alt="Imagem do card">
        <h3>Título do Card</h3>
        <p>Conteúdo do Card</p>
        <button class="buttonCard">Botão</button class="buttonCard">
      </div>
      <div class="card">
        <img src="imagens/2.png" alt="Imagem do card">
        <h3>Título do Card</h3>
        <p>Conteúdo do Card</p>
        <button class="buttonCard">Botão</button class="buttonCard">
      </div>
      <div class="card">
        <img src="imagens/3.jpg" alt="Imagem do card">
        <h3>Título do Card</h3>
        <p>Conteúdo do Card</p>
        <button class="buttonCard">Botão</button class="buttonCard">
      </div>
    </div>

    <div id="h1Div">
        <h1 id="h1Ods">ODS Vinculadas:</h1>
    </div>
    <div id="ods-container">
      <img src="imagens/7.png" alt="Imagem do card">
      <img src="imagens/8.png" alt="Imagem do card">
      <img src="imagens/9.png" alt="Imagem do card">
      </div>
    </div>

    <div id="h1Div">
        <h1 id="h1Projetos">Parceiros:</h1>
    </div>
    <div id="card-container">
      <div class="card">
        <img src="imagens/fecomercio.webp" alt="Imagem do card">
        <h3 style="font-size: 1.5vw">Título do Card</h3>
        <p style="font-size: 1vw">Esxplicação sobre o Parceiro</p>
        <button class="buttonCard">Botão</button class="buttonCard">
      </div>
      <div class="card">
        <img src="imagens/logo.png" alt="Imagem do card">
        <h3 style="font-size: 1.5vw">Nome do Parceiro</h3>
        <p style="font-size: 1vw">Esxplicação sobre o Parceiro</p>
        <button class="buttonCard">Botão</button class="buttonCard">
      </div>
      <div class="card">
        <img src="imagens/consciencia.png" alt="Imagem do card">
        <h3 style="font-size: 1.5vw">Nome do Parceiro</h3>
        <p style="font-size: 1vw">Esxplicação sobre o Parceiro</p>
        <button class="buttonCard">Botão</button class="buttonCard">
      </div>
    </div>
</aside>




<article>
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil alias ducimus tempore fugit </h1>
    <div class="atuacao">
      <p id="pAtuacao">Cidade de Atuação: </p>
    </div>
    <p class="subTitulo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, error aspernatur ut atque nam ea eius laboriosam vel sunt ipsum iusto et dolor tenetur, modi ad nulla ullam deleniti corrupti voluptatum, perferendis voluptates. Saepe ut minus illo eaque impedit optio consectetur? Provident vero animi asperiores. Modi aliquam numquam id vitae!</p>
    <img id="imgArticle" src="imagens/fecomercio.webp">
    <p class="texto">Lorem ipsum dolor sit amet consectetur <strong> adipisicing </strong> elit. Dolorem, corporis ipsa debitis facere ullam magni et, libero suscipit odio iste esse sint cumque accusamus sunt eos atque repellat delectus tenetur commodi illum? Quod architecto unde sequi quis aut magnam, earum facere voluptates eum ad voluptatum ut <strong>consectetur</strong> quaerat iste quam excepturi explicabo facilis ducimus voluptatem, provident eos magni nulla error voluptatibus! Accusamus iste consequuntur fugit, unde molestias facilis qui rem magnam, vero et corrupti tempore, itaque ut sunt? Illum, facilis voluptatibus ullam quaerat sapiente, dolores quam praesentium totam autem quia, <strong>accusantium</strong> provident delectus odio molestias quasi? Provident, quos laboriosam.</p>
    <img id="imgArticle" src="imagens/banner.jpg">
    <p class="texto">Lorem ipsum dolor sit amet consectetur <strong> adipisicing </strong> elit. Dolorem, corporis ipsa debitis facere ullam magni et, libero suscipit odio iste esse sint cumque accusamus sunt eos atque repellat delectus tenetur commodi illum? Quod architecto unde sequi quis aut magnam, earum facere voluptates eum ad voluptatum ut <strong>consectetur</strong> quaerat iste quam excepturi explicabo facilis ducimus voluptatem, provident eos magni nulla error voluptatibus! Accusamus iste consequuntur fugit, unde molestias facilis qui rem magnam, vero et corrupti tempore, itaque ut sunt? Illum, facilis voluptatibus ullam quaerat sapiente, dolores quam praesentium totam autem quia, <strong>accusantium</strong> provident delectus odio molestias quasi? Provident, quos laboriosam.</p>
    <img id="imgArticle" src="imagens/fecomercio.webp">
    <p class="texto">Lorem ipsum dolor sit amet consectetur <strong> adipisicing </strong> elit. Dolorem, corporis ipsa debitis facere ullam magni et, libero suscipit odio iste esse sint cumque accusamus sunt eos atque repellat delectus tenetur commodi illum? Quod architecto unde sequi quis aut magnam, earum facere voluptates eum ad voluptatum ut <strong>consectetur</strong> quaerat iste quam excepturi explicabo facilis ducimus voluptatem, provident eos magni nulla error voluptatibus! Accusamus iste consequuntur fugit, unde molestias facilis qui rem magnam, vero et corrupti tempore, itaque ut sunt? Illum, facilis voluptatibus ullam quaerat sapiente, dolores quam praesentium totam autem quia, <strong>accusantium</strong> provident delectus odio molestias quasi? Provident, quos laboriosam.</p>

    <div class="colTituloOds">
      <h1 style="margin-bottom:40px;">Veja Nossos Outros Projetos!</h1>
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

</article>

<?php

include_once 'includes/_footer.php';

?>