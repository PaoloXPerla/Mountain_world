<?php
include "../../core/helpers/navfoot.php";
navbar::header('BIENVENIDO');
?>

<section>
<div class="parallax-container center valign-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s12 black-text">
        <h2>Mountain World</h2>
        <p>A modern responsive front-end framework based on Material Design</p>
        <a class="waves-effect waves-light btn-large teal lighten-2">Get Started</a>
      </div>
    </div>
  </div>
  
  <div class="parallax">
    <img class="rosa" src="../../resources/multimedia/rosamontaña.jpg" alt="not found">
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
           We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.
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
           By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.
         </p>
       </div> 
     </div>
   </div>
</div>

<div class="parallax-container center valign-wrapper">
  <div class="parallax"><img src="../../resources/multimedia/nieve.jpg">
  </div>
  
  <div class="container black-text">
    <div class="row">
      <div class="col m4 s12">
        <div class="icon-block">
         <h2 class="center light-blue-text">
          <img src="../../resources/multimedia/Hector.jpg" alt="" class="circle responsive-img" height="60" width="150">
         </h2>
          <div>
            <h5 class="center">Hector Flores</h5>
            <p class="light">
              By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.
            </p>
          </div>  
       </div> 
      </div>
      <div class="col m4 s12">
        <div class="icon-block">
         <h2 class="center light-blue-text">
          <img src="../../resources/multimedia/Paolo.jpg" alt="" class="circle responsive-img" height="60" width="150">  
         </h2>
          <div>
            <h5 class="center">Paolo Perla</h5>
            <p class="light">
              By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.
            </p>
          </div>  
       </div> 
      </div>
      <div class="col m4 s12">
        <div class="icon-block">
         <h2 class="center light-blue-text">
          <img src="../../resources/multimedia/Nelson.jpg" alt="" class="circle responsive-img" height="60" width="150">
         </h2>
          <div>
            <h5 class="center">Nelson Arguera</h5>
            <p class="light">
              By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.
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
          <div class="col m6">
            <h4>Contactenos</h4>
            <div class="row">
              <form class="col m12">
                <div class="row">
                  <div class="input-field col s10 m12">
                    <input placeholder="Paolo Enrique" id="Nombre" type="text" class="validate">
                    <label for="Nombre">Su nombre:</label>
                  </div>  
                </div>
                <div class="row">
                  <div class="input-field col s10 m12">
                    <input placeholder="Papaolo0211@gmail.com" id="Email" type="text" class="validate">
                    <label for="Email">Su correo:</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s10 m12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Tus comentarios:</label>
                  </div>
                </div>   
              </form>
          </div>
        </div>
          <div class="col m6 right-align">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.6380151862486!2d-89.2068505625305!3d13.723074535014758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6330813f89e61f%3A0xcb93eef8cc8c07e1!2sInstituto+T%C3%A9cnico+Ricaldone!5e0!3m2!1ses-419!2ssv!4v1549468146356" 
                  width="500" height="400" frameborder="0" style="border:0" allowfullscreen>
             </iframe>
          </div>      
    </div>
  </div>  
</div>
     


<div class="parallax-container center valign-wrapper">
  <div class="parallax"><img src="../../resources/multimedia/moddy.jpg">
  </div>
  
  <div class="container white-text">
    <div class="row">
      <div class="col s12">
        <h5>A modern responsive front-end framework based on Material Design</h5>
      </div>
    </div>
  </div>
</div>

 

</section>
<?php
include "../../core/helpers/footer.php";
footer::pie();
?>