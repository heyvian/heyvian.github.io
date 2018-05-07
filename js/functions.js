// JavaScript Document

$(document).ready(function() {
   var panelHeight;
   var hash = window.location.hash;
   $("#less").hide();
   if(hash == "#letMedo"){
	   $("#container").height(1680);
	   $("#more").hide();
	   $("#less").show();
   } else {
	   $("#container").height(75);
   }	   

   // MORE BUTTON 
   $("#more").click(function() {
    panelHeight = $("#container").height();
	  if(panelHeight >= 75 && panelHeight < 495){
      $("#more-arrow").fadeOut();
      //$(".intro").fadeOut();
      $("#container").animate({height: '+=420px'},750); 
	    $("#less").fadeIn();
    } else if(panelHeight >= 495 && panelHeight < 625){
	    $("#container").animate({height: '+=120px'},750,function(){$("#more").fadeOut()});
    }
    $('html,body').animate({ scrollTop: $(document).height() }, 750);
   });	

   // LESS BUTTON 
   $("#less").click(function() {
      panelHeight = $("#container").height();
	   if(panelHeight <= 625 && panelHeight > 495){
        $("#container").animate({height: '-=120px'},750);
	    $("#more").fadeIn();
	   } else {
	    $("#container").animate({height: '-=420px'},750,function(){$("#less").fadeOut(),/*$(".intro").fadeIn(),*/$("#more-arrow").fadeIn()});
       }
    });	
	$('#coda-slider-1').codaSlider({
       dynamicArrows: false,
       dynamicTabs: false,
	   autoHeight: false
    });
});