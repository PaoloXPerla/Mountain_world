<?php
include "../../core/helpers/navfoot.php";
navbar::header('BIENVENIDO');
?>

<!--Usamos el parrallax container para dar un efecto visual de desplazamiento a la pagina Home -->
<section>
<div class="parallax-container center valign-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s12 black-text">
        <h2>Mountain World</h2>
        <p><h5>"!Te llevaremos a la cima del exito¡"</p></h5>
        <a class="waves-effect waves-light btn-large teal lighten-2" href="tienda.php">Visita nuestra tienda!</a>
      </div>
    </div>
  </div>
  
  <div class="parallax">
    <img class="rosa" src="../../resources/multimedia/moddy.jpg" alt="not found">
  </div>

</div>

<div class="container">
  <div class="row">
     <div class="col m6 s12">
       <div class="icon-block">
         <h2 class="center light-blue-text">
           <i class="material-icons">fingerprint</i>  
         </h2>
         <h5 class="center">Mision</h5>
         <p class="light">
           Nuestro trabajo es proveer a todos aquellos aventureros los materiales necesarios para todas
           sus aventuras y sus travesías al rededor del pulgarcito
         </p>
       </div>  
     </div>
     <div class="col m6 s12">
       <div class="icon-block">
         <h2 class="center light-blue-text">
           <i class="material-icons">group</i>  
         </h2>
         <h5 class="center">Vision</h5>
         <p class="light">
           Ser de las principales distribuidoras de todo el pais en productos de acampar, siendo fieles
           a la calidad correcta y precio aducuado para nuestros clientes. 
         </p>
       </div> 
     </div>
   </div>
</div>

<div class="parallax-container center valign-wrapper">
  <div class="parallax"><img src="../../resources/multimedia/nieve.jpg">
  </div>
  
  <div class="container black-text responsive">
    <div class="row">
      <div class="col s12 m4">
        <div class="icon-block">
         <h2 class="center light-blue-text">
          <img src="../../resources/multimedia/Hector.jpg" alt="" class="circle responsive-img" height="60" width="150">
         </h2>
          <div>
            <h5 class="center">Hector Flores</h5>
            <p class="light">
              Habilidoso diseñador de paginas web y empresario a temprana edad.
              Con tan solo 18 años ha fundado su propia empresa. Fanatico de la fotografia
              artistica.
              
            </p>
          </div>  
       </div> 
      </div>
      <div class="col m4 s12 responsive">
        <div class="icon-block">
         <h2 class="center light-blue-text">
          <img src="../../resources/multimedia/Paolo.jpg" alt="" class="circle responsive-img" height="60" width="150">  
         </h2>
          <div>
            <h5 class="center">Paolo Perla</h5>
            <p class="light">
              Joven diseñador web que plasma sus ideales en la web, es tambien el adminstrador de la base
              de datos de el sitio web, certificado por parte de Cisco en el ambito de Redes.
              </p>
          </div>  
       </div> 
      </div>
      <div class="col m4 s12 responsive">
        <div class="icon-block">
         <h2 class="center light-blue-text">
          <img src="../../resources/multimedia/Nelson.jpg" alt="" class="circle responsive-img" height="60" width="150">
         </h2>
          <div>
            <h5 class="center">Nelson Arguera</h5>
            <p class="light">
            Decidido diseñador web encargado de el mantenimiento de los productos del sitio web, destaca por 
            su perseverancia al actualizar constantemente los servicios de el sitio web

            </p>
          </div>  
       </div> 
      </div>
    </div>
  </div>
</div>

<div class="container left-align">
 <div class="section">
    <div class="row">
                      <!-- Esta seccion corresponde al envio de comentarios por parte de los usuarios-->
          <div class="col m6 s12">
            <h4>Contactenos</h4>
            <div class="row">
              <form class="col s12 m12">
                <div class="row">
                  <div class="input-field col s12 m12">
                    <input  id="Nombre" type="text" class="validate" font-color="red">
                    <label for="Nombre">Su nombre:</label>
                  </div>  
                </div>
                <div class="row">
                  <div class="input-field col s12 m12">
                    <input  id="Email" type="text" class="validate">
                    <label for="Email">Su correo:</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Tus comentarios:</label>
                  </div>
                </div> 
                  <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                  <i class="material-icons right">send</i>
  </button>  
              </form>
          </div>
        </div>
          <div class="col m6 right-align responsive">
          <!--En esta seccion mandamos a llamar un mapa de google, por lo que necesita de internet-->
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.6380151862486!2d-89.2068505625305!3d13.723074535014758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6330813f89e61f%3A0xcb93eef8cc8c07e1!2sInstituto+T%C3%A9cnico+Ricaldone!5e0!3m2!1ses-419!2ssv!4v1549468146356" 
                  width="400" height="400" frameborder="0" style="border:0" allowfullscreen>
             </iframe>
          </div>      
    </div>
  </div>  
</div>
    

<div class="parallax-container center valign-wrapper">
  <div class="parallax"><img src="../../resources/multimedia/rosamontaña.jpg">
  </div>
  </div>
</div>

</section>
<?php
include "../../core/helpers/footer.php";
footer::pie();
?>