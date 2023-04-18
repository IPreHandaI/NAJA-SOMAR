<?php
$ods=array(
    0=>array(
        "projeto1" => array(
            "nome"=>"Brownie classic",
            "img"=>"imagens/1.png",
            "h3"=>"Objetivo de Desenvolvimento Sustentável",
            "img"=>"1",
            "h1"=>"Erradicação da pobreza",
            "h2"=>"Erradicar a pobreza em todas as formas e em todos os lugares"
        ),
        
        "projeto2" => array(
            "nome"=>"Arthur",
            "img"=>"imagens/1.png",
            "h3"=>"Objetivo de Desenvolvimento Sustentável",
            "img"=>"1",
            "h1"=>"Erradicação da pobreza",
            "h2"=>"Erradicar a pobreza em todas as formas e em todos os lugares"
        ),
    ),
    1=>array(
        "nome"=>"Brownie classic",
        "img"=>"imagens/2.png",
        "h3"=>"",
        "img"=>"2",
        "h1"=>"",
        "h2"=>""
    ),
    2=>array(
        "nome"=>"Brownie classic",
        "img"=>"imagens/3.jpg",
        "h3"=>"",
        "img"=>"3",
        "h1"=>"",
        "h2"=>""
    ),
    3=>array(
        "nome"=>"Brownie classic",
        "img"=>"imagens/4.webp",
        "h3"=>"",
        "img"=>"4",
        "h1"=>"",
        "h2"=>""
    ),
    4=>array(
        "nome"=>"Brownie classic",
        "img"=>"imagens/5.gif",
        "h3"=>"",
        "img"=>"5",
        "h1"=>"",
        "h2"=>""
    ),
    5=>array(
        "nome"=>"Brownie classic",
        "img"=>"imagens/6.png",
        "h3"=>"",
        "img"=>"6",
        "h1"=>"",
        "h2"=>""
    ),
    6=>array(
        "nome"=>"Brownie classic",
        "img"=>"imagens/7.png",
        "h3"=>"",
        "img"=>"7",
        "h1"=>"",
        "h2"=>""
    ),
    7=>array(
        "nome"=>"Brownie classic",
        "img"=>"imagens/8.png",
        "h3"=>"",
        "img"=>"8",
        "h1"=>"",
        "h2"=>""
    ),
    8=>array(
        "nome"=>"Brownie classic",
        "img"=>"imagens/9.png",
        "h3"=>"",
        "img"=>"9",
        "h1"=>"",
        "h2"=>""
    ),
    9=>array(
        "nome"=>"Brownie classic",
        "img"=>"imagens/10.webp",
        "h3"=>"",
        "img"=>"10",
        "h1"=>"",
        "h2"=>""
    ),
    10=>array(
        "nome"=>"Brownie classic",
        "img"=>"imagens/11.jpg",
        "h3"=>"",
        "img"=>"11",
        "h1"=>"",
        "h2"=>""
    ),
    11=>array(
        "nome"=>"Brownie classic",
        "img"=>"imagens/12.png",
        "h3"=>"",
        "img"=>"12",
        "h1"=>"",
        "h2"=>""
    ),
    12=>array(
        "nome"=>"Brownie classic",
        "img"=>"imagens/13.png",
        "h3"=>"",
        "img"=>"13",
        "h1"=>"",
        "h2"=>""
    ),
    13=>array(
        "nome"=>"Brownie classic",
        "img"=>"imagens/14.png",
        "h3"=>"",
        "img"=>"14",
        "h1"=>"",
        "h2"=>""
    ),
    14=>array(
        "nome"=>"Brownie classic",
        "img"=>"imagens/15.png",
        "h3"=>"",
        "img"=>"15",
        "h1"=>"",
        "h2"=>""
    ),
    15=>array(
        "nome"=>"Brownie classic",
        "img"=>"imagens/16.webp",
        "h3"=>"",
        "img"=>"16",
        "h1"=>"",
        "h2"=>""
    ),
    16=>array(
        "nome"=>"Brownie classic",
        "img"=>"imagens/17.png",
        "h3"=>"",
        "img"=>"17",
        "h1"=>"",
        "h2"=>""
    )
    );

    
    $sql = '';

    foreach ($ods as $i => $value) {
        $h3 = $value['h3'];
        $img = $value['img'];
        $h1 = $value['h1'];
        $h2 = $value['h2'];

        $sql = "$sql <br> INSERT INTO produtos(h3, img, h1, h2, categoriaid, ativo) VALUE('$h3', '$img', '$h1', '$h2', 1, 1);";
    }
?>