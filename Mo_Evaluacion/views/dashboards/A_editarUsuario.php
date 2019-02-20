<?php
include "../../core/helpers/adminnav.php";
navbar::header('BIENVENIDO');
?>
<link rel="stylesheet" href="../../resources/multimedia/login.css">
<div class="container padd">
    <br>
    <br>
    <br>
    
<div class="row container ">
    <form class="col s12 blur container">
      <div class="row">
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Nombre Completo:</label>
        </div>
      
        
          <div class="col l12">
            <a href="#" class="waves-effect waves-light btn">Modificar</a>
          </div>
        
      </div>
    </form>
  </div>


</div>


<?php
include "../../core/helpers/footer.php";
footer::pie();
?>