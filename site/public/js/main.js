//goto top

jQuery(function($) {'use strict',



	$(window).scroll(function () {

		if ($(this).scrollTop() > 150) {

			$('#gototop').show();

		} else {

			$('#gototop').hide();

		}

	});





    //Initiat WOW JS

    new WOW().init();



    setTimeout(function(){ 

    	$('.interrogation').fadeOut();

    }, 1000);



    setTimeout(function(){ 

    	$('.logo_balao').fadeOut();

    	$('.opa_balao').fadeOut();

    }, 1800); 

    /*setTimeout(function(){ 

    	$('.opa_balao').fadeOut();

    }, 6000);*/

});