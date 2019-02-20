<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../resources/css/materialize.min.css">
            <link rel="stylesheet" href="../../resources/css/color.css">
            <link rel="stylesheet" href="../../resources/css/estilos.css">
            <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
            <link href="../../resources/css/iconos.css " rel="stylesheet">
    <title>Document</title>
</head>
<body>


<nav>
    <div class="nav-wrapper deep-purple darken-4 ">
    <div id="content">
    <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>
</div>
    <img src="../../resources/multimedia/Free_Sample_By_Wix (1).jpg" alt="" class="circle" height="60"/>
    
      <ul class="right hide-on-med-and-down">
       
        <li><a href="sass.html"><i class="material-icons">search</i></a></li>
        <li><a href="badges.html"><i class="material-icons">apps</i></a></li>
        <li><a href="collapsible.html"><i class="material-icons">redo</i></a></li>
        <li><a href="mobile.html" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">face</i></a></li>
        <li><a id="btnConfig"><i class="material-icons right">settings</i></a></li>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </ul>
    </div>
  </nav>
  <ul id="slide-out" class="side-nav fixed">
      <li><a href="#!">First Sidebar Link</a></li>
      <li><a href="#!">Second Sidebar Link</a></li>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
          
        
    
<?php
include "../../core/helpers/footer.php";
footer::pie();
?>