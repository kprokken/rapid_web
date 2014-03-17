$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});


$(document).ready(function(){
	$("a.button_style#button1").click( function () {//Axl
		$(".bio_content1").toggle(1000);
		return false;
	});

		$(".bio_text a img").click( function () {
			$(".bio_content1").hide(1000);
		});

	$("a.button_style#button2").click( function () {//Izzy
		$(".bio_content2").toggle(1000);
		return false;
	});

		$(".bio_text a img").click( function () {
				$(".bio_content2").hide(1000);
			});

	$("a.button_style#button3").click( function () {//Slash
		$(".bio_content3").toggle(1000);
		return false;
	});

		$(".bio_text a img").click( function () {
				$(".bio_content3").hide(1000);
			});

	$("a.button_style#button4").click( function () {//Duff
		$(".bio_content4").toggle(1000);
		return false;
	});

		$(".bio_text a img").click( function () {
				$(".bio_content4").hide(1000);
			});

	$("a.button_style#button5").click( function () {//Sorum
		$(".bio_content5").toggle(1000);
		return false;
	});

		$(".bio_text a img").click( function () {
				$(".bio_content5").hide(1000);
			});

	/*$("a#contact.contact_style").click( function() {
		$(".email_form").show(1000);
		return false;
	});

		$("a img.close_email").click( function() {
			$(".email_form").hide(1000);
		});*/

	$("#email a").click( function (){
			$(".email_form").hide(1000);
	});

	$("li.history a").click( function() {
		$(".history_text").show(1000);

	});

	$("a.button_style#member").click( function(){
		$(".user_info").show(1000);
		return false;
	});


	$(".item").click(function(){
		$(this).transition({ scale: 2.2 }).addClass(".myClass").transition({x: -55, y: 55, easing: 'snap',  duration: 50 });
		$(this).click(function(){
			$(this).transition({ scale: 1.0 }).removeClass("myClass").transition({x: 0, y: 0, easing: 'snap', duration: 50 });
			// $(this).click(function(){
			// 	(this).bind('click');
			// 	})
		 })
		
	});

	
});