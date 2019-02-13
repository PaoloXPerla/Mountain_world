<?php
include "../../core/helpers/navfoot.php";
navbar::header('Tus compras');
?>
<link rel="stylesheet" type="text/css" href="../../resources/css/login.css">
      </div>
<!--Implementamos lo que son collapsible bars para una adecuada visualizacion de los FAQS-->  
      <div class="container white">
      <ul class="collapsible popout blue-text text-darken-2">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">help</i>
      ¿Como realizamos los envios?
      <span class=" badge">1</span></div>
    <div class="collapsible-body"><p>Realizamos los envios mediante los servivcios de terceros o bien
    puedes recoger tu producto en las instalaciones.</p></div>
  </li>
  <li>
    <div class="collapsible-header">
      <i class="material-icons">help</i>
      ¿Que metodos de pago aceptan?
      <span class="badge">1</span></div>
    <div class="collapsible-body"><p>Aceptamos tarjetas de Credito y Debito, Efectivo solo si se presenta 
    en las instalaciones.</p></div>
  </li>
  <li>
    <div class="collapsible-header">
      <i class="material-icons">help</i>
      ¿La empresa acepta devoluciones?
      <span class="badge">1</span></div>
    <div class="collapsible-body"><p>Aceptamos devoluciones solo si el cliente se presenta en las instalaciones
    con el producto en cuestion, y un comprobante de venta.</p></div>
  </li>
  <li>
    <div class="collapsible-header">
      <i class="material-icons">help</i>
      ¿Donde se ubica nuestra tienda?
      <span class="badge">1</span></div>
    <div class="collapsible-body"><p>Se ubica en la: Avenida Aguilares 218, San Salvador, El Salvador.
    Visita la pagina "Home" para observar un mapa de referencia.</p></div>
  </li>
  <li>
    <div class="collapsible-header">
      <i class="material-icons">help</i>
      ¿Cuales son los Terminos y Condiciones?
      <span class="badge">1</span></div>
    <div class="collapsible-body"><p>
    
    <!--Mandamos a llamar el archivo que contiene los terminos y condiciones-->
        <?php
              include "../../core/helpers/Terminos.php";
              Terminos::Condiciones();
    ?>
    </p></div>
  </li>
</ul>
      </div>
      <script type="text/javascript" src="../../resources/js/collapsible.js"></script>
      <?php
include "../../core/helpers/footer.php";
footer::pie();
?>