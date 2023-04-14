<?php

include_once 'includes/_header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/somar.css">
  <title>Document</title>
</head>
<body>

<!-- Carousel -->
  <div class="slider">
    <div class="slides">
        <!-- Bolinhas -->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">

        <!--Slide imagens-->
        <div class="slide first">
            <img src="./imagens/ImgSemImg.png" alt="Img1">
        </div>
        <div class="slide">
            <img src="./imagens/ImgSemImg2.jfif" alt="Img2">
        </div>
        <div class="slide">
            <img src="./imagens/ImgSemImg.png" alt="Img3">
        </div>
        <div class="slide">
            <img src="./imagens/ImgSemImg2.jfif" alt="Img4">
        </div>

        <!--AutoNavegação-->
        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
        </div>
    </div>

    <div class="manual-navigation">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
    </div>
</div>





<!-- timeline -->
<div id="h2Trajetoria">
  <h2>Trajetória SOMAR</h2>
</div>


<div class="timeline">
  <section id="cd-timeline" class="cd-container">
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
		</div>

  <!-- block 1 -->

			<div class="cd-timeline-content">
				<h2 style= "font-size: 30px;"class="card-title"><strong>2015</strong></h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, ipsum temporibus. Id ad atque cumque provident quia repudiandae voluptates dicta est quasi expedita debitis sapiente earum, nam similique soluta natus! lorem</p>       
			</div> 
		</div> 
 <!-- fim block 1 -->

  <!-- block 2 -->

      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-movie">
      </div> 

        <div class="cd-timeline-content">
          <h2 style= "font-size: 30px;"class="card-title"><strong>2017</strong></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
        </div> 
      </div> 


      <!-- fim block 2 -->

    <!-- block 3 -->

      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
      </div> 

      <div class="cd-timeline-content">
        <h2 style= "font-size: 30px;"class="card-title"><strong>2018</strong></h2>
        <p>serunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
      </div>
    </div> 

      
    <!-- fim block 3 -->

    <!-- block 4 -->

      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-location">
      </div> 

      <div class="cd-timeline-content">
        <h2 style= "font-size: 30px;"class="card-title"><strong>2019</strong></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>				
      </div>
    </div> 
  <!-- fim block 4 -->

    <!-- block 5-->
      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-location">
      </div> 
      <div class="cd-timeline-content">
        <h2 style= "font-size: 30px;"class="card-title"><strong>2021</strong></h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis laboriosam quis incidunt velit consequuntur vel, et officiis optio, qui fugiat repellendus. Ut odit autem, in tempora aut magni assumenda laboriosam?</p>
      </div> 
    </div> 
  <!-- fim block 5-->

  <!-- block 6 -->

      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-movie">
      </div> 
      <div class="cd-timeline-content">
        <h2 style= "font-size: 30px;"class="card-title"><strong>2023</strong></h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime earum incidunt delectus possimus ullam libero totam, magni dolore nisi dolor cupiditate, dicta hic, dolorem quae sit debitis veritatis? Voluptatibus, consequatur.</p>			
      </div> 
    </div> 
      <!-- fim block 6 -->
	</section> 
  </div>
</div>

<?php
include_once 'includes/_footer.php';
?>

</body>
