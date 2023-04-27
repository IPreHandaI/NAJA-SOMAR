<?php

include_once '_dados.php';
//include_once 'includes/_bancoconn.php';

?>

<link rel="stylesheet" href="../CSS/ods.css">
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
