<?php
$ido=$_GET["butao"];
include_once 'includes/_header.php';
include_once 'includes/_dados.php'
?>
<div id="super-box">
<article>
        <img src="<?php echo $ods[$ido]["link"] ?>">
        <h3><?php echo $ods[$ido]["h3"] ?></h3>
    </article>
</div>
<?php
include_once 'includes/_footer.php';
?>
