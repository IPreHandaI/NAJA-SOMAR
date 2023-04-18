<?php
$ido=$_GET["butao"];
include_once 'includes/_header.php';
include_once 'includes/_dados.php'
?>
    <link rel="stylesheet" href="../CSS/pagina-ods.css">
    <div id="box-pai">
        <div class="box-filha">
            <img class="img-1" src="<?php echo $ods[$ido]["link"] ?>">
        <div class="box-neta">
            <h3>Lorem ipsum</h3>
            <h2>Lorem ipsum dolor sit amet, consectetur</h2>
            <div>
                <h4>Lorem ipsum</h4>
            </div>
        </div>
    </div>
    <div class="box-filha">
        <img class="img-1" src="<?php echo $ods[$ido]["link"] ?>">
        <div class="box-neta">
            <h3>Lorem ipsum</h3>
            <h2>Lorem ipsum dolor sit amet, consectetur</h2>
            <div>
                <h4>Lorem ipsum</h4>
            </div>
        </div>
    </div>
    <div class="box-filha">
        <img class="img-1" src="<?php echo $ods[$ido]["link"] ?>">
        <div class="box-neta">
            <h3>Lorem ipsum</h3>
            <h2>Lorem ipsum dolor sit amet, consectetur</h2>
            <div>
                <h4>Lorem ipsum</h4>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'includes/_footer.php';
?>
