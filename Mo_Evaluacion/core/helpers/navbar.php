<?php
class navbar
    {
        public static function header($title){
            print('<!DOCTYPE html>
            <html lang="es">
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
            <div class="navbar-fixed">
                    <nav class="deep-purple darken-4">
                        <div class="nav-wrapper">
                            <img src="../../resources/multimedia/Free_Sample_By_Wix (1).jpg" alt="" class="circle" height="60"/>
                        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                            <ul class="right hide-on-med-and-down">
                                <li><a href="casa.php">HOME</a></li>
                                <li><a class="dropdown-trigger btn Mono" data-target="dropdown1">Tienda<i class="material-icons right">expand_more</i></a></li>
                                <li><a href="faq.php">FAQS</a></li>
                                <li><a href="login.php">INGRESAR</a></li>
                                <li><a href="carritoC.php"><i class="material-icons right">add_shopping_cart</i></a></li>
                                <li><a id="btnConfig"><i class="material-icons right">settings</i></a></li>
                            </ul>
                                    <ul id="dropdown1" class="dropdown-content">
                                    <li><a href="tienda.php">carpas</a></li>
                                    <li><a href="#!">accesorios</a></li>
                                    <li><a href="#!">herramientas</a></li>
                                    </ul>
                        </div>
                    </nav>
            
                    <ul class="sidenav right " id="mobile-demo">
                        <li><a href="sass.html">HOME</a></li>
                        <li><a href="badges.html">TIENDA</a></li>
                        <li><a href="collapsible.html">FAQS</a></li>
                        <li><a href="mobile.html">INGRESAR</a></li>
                        <li><a href="mobile.html"><i class="material-icons right">add_shopping_cart</i></a></li>
                    </ul>
            </div>
            <main>
            <ul class="sidenav right" id="sde">
        <li><div class="user-view">
          <div class="background">
           
          </div>
          
          <a href="#name"><span class="white-text name">John Doe</span></a>
          <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div></li>
        <li><a href="perfilE.php"><i class="material-icons">edit</i>Edita tu perfil</a></li>
        <li><a href="tienda.php"><i class="material-icons">home</i>Tienda</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Subheader</a></li>
        <li><a class="waves-effect" href="faq.php">Preguntas Frecuentes</a></li>
      </ul>
            '
        
        );

        }
       
    }
   
  
    