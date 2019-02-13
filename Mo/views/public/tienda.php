<?php

include "../../core/helpers/navfoot.php";
navbar::header('Tus compras');
?>
<link rel="stylesheet" href="../../resources/css/login.css">

 <div id="modal1" class="modal">
    <div class="modal-content">
    <div class="carousel carousel-slider center materialboxed">
    <div class="carousel-fixed-item center">
    
    </div>

    <div class="row">
     <div class="carousel carousel-slider">
    <div class="carousel-item white-text" href="#one!">
    <img src="../../resources/multimedia/Tienda1b.jpg" alt="" class="responsive-img ima">
   </div>
    <div class="carousel-item white-text nombre1" href="#one!">
    <img src="../../resources/multimedia/Tienda1c.jpg" alt="" class="responsive-img ima">
   </div>
   
   <div class="carousel-item white-text nombre2" href="#one!">
   <img src="../../resources/multimedia/Tienda1d.jpg" alt="" class="responsive-img ima">
   </div>

        </div>
   </div>
  </div> 
    </div>
  </div>

  <div id="modal2" class="modal" >
    <div class="modal-content">
      <h4>Adquirir compra</h4>
      <h5>Precio: $55</h3>
      <div class="row">
        
        <img class="responsive-img col l4 m6 s12 imag materialboxed" src="../../resources/multimedia/Tienda1b.jpg" alt="">
        
        
        
        <img src="../../resources/multimedia/Tienda1d.jpg" alt=""  class="responsive-img col l4 m6 s12 imag materialboxed">
        
        
        <img src="../../resources/multimedia/Tienda1c.jpg" alt="" class="responsive-img col l4 m6 s12 imag materialboxed">
        
      </div>
      <div class="row">
      <div class="input-field col s12 m6 l6">
          <input placeholder="Ingrese cantidad" id="cantidad" type="text" class="validate">
          <label for="cantidad">Cantidad</label>
        </div>
        <a class="btn-floating btn-large waves-effect waves-light blue l6 m6 s12" ><i class="material-icons">attach_money </i></a>
      </div>
    </div>
    
  </div>


<div class="row">
    <div class="col l3 m3 s12">
      <div class="card">
        <div class="card-image">
          <img src="../../resources/multimedia/Tienda1.jpg" class="materialboxed">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
        <button data-target="modal1" class="btn modal-trigger">Fotos</button>
        <button class="btn modal-trigger" data-target="modal2">Comprar</button>
        <a class="btn-floating btn-large waves-effect waves-light red" id="btnfotos"><i class="material-icons">add_shopping_cart</i></a>
        </div>
      </div>
    </div>
  
  
    <div class="col l3 m3 s12">
      <div class="card">
        <div class="card-image">
          <img src="../../resources/multimedia/Tienda2.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
        <button data-target="modal1" class="btn modal-trigger">Fotos</button>
        <button class="btn modal-trigger" data-target="modal2">Comprar</button>
        <a class="btn-floating btn-large waves-effect waves-light red" id="btnfotos"><i class="material-icons">add_shopping_cart</i></a>
        
        </div>
      </div>
    </div>
 
  
    <div class="col l3 m3 s12">
      <div class="card">
        <div class="card-image">
          <img src="../../resources/multimedia/Tienda1.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
        <button data-target="modal1" class="btn modal-trigger">Fotos</button>
        <button class="btn modal-trigger" data-target="modal2">Comprar</button>
        <a class="btn-floating btn-large waves-effect waves-light red" id="btnfotos"><i class="material-icons">add_shopping_cart</i></a>
        </div>
      </div>
    </div>
    <div class="col l3 m3 s12">
      <div class="card">
        <div class="card-image">
          <img src="../../resources/multimedia/Tienda1.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
        <button data-target="modal1" class="btn modal-trigger">Fotos</button>
        <button class="btn modal-trigger" data-target="modal2">Comprar</button>
        <a class="btn-floating btn-large waves-effect waves-light red" id="btnfotos"><i class="material-icons">add_shopping_cart</i></a>
        </div>
      </div>
    </div>
  </div>
  
  <script src="../../resources/js/jquery.js"></script>                            
 <script src="../../resources/js/materialbox.js"></script>
  <script src="../../resources/js/carousel.js"></script>
  
  <script src="../../resources/js/modals.js"></script>
<?php
include "../../core/helpers/footer.php";
footer::pie();
?>