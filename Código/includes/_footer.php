<?php

include_once 'includes/_bancoconn.php';

?>


<link rel="stylesheet" href="CSS/footer.css">

<footer>
    <div id="footer-box">
        <div>
            <h3>Navegação</h3>
            <a>Home</a>
            <a>SOMAR</a>
            <a>Contato</a>
            <a>ODS</a>
        </div>
        <div>
            <h3>Desenvolvedores</h3>
            <a href="https://github.com/IPreHandaI" target="_blank">Ana Luiza Santos</a>
            <a href="https://github.com/arthurw6" target="_blank">Arthur Da Silva</a>
            <a href="https://github.com/JoaoGGotardo" target="_blank">João Gabriel Gotardo</a>
            <a href="https://github.com/juliaguima" target="_blank">Júlia Guimarães</a>
            <a href="https://github.com/nicolasdiovani" target="_blank">Nicolas Diovani</a>
        </div>
        <div>
            <h3>Contato</h3>
            <!-- Facebook botton -->
            <a><img src="imagens/facebook.png"></a>
            <!-- Instagram botton -->
            <a><img src="imagens/instagram.webp"></a>
            <!-- Whatsapp botton -->
            <a aria-label="Chat on WhatsApp" href="https://wa.me/XXXXXXXXX"> 
            <img alt="Chat on WhatsApp" src="imagens/whatsapp.png" height="400px" width="680px"/> </a>
            <!-- Youtube botton -->
            <a><img src="imagens/youtube.png"></a>
        </div>
    </div>
    <p style="color: white;">2023</p>
    <div style="background-color:rgb(253, 202, 33);height: 1.5px;width: 100%;"></div>
</footer>
</body>
<script src="script.js"></script>
</html>

<?php

mysqli_close($conn);

?>