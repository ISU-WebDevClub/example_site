$(document).ready(function(){

  $("#toMakeFly").click(function() {

    $("#toMakeFly").slideUp();
  });

  $("#toMakeFly").hover(function(){
    $(".expand").width("500px");
    $(".expand").height("500px");
  });

  var wide = $(window).width();

  if(wide < 800){
    $(".floaty").css({"display": "block"});
  }
  else{
    $(".floaty").css({"display": "table-cell"});
  }

  if(wide < 450){
    $(".button").css({"font-size": "18px"});
  }
  else{
    $(".button").css({"font-size": "inherit"});
  }

});
