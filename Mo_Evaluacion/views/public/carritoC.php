<?php
include "../../core/helpers/navfoot.php";
navbar::header('Carrito');
?>
<link rel="stylesheet" href="../../resources/css/login.css">
<div >
 <table class="container">
        <thead>
          <tr>
              <th>Producto</th>
              <th>Descripcion</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Seleccion</th>
          </tr>
        </thead>
          <tr>
            <td>Cuchillo</td>
            <td>victorinox</td>
            <td>$5.87</td>
            <td><a class="btn dropdown-trigger " href="#!" data-target="cantidad">cantidad<i class="material-icons right">arrow_drop_down</i></a></td>
            <td> <p>
                  <label>
                    <input type="checkbox" />
                    <span></span>
                  </label>
                </p>
          </tr>
          <tr>
            <td>Mochila</td>
            <td>go</td>
            <td>$30.76</td>
            <td><a class="btn dropdown-trigger " href="#!" data-target="cantidad">cantidad<i class="material-icons right">arrow_drop_down</i></a></td>
            <td> <p>
                  <label>
                    <input type="checkbox" />
                    <span></span>
                  </label>
                </p>
          </tr>
          <tr>
            <td>Tienda de campaña</td>
            <td>Carpa</td>
            <td>$700.00</td>
            <td><a class="btn dropdown-trigger " href="#!" data-target="cantidad">cantidad<i class="material-icons right">arrow_drop_down</i></a></td>
            <td> <p>
                  <label>
                    <input type="checkbox" />
                    <span></span>
                  </label>
                </p>
          </tr>
          <tr>
          </tr>
      </table>
     </div>
     <br>
     <div class="container">
      <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
      <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></a>
      <a class="waves-effect waves-light btn"><i class="material-icons right">attach_money</i>Pagar</a>
      </div>
          <ul id="cantidad" class="dropdown-content">
        <li><a href="#!">1</a></li>
        <li><a href="#!">2</a></li>
        <li><a href="#!">3</a></li>
        <li><a href="#!">4</a></li>
        <li><a href="#!">5</a></li>
        <li><a href="#!">6</a></li>
      </ul>
      
    
    
<?php
include "../../core/helpers/footer.php";
footer::pie();
?>