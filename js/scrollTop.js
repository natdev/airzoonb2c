
$(document).ready(function(){
$('.anchor').click(function(){
  var body = $("html, body");
  body.stop().animate({scrollTop:0}, 500, 'swing');
});


});
