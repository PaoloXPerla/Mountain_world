<?php
include "../../core/helpers/adminnav.php";
navbar::header('BIENVENIDO');
?>
<link rel="stylesheet" href="../../resources/css/login.css">
  <div id="modal1" class="modal">
  <div class="modal-content">
  <h4>BOTONES</h4>
        <div class="ayuda col s12 m12 l12">
            <a class="btn-floating btn-large waves-effect waves-light red" id="menu"><i class="material-icons">add</i></a>
            <p>este boton está hecho para agregar un objeto a la tabla!</p>
            <br>
            <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></a>
            <p>este boton está hecho para eliminar un objeto a la tabla!</p>
            <br>
            <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">mode_edit</i></a>
            <p>este boton está hecho para editar un objeto a la tabla!</p>
            <br>
            <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">search</i></a>
            <p>este boton está hecho para buscar un objeto a la tabla!</p>
        </div>
  
   </div>
   <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">ENTENDIDO</a>
   </div>
  </div>
  <div id="modal2" class="modal">
  <div class="modal-content">
  <h4>SELECCIONA TU TABLA</h4>
        <div class="ayuda col s12 m12 l12">
        <a class='dropdown-trigger btn' href='#' data-target='dropdown2'>SELECCIONA LA TABLA</a>
        <p>cuando quieras darle mantenimiento a otra tabla, da click aqui y selecciona una tabla en la que quieres dar mantenimiento.</p>
        </div>
  
   </div>
   <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">ENTENDIDO</a>
   </div>
  </div>
  <div class="tap-target" data-target="menu">
    <div class="tap-target-content">
      <h5>Title</h5>
      <p>A bunch of text</p>
    </div>
  </div>

<div class="colorEnca">
<div align="center" class="unpoquito">
<br>
<br>

 <!-- Dropdown Trigger -->
 <a class='dropdown-trigger btn' href='#' data-target='dropdown2'>SELECCIONA LA TABLA</a>
 
   <!-- Dropdown Structure -->
   <ul id='dropdown2' class='dropdown-content'>
     <li><a href="#!">PRODUCTOS</a></li>
     <li><a href="#!">ADMINISTRADORES</a></li>
     
     
   </ul>  
  
   
 </div>

 <br><br>
 <table class="light-primary-color  responsive-table">

        <thead>
          <tr>
              <th>Nombre</th>
              <th>Tipo</th>
              <th>descripcion</th>
              <th>Precio</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          <tr>
            <td>Alan</td>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Jonathan</td>   
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
          
        </tbody>
        <div class="botones col s12 m12 l12 container">
          <a class="btn-floating btn-large waves-effect waves-light red" id="menu"><i class="material-icons">add</i></a>
          <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></a>
          <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">mode_edit</i></a>
          <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">search</i></a>
      </div>  
      </table>
      
      <div class="fixed-action-btn up">
          <a class="btn-floating btn-large red">
            <i class="large material-icons">help</i>
          </a>
          <ul>
              <li><a  class="btn-floating red modal-trigger" href="#modal1"><i class="material-icons"></i></a></li>
              <li><a class="btn-floating yellow darken-1 modal-trigger" href="#modal2"><i class="material-icons"></i></a></li>
            </ul>
            </div>
            
    </div>


<?php
include "../../core/helpers/footer.php";
footer::pie();
?>