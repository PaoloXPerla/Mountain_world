$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
    $('.carousel').carousel();
    $('.fixed-action-btn').floatingActionButton();
    $('.modal').modal();
    $('.tap-target').tapTarget();
    $('.tap-target').tapTarget('open');
    $('.tap-target').tapTarget('close');
    $('.collapsible').collapsible();
    $('.parallax').parallax();
    
  });
  $('.button-collapse').sideNav({
    menuWidth: 300,
    edge: 'right',
    closeOnClick: true,
    draggable: true,
    onOpen: function(el){},
    onClose: function(el){}
  }
);
  
  
 
      