$(document).ready(function(){
  $('.materialboxed').materialbox();
});

$('.materialboxed').materialbox({
  inDuration:275,
  outDuration:200,
  onOpenStart: function() {console.log("onOpenStart");},
  onOpenEnd: function() {console.log("onOpenEnd");},
  onCloseStart: function() {console.log("onCloseStart");},
  onCloseEnd: function() {console.log("onCloseEnd");}
});