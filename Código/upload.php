<?php
include_once 'includes/_bancoconn.php';
// Verifica se o formulário foi enviado
if (isset($_POST['submit'])) {
    // Verifica se os arquivos foram selecionados
    if (isset($_FILES['arquivo'])) {
        $arquivos = $_FILES['arquivo'];


        // Percorre cada arquivo selecionado
        for ($i = 0; $i < count($arquivos['name']); $i++) {
            $arquivo = array(
                'name' => $arquivos['name'][$i],
                'type' => $arquivos['type'][$i],
                'tmp_name' => $arquivos['tmp_name'][$i],
                'error' => $arquivos['error'][$i],
                'size' => $arquivos['size'][$i]
            );

            // Verifica se houve algum erro no upload
            if ($arquivo['error'] === UPLOAD_ERR_OK) {
                $nome_temporario = $arquivo['tmp_name'];
                $nome_arquivo = $arquivo['name'];

                // Lê os dados do arquivo
                $dados_arquivo = file_get_contents($nome_temporario);

                // Conecta ao banco de dados (substitua as informações de conexão conforme necessário)

                // Prepara a consulta SQL para inserir o arquivo no banco de dados
                $consulta = $conn->prepare("INSERT INTO uploads (uploadid, imagem) VALUES (?, ?)");
                $consulta->bind_param("ss", $nome_arquivo, $dados_arquivo);

                // Executa a consulta
                if ($consulta->execute()) {
                    echo "Arquivo enviado e armazenado no banco de dados com sucesso!";
                } else {
                    echo "Erro ao enviar o arquivo para o banco de dados: " . $consulta->error;
                }

                // Fecha a consulta
                $consulta->close();
            } else {
                echo "Erro no upload do arquivo: " . $arquivo['error'];
            }
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <label for="arquivo">Selecione até 5 arquivos:</label>
    <input type="file" name="arquivo[]" id="arquivo" multiple accept=".jpg, .jpeg, .png, .pdf">
    <br>
    <input type="submit" name="submit" value="Enviar">
</form>
