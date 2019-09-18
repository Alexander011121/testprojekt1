
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../sass/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <title>Document</title>
</head>
<body>  
<?php
require "header.php"
?>
     <section class="slideshow">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 " src="../img/product3.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h2>Hackbook</h2>
    <h5>Unlimited poweer</h5>
    <form action="products.php">
    <button class="btn-prod-link">Get now</button>
  </form>
   
  </div>
    </div>
    <div class="carousel-item slideshow2">
      <img class="d-block w-100 " src="../img/meeting.jpg" alt="Second slide">
      <div class="carousel-caption caption2">
       <p>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio eius quaerat error repellat, corrupti fugit cumque voluptate quae, tempora ullam ratione odio vitae tenetur, vel laborum odit voluptatum consectetur aliquam.
         
</p>
        <h6></h6>
      </div>
     
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  
</section>



       
<div class="container container-index-1">
  <div class="row align-items-start">
    <div class="col">
    <h2>Software</h2> 
    <img src="../img/handshake.jpg" width="250px" height="250px">
    <p>Developer or designer? doesn't matter</p>
    <a href="software.php" class="link-btn">Learn more...</a>
    </div>

    <div class="col">
    <h2>Services</h2>
    <img src="../img/fistbump.jpg" width="250px" height="250px" >
    <p>get one of our services, or why not all of them?</p>
    <a href="services.php" class="link-btn">Learn more...</a>
    </div>

    <div class="col">
    <h2>Products</h2>
    <img src="../img/laptop.jpg" width="250px" height="250px">
    <p>our products here the bestest of products</p>
    <a href="products.php" class="link-btn">Learn more...</a>
    </div>   
   
    
  
  </div>
</div>  



    
 
  <?php
  include "footer.php";
  ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</body>

</html>