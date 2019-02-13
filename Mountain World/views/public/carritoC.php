<?php
include "../../core/helpers/navfoot.php";
navbar::header('Tus compras');
?>

<div >
 <table>
        <thead>
          <tr>
              <th>Producto</th>
              <th>Descripcion</th>
              <th>Precio</th>
          </tr>
        </thead>

    
          <tr>
            <td>Cuchillo</td>
            <td>victorinox</td>
            <td>$5.87</td>
          </tr>
          <tr>
            <td>Mochila</td>
            <td>go</td>
            <td>$30.76</td>
          </tr>
          <tr>
            <td>Tienda de campaña</td>
            <td>Carpa</td>
            <td>$700.00</td>
          </tr>
      
      </table>
     </div>
     <br>
      <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
      <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></a>
      <ul id="dropdown2" class="dropdown-content">
        <li><a href="#!">one<span class="badge">1</span></a></li>
        <li><a href="#!">two<span class="new badge">1</span></a></li>
        <li><a href="#!">three</a></li>
      </ul>
     <a class="btn dropdown-trigger " href="#!" data-target="dropdown2">cantidad<i class="material-icons right">arrow_drop_down</i></a>
    
<?php
include "../../core/helpers/footer.php";
footer::pie();
?>