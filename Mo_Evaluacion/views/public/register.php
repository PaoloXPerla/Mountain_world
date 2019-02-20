<?php
include "../../core/helpers/navfoot.php";
navbar::header('Registrate');
?>
<link rel="stylesheet" type="text/css" href="../../resources/css/login.css">
  <div class="imagen">
          <div class="rowi">        
           <form class="col s12">
            <div class="row  lighten-5  blur">
             <div >
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="first_name" type="text" class="validate">
                  <label for="first_name">Usuario</label>
                </div>
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="first_name" type="text" class="validate">
                  <label for="first_name">Correo Electronico</label>
                </div>
                <div class="input-field col s12">
                  <i class="material-icons prefix">apps</i>
                  <input id="first_name" type="text" class="validate">
                  <label for="first_name">Fecha de nacimiento</label>
                </div>
                <div class="input-field col s12" >
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Contraseña</label>
               </div>
                <div class="input-field col s12" >
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="repitacontra" type="text" class="validate">
                        <label for="repitacontra">Repita su contraseña</label>
                </div>
                <div class="input-field col s12" >
                        <a class='dropdown-trigger btn' href='#' data-target='dropdown2'>Selecciona una pregunta de seguridad</a>

                        <ul id='dropdown2' class='dropdown-content'>
                        <li><a href="#!">¿Como se llamaba tu primera mascota?</a></li>
                        <li><a href="#!">¿Cual es tu comida Favorita?</a></li>
                        <li><a href="#!">¿Como se llamaba tu viejo vecindario?</a></li>
                        </ul>
                </div> 
                <div class="input-field col s12" >
                        <i class="material-icons prefix">offline_pin</i>
                        <input id="repitacontra" type="text" class="validate">
                        <label for="repitacontra">Respuesta de seguirdad</label>
                </div>           
                      <p>
                             <label class="terminos">
                                <input type="checkbox" />
                                <span><a href="terms.php"> aceptas nuestros terminos y condiciones?</a></span>
                            </label>
                      </p>
                      <div class="rowbtn login">
                        <a class="waves-effect waves-light btn" href="../dashboards/admin.php">REGISTRATE</a>
                </div>
              </div>
            </div>
            </form>
            </div>
        </div>
       


<?php
 include "../../core/helpers/footer.php";
footer::pie();
 ?>