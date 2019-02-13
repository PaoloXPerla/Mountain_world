<?php
include "../../core/helpers/navfoot.php";
navbar::header('BIENVENIDO');
?>
<link rel="stylesheet" type="text/css" href="../../resources/css/login.css">
      </div>
       
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
                <div class="input-field col s12" >
                       <i class="material-icons prefix">vpn_key</i>
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Contrasena</label>
                        <div class="rowbtn">
                        <a class="waves-effect waves-light btn" href="../dashboards/admin.php">Iniciar</a>
                      </div>
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