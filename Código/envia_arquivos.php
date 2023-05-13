<?php
    include("upload.php");

    // Define os tipos permitidos
    $tipos = [".gif", ".jpg", ".jpeg", ".png"];

    // Inicializa as variáveis com valores padrão
    $nome = "";
    $tipo = "";
    $tamanho = "";

    if(isset($_FILES["userfile"])){
        $upArquivo = new Upload;
        if($upArquivo->UploadArquivo($_FILES["userfile"], "Imagens/", $tipos)){
            $nome = $upArquivo->nome;
            $tipo = $upArquivo->tipo;
            $tamanho = $upArquivo->tamanho;
        }else{
            echo "Falha no envio<br />";
        }
    }
?>
<strong>Nome do Arquivo Enviado:</strong> <?php echo $nome ?><br />
<strong>Tipo do Arquivo Enviado:</strong> <?php echo $tipo ?><br />
<strong>Tamanho do Arquivo Enviado:</strong> <?php echo $tamanho ?><br />
