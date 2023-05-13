<?php
error_reporting(E_ALL);

$url = $_SERVER["PHP_SELF"];
if(preg_match("/class.Upload.php/", $url)){
    header("Location: ../index.php");
    exit;
}

class Upload{
    private $tipo;
    private $nome;
    private $tamanho;

    function UploadArquivo($arquivo, $pasta, $tipos){
        if (!is_array($tipos)) {
            echo "Erro: tipos inválidos.";
            exit;
        }

        if(isset($arquivo) && is_uploaded_file($arquivo["tmp_name"]) && $arquivo["error"] == UPLOAD_ERR_OK)
        {
            $nomeOriginal = $arquivo["name"];
            $nomeFinal = md5($nomeOriginal . date("dmYHis"));
            $tipo = strrchr($arquivo["name"],".");
            $tamanho = $arquivo["size"];

            if(!in_array($tipo, $tipos)){
                echo "Extensão de arquivo não permitida.";
                exit;
            }

            if (move_uploaded_file($arquivo["tmp_name"], $pasta . $nomeFinal . $tipo)){
                $this->nome=$pasta . $nomeFinal . $tipo;
                $this->tipo=$tipo;
                $this->tamanho=number_format($arquivo["size"]/1024, 2) . "KB";
                return true;
            }else{
                echo "Erro ao mover o arquivo.";
                exit;
            }
        } else {
            echo "Erro ao enviar o arquivo.";
            exit;
        }
    }
}
?>
