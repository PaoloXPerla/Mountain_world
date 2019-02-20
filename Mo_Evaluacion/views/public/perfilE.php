
<?php
include "../../core/helpers/navbar.php";
navbar::header('EDITAR USUARIO');
?>

<div class="container padd">
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Nombre Completo:</label>
        </div>
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Usuario:</label>
        </div>
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Contrasena:</label>
        </div>
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Repita Contrasena:</label>
        </div>
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Correo Electronico:</label>
        </div>
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Respuesta a la pregunta</label>
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