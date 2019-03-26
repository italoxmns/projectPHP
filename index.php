<?php
 include_once 'layout/layout.php';
?>
<section class="container-fluid py-4 my-4" >
    <div class="row text-white" id="divCarousel">
      <div class="col-lg-7 p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/car_1.jpg" class="d-block w-100" alt="Car 1">
            </div>
            <div class="carousel-item">
              <img src="img/car_2.jpg" class="d-block w-100" alt="Car 2">
            </div>
            <div class="carousel-item">
              <img src="img/car_3.jpg" class="d-block w-100" alt="Car 3">
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
      </div>
      <div class="col-lg-5 p-0">
        <?php
          session_start();
          
          if(isset($_SESSION['usuarioLog'])){
            header('location:admin.php');
            die();
          }else{
            include_once 'layout/menuCarousel.php';
            session_destroy();
          }
        ?>
        <div class="col-12 p-4">
          <h1 class="display-4">Alugue um veículo!</h1>
          <p class="lead">O melhor lugar para alugar um veiculo, temos mais de 100 tipos de veículos. Planos coletivos, exclusivos e individuais.

          </p>
          <form action="">
            <div class="input-group input-group-md mb-3">
              <input type="text" class="form-control" placeholder="e-mail" aria-label="email" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-primary" id="btnCarousel" type="button" >Inscreva-se</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>



