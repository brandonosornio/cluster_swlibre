<?php

/* @var $this yii\web\View */

$this->title = 'Cluster de Software Libre';
?>
<div class="site-index">

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="400000000000" id="bs-carousel">
    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#bs-carousel" data-slide-to="1"></li>
      <li data-target="#bs-carousel" data-slide-to="2"></li>
      <li data-target="#bs-carousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item slides active">
          <div class="slide-1"></div>
          <div class="hero">
            <hgroup>
                <h1 style="color:white" class="animated bounceInDown">Bienvenido al mundo del software libre</h1>        
            </hgroup>

          </div>
        </div>
        <div class="item slides">
          <div class="slide-2"></div>
        </div>
        <div class="item slides">
          <div class="slide-3"></div>
          <div class="hero" >        
              <a href="http://factorhumanoformacion.com/software-libre-educativo/" target="_blank"> <button class="btn btn-hero btn-lg" role="button">Conoce más</button></a>
          </div>
        </div>
        <div class="item slides">
          <div class="slide-4"></div>
          <div class="hero">        
              <a href="https://www.ubuntu.com/" target="_blank"> <button class="btn btn-hero btn-lg" role="button">Conoce Ubuntu</button></a>
          </div>
        </div>
      </div> 
    </div>

    <div class="body-content">

      <div class="row">
          <div class="col-lg-4">
              <h2>Noticias</h2>
              <p>
                En esta sección encontrarás todo lo relacionado con el mundo actual de tecnologias, 
                software libre nuevo, hardware embebido y muchos proyectos en desarrollo actual.
              </p>

              <p><a class="btn btn-default" href="../web/index.php?r=noticias/principal" target="_blank">Ir a noticias &raquo;</a></p>
          </div>
          <div class="col-lg-4">
              <h2>Tutoriales</h2>
              <p>
              En esta sección encontrarás toda clase de videos y tutoriales para realizar instalaciones,
              paquetes, repositorios y demás utilidades para adentrarte en el mundo del software libre.
              </p>
              
              <p><a class="btn btn-default" href="../web/index.php?r=tutoriales/principal" target="_blank">Ir a tutoriales &raquo;</a></p>
          </div>
          <div class="col-lg-4">
              <h2>Distribuciones de Linux</h2>

              <p>
              En esta sección encontrarás diversas distribuciones, el nombre de las más comunes y las no 
              tan comunes, sus principales funciones, ventajas, características y cual es mejor para ti.
              </p>
              <p><a class="btn btn-default" href="../web/index.php?r=distros/principal" target="_blank">Ir a distribuciones &raquo;</a></p>
          </div>
      </div>

    </div>
</div>
