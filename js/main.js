







//left ,midle and right buttons
$(document).ready(function(){

	$("#left").click(function(){  
	$(".imageText1").hide();
	$(".imageText2").hide();
  	$(".imageText")
    .animate({height:'show'},250);

  })


  $("#middle").click(function(){

    $(".imageText2").hide();
  	$(".imageText").hide();
  	$(".imageText1")
    .animate({width:'show'},300);
  /* $(".imageText div:nth-child(1)").html("<h3 class='text-center'>NEW AGE <span> TECHNOLOGY</span></h3>");
   $("imageText p:nth-child(1)").html("<")*/

  })

  $("#right").click(function(){

	$(".imageText").hide();
	$(".imageText1").hide();
  	$(".imageText2")
    .animate({width:'show'},300);

  })

});


// 


$(document).ready(function(){
$("#loremDolor .first")
/*.second()*/
.click(function(){
	$(this).css({
		/*background:"#1ac6ff",
		color:"white"*/

	})
	$(".three").hide()
	$(".two").hide()
	$(".one").show()
	.animate({
		"right":"200px"
	},500)
	.animate({
		"right":"0px"
	})
});

$("#loremDolor .second")
/*.second()*/
.click(function(){
	$(".three").hide()
	$(".one").hide()
	$(".two").show()
    .animate({
		"top":"0px"
	},500)
	.animate({
		"bottom":"500px"},700)
	$('.three').css('right', '-700px');
//I will ask about
	/*.css(
		"transform","rotate3d(2, 1, 0, 180deg)"
	)*/
});

$("#loremDolor .third")
/*.second()*/
.click(function(){
	$(".two").hide();
	$(".one").hide();
	$(".three")
	.show()
	.animate({
		"right":"50px"
	},500)
	.animate({
		"right":"0px"
	})
	/*.toggle("slide", { direction: "left" }, 1000);*/
	/*.blindRightToggle (500,function() {
				$(this).slideDown(500)
			});*/
	/*.animate({margin-bottom:'show'},300);*/
	
	/*.fadeTo(500, 0.5, function() {
				$(this).fadeTo(500,1.5)
			})*/

	/*.css({
		"margin-top":"200px;"
	});*/
});


});


//part with slider "people feedback"

$(document).ready(function(){

	$("#clientName .amy")
	.click(function(){
		$("#whatClientSay p")
		.hide()
		
		$("#whatClientSay .amySay")
		 .show();
	})
	$("#clientName .john")
	.click(function(){
		$("#whatClientSay p")
		.hide()
		
		$("#whatClientSay .johnSay")
		 .show();6
	})

	$("#clientName .peter")
	.click(function(){
		$("#whatClientSay p")
		.hide()
	
		 $("#whatClientSay .peterSay")
		 .animate({height:'show'},300);
	})
});


