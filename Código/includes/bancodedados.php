<?php
// Conexão com o banco de dados
$pdo = new PDO('mysql:host=localhost;dbname=nomedobanco', 'usuario', 'senha');

// Iterar sobre o array $ods e inserir cada projeto como uma nova linha na tabela
foreach ($ods as $item) {
    foreach ($item as $projeto) {
        $stmt = $pdo->prepare('INSERT INTO projetos (titulo, link, h3, num, h1, h2) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([$projeto['titulo'], $projeto['link'], $projeto['h3'], $projeto['num'], $projeto['h1'], $projeto['h2']]);
    }
}
?>