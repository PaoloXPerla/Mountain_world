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
            <link rel="stylesheet" href="../../resources/multimedia/Parallax.css">
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
                            <li><a href="sass.html">HOME</a></li>
                            <li><a href="badges.html">TIENDA</a></li>
                            <li><a href="collapsible.html">FAQS</a></li>
                            <li><a href="mobile.html">INGRESAR</a></li>
                            <li><a href="mobile.html"><i class="material-icons right">add_shopping_cart</i></a></li>
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
            <main>');

        }
       
    }
   
  
    