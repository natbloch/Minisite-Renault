var modelToStart = 0;
var isOpen = false;
$(function(){
	// $('.send-form').on('click', function(){

	// });


	$(".formbox .close-form").on('click', function(){
        $(".formbox").hide("slide", { direction: "down" }, 400);
        return false;
    });

    $('#form_btn a').on('click', function(){
        $(".formbox").show("slide", { direction: "down" }, 400);
        return false;
    });
	$('.all-models-btn').on('click', function(){
		// console.log('ok');
		$('.ketchup-error').css('display','none');
		if(!isOpen){
			isOpen = true;
			$("#carDialog").dialog({
		        show: 'blind',
		        hide: 'blind',
		        dialogClass: 'carDialog'
			});

			$("#stripmob").css('opacity','0');
			$(".all-models-btn").css('display','none');
			$(".all-models-btn").removeClass('mobi');
			// $(".all-models-btn-x").fadeIn();
			$(".all-models-btn-x").show("slide", { direction: "left" }, 400);
			// $(".all-models-btn-x").css('display','block');
		}else{
			isOpen = false;
			$("#carDialog").dialog('close');
		}
	    $(".ui-dialog-titlebar-close").on('click', function(){
	    	$('.ketchup-error').css('display','none');
			isOpen = false;
		});
	});

	$(".all-models-btn-x").on('click', function(){
    	// $(".all-models-btn").css('display','block');
    	$(".all-models-btn").show("slide", { direction: "left" }, 400);
    	$(".all-models-btn").addClass('mobi');
		$(".all-models-btn-x").css('display','none');
		$("#carDialog").dialog('close');
		$("#stripmob").css('opacity','1');
		isOpen = false;
	});

	// $(document).on('click', '.all-models-btn', function () {

	// });

	$('.smallcarmob').on('click', function(){
		isOpen = false;
		$(".all-models-btn").show("slide", { direction: "right" }, 400);
		$(".all-models-btn").addClass('mobi');
		$(".all-models-btn-x").css('display','none');
		$("#carDialog").dialog('close');
	});

	$('.carmobChosen').on('click', function(){
		isOpen = false;
		carVal = this.value;
		var slider = $( '#slidesktop ul.sliderim' );
		slider[0].slick.slickGoTo(parseInt(carVal));
		slider.slick('slickPause');
		// $('#slidemobile ul').slick('destroy');
		// $('#slidemobile ul').slick('unslick'); /* ONLY remove the classes and handlers added on initialize */
    	// $('#slidemobile ul').slick(getSliderSettings(carVal)); /* Initialize the slick again */
    	// $('#slidemobile ul').slickGoTo( parseInt(carVal) );
    	// $('#stripmob > ul').slick('destroy');
    	// $('#stripmob > ul').slick('unslick');
    	// $('#stripmob > ul').slick(getStripmob(carVal));
    	$(".all-models-btn").show("slide", { direction: "right" }, 400);
    	$(".all-models-btn").addClass('mobi');
		$(".all-models-btn-x").css('display','none');
    	$("#carDialog").dialog('close');
        $("#stripmob").css('opacity','1');

		if (carVal == 0) {
			$('span.title').html("לתיאום נסיעת מבחן<br>השאירו פרטים:");
			$('.social .youtube').attr("href", 'https://www.youtube.com/watch?v=x56eETNkgY8');
		}else if (carVal == 1) {
			$('span.title').html("לתיאום נסיעת מבחן<br>השאירו פרטים:");
			$('.social .youtube').attr("href", 'https://www.youtube.com/watch?v=RbB2M9nwzqw');
		}else if (carVal == 2) {
			$('span.title').html("לתיאום נסיעת מבחן<br>השאירו פרטים:");
			$('.social .youtube').attr("href", 'https://www.youtube.com/channel/UCkdQYMuUtnkousCa4BP1cTQ');
		}else if (carVal == 3) {
			$('span.title').html("לתיאום נסיעת מבחן<br>השאירו פרטים:");
			$('.social .youtube').attr("href", 'https://www.youtube.com/watch?v=sMJMUYT82SY');
		}else if (carVal == 4) {
			$('span.title').html("לתיאום נסיעת מבחן<br>השאירו פרטים:");
			$('.social .youtube').attr("href", 'https://www.youtube.com/watch?v=sMJMUYT82SY');
		}else if (carVal == 5) {
			$('span.title').html("לתיאום נסיעת מבחן<br>השאירו פרטים:");
			$('.social .youtube').attr("href", 'https://www.youtube.com/watch?v=sMJMUYT82SY');
		}else if (carVal == 6) {
			$('span.title').html("לתיאום נסיעת מבחן<br>השאירו פרטים:");
			$('.social .youtube').attr("href", 'https://www.youtube.com/watch?v=sMJMUYT82SY');
		}

	});

});
$(document).ready(function () {

	var url_string = window.location.href; //window.location.href
	var url = new URL(url_string);
	var modelToStart = url.searchParams.get("model");


	if(modelToStart == "clio"){
	    modelToStart = 0;
	}else if(modelToStart == "grand"){
	    modelToStart = 1;
	}else if(modelToStart == "kadjar"){
	    modelToStart = 2;
	}else if(modelToStart == "captur"){
	    modelToStart = 3;
	}else if(modelToStart == "zoe"){
		    modelToStart = 4;
		}else{
	    modelToStart = 0;
	}

modelToStart = 1;



	// console.log(modelToStart);

    $width = $(window).width();

		$("#phone").keydown(function (e) {
			var phoneval = $("#phone").val();
			$("#phone").attr('maxlength','10').attr('minlength','10');
			/*if (phoneval[0] == 0) {
				if (phoneval[1] == 5 || phoneval[1] == 7) {
					$("#phone").attr('maxlength','10').attr('minlength','10');
				}else{
					$("#phone").attr('maxlength','9').attr('minlength','9');
				}
			}*/

	  		// Allow: backspace, delete, tab, escape, enter and .
	  		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
	  			 // Allow: Ctrl+A, Command+A
	  			(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
	  			 // Allow: home, end, left, right, down, up
	  			(e.keyCode >= 35 && e.keyCode <= 40)) {
	  				 // let it happen, don't do anything
	  				 return;
	  		}
	  		// Ensure that it is a number and stop the keypress
	  		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
	  			e.preventDefault();
	  		}
	  	});


			function checkPhone(phone) {
		    var phoneval = $("#phone").val();
		    if (phoneval[0] == 0) {
		        if (phoneval[1] == 5 /* || phoneval[1] == 7*/) {
		          if (phoneval.length == 10) {
		            return /^0[0-9]{8,9}$/.test(phone);
		          }
		        }else{
		          /*if (phoneval.length == 9) {
		            return /^0[0-9]{8,9}$/.test(phone);
		          }*/
		          return false;
		        }

		      }else{
		        return false;
		      }
		    }

		$.ketchup.validation('phone', "* יש לכתוב מס' טלפון ללא רווחים ומקפים", function(form, el, value) {

			if (!this.isNumber(value) || !checkPhone(value))
				return false;
			else
				return true;
		});
		function checkFullname(fullname) {
      fullname = $.trim(fullname);
          var firstName = fullname.split(' ')[0];
          var lastName = fullname.split(' ')[1];
          if($.trim(firstName) != '' && $.trim(lastName) != ''){
						//jQuery("#myForm #captcha_is_valid").val(0);
            //grecaptcha.execute();
            return true;
          }else{
            return false;
          }
      }
			$.ketchup.validation('name', "* יש לרשום שם מלא כולל שם משפחה", function(form, el, value) {
					if (!checkFullname(value))
							return false;
					else
							return true;
			});

			$.ketchup.validation('captcha', 'אימות גולש לא תקין', function(form, el, value) {
        console.log('captcha validation');
        if(value == 1 ) {
          return true;
        } else {
          alert('אימות גולש לא תקין')
          return false;
        }
      }, function(form, el) {
        //initial callback, this is optional
      });

	$.ketchup.messages({
		'required': '* יש למלא שדה זה',
		'name': 'שם לא תקין',
		'number': 'יש למלא שדה זה',
		'email': '* יש למלא דואר אלקטרוני',
		'phone': 'יש למלא מספר טלפו נייד תקין'
	});

	$('form').bind('formIsValid', function(event, form) {
        event.preventDefault();
         form.find('button[type="submit"]').attr("disabled", "disabled");
     }).ketchup();


	if ($(window).width() > 1000) {
		$('.bot .zi1').mouseover(function () {
			$('.zoome1').css('display','block');
		});
		$('.bot .zi2').mouseover(function () {
			$('.zoome2').css('display','block');
		});
		$('.bot .zi3').mouseover(function () {
			$('.zoome3').css('display','block');
		});
		$('.bot .zi4').mouseover(function () {
			$('.zoome4').css('display','block');
		});
        $('.bot .zi5').mouseover(function () {
            $('.zoome5').css('display','block');
        });
        $('.bot .zi6').mouseover(function () {
            $('.zoome6').css('display','block');
        });
        $('.bot .zi7').mouseover(function () {
            $('.zoome7').css('display','block');
        });
        $('.bot .zi8').mouseover(function () {
            $('.zoome8').css('display','block');
        });
		$('.zoome').mouseleave(function () {
			$(this).fadeOut();
		});
	}


	$('#slidesktop ul.sliderim').slick({ //DESKTOP MAIN
        dots: true,
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        initialSlide: parseInt(modelToStart),
        adaptiveHeight: true,
		draggable: false,
		pauseOnHover : false,
		pauseOnFocus : false,
        autoplay : false,
        fade: true,
		asNavFor: '.sliderim',
        autoplaySpeed : 4000,
		arrows: false
        // prevArrow : "<img class='ar la' src='images/al.png'>",
        // nextArrow : "<img class='ar ra' src='images/ar.png'>"
    });

	// $('#slidesktop ul').slick({ //DESKTOP MAIN
 //        dots: false,
 //        infinite: true,
 //        speed: 1000,
 //        slidesToShow: 1,
 //        // initialSlide: parseInt(modelToStart),
 //        adaptiveHeight: true,
	// 	draggable: false,
	// 	pauseOnHover : false,
	// 	pauseOnFocus : false,
 //        autoplay : true,
 //        fade: true,
	// 	asNavFor: '.sliderim',
 //        autoplaySpeed : 4000,
 //        prevArrow : "<img class='ar la' src='images/al.png'>",
 //        nextArrow : "<img class='ar ra' src='images/ar.png'>"
 //    });

    $('.stripslide > ul').slick({ // DESKTOP CAPTIONS
        dots: true,
        infinite: true,
		draggable: false,
		autoplay : false,
		pauseOnHover : false,
		pauseOnFocus : false,
        slidesToShow: 1,
        initialSlide: parseInt(modelToStart),
		asNavFor: '.sliderim',
        prevArrow : "",
        nextArrow : ""
    });

    $('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    	// $('.subtitle').fadeOut(100);
    	$('.zoome1').fadeOut(100);
		$('.zoome2').fadeOut(100);
		$('.zoome3').fadeOut(100);
		$('.zoome4').fadeOut(100);
		$('.zoome5').fadeOut(100);
	 console.log(nextSlide);
        $(".head_cars > div:nth-child("+(nextSlide+1)+")").find(".active").css('display','block').end().find(".notActive").css('display','none');
        $(".head_cars > div:not(:nth-child("+(nextSlide+1)+"))").find(".active").css('display','none').end().find(".notActive").css('display','block');
    });

    $('.slider').on('afterChange', function(event, slick, currentSlide){
	//   console.log(currentSlide);
        //$(".head_cars > div:nth-child("+(currentSlide+1)+")").find(".active").css('display','block').end().find(".notActive").css('display','none');
       // $(".head_cars > div:not(:nth-child("+(currentSlide+1)+"))").find(".active").css('display','none').end().find(".notActive").css('display','block');
	});

	$('#slidemobile ul').slick({ // MOBILE MAIN
        dots: false,
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        // initialSlide: 1,
        initialSlide: parseInt(modelToStart),
        adaptiveHeight: true,
		pauseOnHover : false,
		pauseOnFocus : false,
        autoplay : true,
        fade: true,
		asNavFor: '.sliderim',
        autoplaySpeed : 4000,
        prevArrow : "<img class='ar la' src='images/al.png'>",
        nextArrow : "<img class='ar ra' src='images/ar.png'>"
    });

	$(".images_slider > .arrows a").click(function(e) {
		e.preventDefault()
		var $images_slider = $(this).parents('.images_slider');
		var $images = $images_slider.find('.images');
		var $active_image = $images.find('> .active');
		var $next_image = $(this).hasClass('.left_arrow') ? $active_image.prev() : $active_image.next();
		if($next_image.length == 0) {
            $next_image = $images.find("> div:first-child");
		}
        console.log($images_slider, $images, $active_image, $next_image);
        $active_image.removeClass("active");
        $next_image.addClass("active");

		return false;
	});

	$('#slick-slide10').on('click', function(){
		$('span.title').html("לתיאום נסיעת מבחן<br>השאירו פרטים:");
			$('.social .youtube').attr("href", 'https://www.youtube.com/watch?v=x56eETNkgY8');
	});

	$('#slick-slide11').on('click', function(){
		$('span.title').html("לתיאום נסיעת מבחן<br>השאירו פרטים:");
		$('.social .youtube').attr("href", 'https://www.youtube.com/watch?v=RbB2M9nwzqw');
	});

	$('#slick-slide12').on('click', function(){
		$('span.title').html("לתיאום נסיעת מבחן<br>השאירו פרטים:");
		$('.social .youtube').attr("href", 'https://www.youtube.com/channel/UCkdQYMuUtnkousCa4BP1cTQ');
	});

	$('#slick-slide13').on('click', function(){
		$('span.title').html("לתיאום נסיעת מבחן<br>השאירו פרטים:");
		$('.social .youtube').attr("href", 'https://www.youtube.com/watch?v=sMJMUYT82SY');
	});

	$('#slick-slide14').on('click', function(){
		$('span.title').html("לתיאום נסיעת מבחן<br>השאירו פרטים:");
		$('.social .youtube').attr("href", 'https://www.youtube.com/watch?v=sMJMUYT82SY');
	});


})
