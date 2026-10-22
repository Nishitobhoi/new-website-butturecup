    // <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    // <script src="//cdn.bootcss.com/waypoints/4.0.0/jquery.waypoints.min.js"></script>
    // <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    // <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>

$(document).ready(function(){
	$("#click_here_sub").click(function () {
	$("#drop_menu_sub").fadeIn(1000);
	$("#drop_menu").slideUp("slow");
		$("#click_here_back").fadeIn(10);
		$("#click_here").fadeOut(10);
	});
	$("#click_here_back").click(function () {
		$("#drop_menu_sub").slideUp(100);
		$("#drop_menu").slideDown("slow");
		$("#click_here_back").fadeOut(100);
		$("#click_here").fadeIn(100);
	});
	$("#click_here").click(function () {
		$(".left_menu_main").removeClass("active");
			return false;
	});
	
	$(".click_here").click(function () {
		$(".left_menu_main").removeClass("active");
			return false;
	});

	$("#menu-toggle").click(function () {
		$(".left_menu_main").addClass("active");
			return false;
	});
  
  
	$(".close").click(function () {
		$(".overlay").removeClass("active");
     $('.overlay').find("*").removeClass("active");
			return false;
	});

	$(".button").click(function () {
    var status_id = $(this).attr('href').split('#');
     
		$(".overlay").addClass("active");
    $("#"+status_id[1]).addClass("active");
    
			return false;
	});
});

//
$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });
  return false;
});

//carousel
$(".carousel").swipe({

  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left') $(this).carousel('next');
    if (direction == 'right') $(this).carousel('prev');

  },
  allowPageScroll:"vertical"

});

/* On BxSlider desktop Code */
	
	$(document).ready(function(){
		var windowsize = $(window).width();
	var containerSize = $('.casestudy .container').width();
	var maxSlides = 3;
	var slideWidth = containerSize/3;
	if (windowsize >= 768)	{
		maxSlides = 3;
		slideWidth = containerSize/3;
	}else if(windowsize < 768  && windowsize >= 480){
		maxSlides = 1;
		slideWidth = containerSize/1;
	}else if(windowsize < 480){
		maxSlides = 1;
		slideWidth = containerSize/1;
	}
	var bx = $('.bxslider1').bxSlider({
		pager: true,
		nextText: '',
		prevText: '',
		minSlides: 1,
		slideMargin: 25,
		maxSlides: maxSlides,
		slideWidth:slideWidth,
		  auto: true,
		  autoControls: true,
		  stopAutoOnClick: true,		 
		moveSlides: 1
	});

/* On BxSlider resize Code */
	$( window ).resize(function() {
	
		var windowsize = $(window).width();
		var containerSize = $('.casestudy .container').width();
		var maxSlides = 3;
		
		var slideWidth = containerSize/3;
		
		
		if (windowsize >= 768)	{
			maxSlides = 3;
			slideWidth = containerSize/3;
		}else if(windowsize < 768  && windowsize >= 480){
			maxSlides = 1;
			slideWidth = containerSize/1;
		}else if(windowsize < 480){
			maxSlides = 1;
			slideWidth = containerSize/1;
		}
	
		bx.destroySlider();
		bx = $('.bxslider1').bxSlider({
			pager: true,
			nextText: '',
			prevText: '',
			minSlides: 1,
			slideMargin: 25,
			maxSlides: maxSlides,
			slideWidth:slideWidth,
			  auto: true,
			  autoControls: true,
			  stopAutoOnClick: true,			  
			 moveSlides: 1
		});
	});
	});



/* On BxSlider desktop Code */
	
	$(document).ready(function(){
		var windowsize = $(window).width();
	var containerSize = $('.right').width();
	var maxSlides = 3;
	var slideWidth = containerSize/3;
	if (windowsize >= 768)	{
		maxSlides = 3;
		slideWidth = containerSize/3;
	}else if(windowsize < 768  && windowsize >= 480){
		maxSlides = 1;
		slideWidth = containerSize/1;
	}else if(windowsize < 480){
		maxSlides = 1;
		slideWidth = containerSize/1;
	}
	var bx = $('.bxslider').bxSlider({
		pager: true,
		nextText: '',
		prevText: '',
		minSlides: 1,
		slideMargin: 25,
		maxSlides: maxSlides,
		slideWidth:slideWidth,
		  auto: true,
		  autoControls: true,
		  stopAutoOnClick: true,		 
		moveSlides: 1
	});

/* On BxSlider resize Code */
	$( window ).resize(function() {
	
		var windowsize = $(window).width();
		var containerSize = $('.right').width();
		var maxSlides = 3;
		
		var slideWidth = containerSize/3;
		
		
		if (windowsize >= 768)	{
			maxSlides = 3;
			slideWidth = containerSize/3;
		}else if(windowsize < 768  && windowsize >= 480){
			maxSlides = 1;
			slideWidth = containerSize/1;
		}else if(windowsize < 480){
			maxSlides = 1;
			slideWidth = containerSize/1;
		}
	
		bx.destroySlider();
		bx = $('.bxslider').bxSlider({
			pager: true,
			nextText: '',
			prevText: '',
			minSlides: 1,
			slideMargin: 25,
			maxSlides: maxSlides,
			slideWidth:slideWidth,
			  auto: true,
			  autoControls: true,
			  stopAutoOnClick: true,			  
			 moveSlides: 1
		});
	});
	});
	
	
	/* On BxSlider desktop Code */
	
	$(document).ready(function(){
		var windowsize = $(window).width();
	var containerSize = $('.right-side').width();
	var maxSlides = 2;
	var slideWidth = containerSize/2;
	if (windowsize >= 768)	{
		maxSlides = 2;
		slideWidth = containerSize/2;
	}else if(windowsize < 768  && windowsize >= 480){
		maxSlides = 1;
		slideWidth = containerSize/1;
	}else if(windowsize < 480){
		maxSlides = 1;
		slideWidth = containerSize/1;
	}
	var bx = $('.bxslider2').bxSlider({
		pager: true,
		nextText: '',
		prevText: '',
		minSlides: 1,
		slideMargin: 15,
		maxSlides: maxSlides,
		slideWidth:slideWidth,
		  auto: true,
		  autoControls: true,
		  stopAutoOnClick: true,		 
		moveSlides: 1
	});

/* On BxSlider resize Code */
	$( window ).resize(function() {
	
		var windowsize = $(window).width();
		var containerSize = $('.right-side').width();
		var maxSlides = 2;
		
		var slideWidth = containerSize/2;
		
		
		if (windowsize >= 768)	{
			maxSlides = 2;
			slideWidth = containerSize/2;
		}else if(windowsize < 768  && windowsize >= 480){
			maxSlides = 1;
			slideWidth = containerSize/1;
		}else if(windowsize < 480){
			maxSlides = 1;
			slideWidth = containerSize/1;
		}
	
		bx.destroySlider();
		bx = $('.bxslider2').bxSlider({
			pager: true,
			nextText: '',
			prevText: '',
			minSlides: 1,
			slideMargin: 15,
			maxSlides: maxSlides,
			slideWidth:slideWidth,
			  auto: true,
			  autoControls: true,
			  stopAutoOnClick: true,			  
			 moveSlides: 1
		});
	});
	});
	
	
	jQuery(document).ready(function() {
	
  $.validator.addMethod("alpha", function(value, element) {
  	var val = $.trim(value);
    return this.optional(element) || val == val.match(/^[a-zA-Z\s]+$/);
 });

 $.validator.addMethod("customemail", 
    function(value, element) {
    	var email = $.trim(value);
        return /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(email);
    }, 
    
);

 //  $.validator.addMethod("phonenumber", function(value, element) {

 //  	phone_number = $.trim(value.replace(/\s+/g, ""));
 //    return this.optional(element) || phone_number.length > 9 && 
 //    phone_number.match(/^(\+?1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
  	
 // });

 jQuery.validator.addMethod("phonenumber", function(phonenumber, element) {
    	    phone_number1 = phonenumber.replace(/\s+/g, "");
    	    var phone_number = $.trim(phone_number1);
    	    return this.optional(element) || phone_number.length > 9 && 
    	    phone_number.match(/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/);
    	});
  function recaptchaCallback() {
            jQuery('#hiddenRecaptcha').valid();
        };

  $("form[name='form_contact']").validate({
    ignore: ".ignore",
    rules: {
   
      name: {
      	required: true,
      	alpha : true,
      	number: false,
      },
      
      email: {
	        required:  {
	                depends:function(){
	                    $(this).val($.trim($(this).val()));
	                    return true;
	                }   
	            },
	        customemail: true
	    },
      
      phone :{
      	required:true,
      	phonenumber : true,
      	minlength:10, 
      	maxlength:20
      },
      
       lastname: {
      	required: true,
      	alpha : true,
      	number: false,
      },
      
       legalname: {
      	required: true,
      	alpha : true,
      	number: false,
      },
      
       businesstype: {
      	required: true,
      	alpha : true,
      	number: false,
      },    
      
      mailadress: {
      	 required:  {
	                depends:function(){
	                    $(this).val($.trim($(this).val()));
	                    return true;
	                }   
	            },
	        customemail: true
      },
      
      "hiddenRecaptcha": {
                required: function() {
                    if (grecaptcha.getResponse() == '') {
                        return true;
                    } else {
                        return false;
                    }
                }
            }
     
    },
    messages: {
      name: {
      	required : "First Name is required",
      	alpha : "Name is required",
      	minlength : "Name is required",
      },
      
      email:{
      	required :"Email id is required",
      	customemail : "Email id is required",
      },
      phone: {
      	required : "Phone number is required",
        phonenumber : "Phone number is required",
      	minlength: "Phone number is required",
      	maxlength: "Phone number is required",
      },
      lastname: "Last Name is required",
      legalname: "Leagal Name is required",
      businesstype: "Business type is required",
      mailadress: "Mail Address is required",      
     hiddenRecaptcha: "Captcha is required"
    },
   
    submitHandler: function(form) {

     // if (grecaptcha.getResponse()) {
	        form.submit();
	   // } else {
	    // 	$('#hiddenRecaptcha').html('');
	    //    	$('#hiddenRecaptcha').append('<p class="error">Captcha is required</p>');
	    // }
    }
  });

});	

    function lettersOnly() 
    {
        var charCode = event.keyCode;
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)
            return true;
        else
            return false;
    }

const counters = document.querySelectorAll(".counter");

counters.forEach((counter) => {
  counter.innerText = "0";

  const updateCounter = () => {
    const target = +counter.getAttribute("data-target");
    const c = +counter.innerText;

    const increment = target / 900;
    console.log(increment);

    if (c < target) {
      counter.innerText = `${Math.ceil(c + increment)}`;
      setTimeout(updateCounter, 1);
    } else {
      counter.innerText = target;
    }
  };

  updateCounter();
});

document.addEventListener('DOMContentLoaded', function () {
  const modal = document.querySelector('.bd-example-modal-lg');

  if (modal) {
    const closeBtn = modal.querySelector('.modal-header .close');

    if (closeBtn) {
      closeBtn.classList.add('js-force-close');
      console.log('js-force-close class added');
    }
  }
});


(function () {
  const modal = document.querySelector('.bd-example-modal-lg');

  if (!modal) return;

  function openModal() {

    modal.style.display = 'block';
    modal.classList.add('show');
    modal.removeAttribute('aria-hidden');

    document.body.classList.add('modal-open');

    // Backdrop
    const backdrop = document.createElement('div');
    backdrop.className = 'modal-backdrop fade show';
    document.body.appendChild(backdrop);
  }

  function closeModal() {

    // Remove iframe focus (fix aria-hidden warning)
    try {
      modal.querySelectorAll('iframe').forEach(i => i.blur());
      document.activeElement.blur();
      document.body.focus();
    } catch (e) {}

    modal.classList.remove('show');
    modal.style.display = 'none';
    modal.setAttribute('aria-hidden', 'true');

    document.body.classList.remove('modal-open');

    document.querySelectorAll('.modal-backdrop').forEach(b => b.remove());
  }

  // OPEN
  document.addEventListener('click', function (e) {
    if (e.target.closest('.js-open-modal')) {
      e.preventDefault();
      openModal();
    }
  });

  // CLOSE (button)
  document.addEventListener('mousedown', function (e) {
    if (e.target.closest('.js-force-close')) {
      e.preventDefault();
      e.stopPropagation();
      closeModal();
    }
  });

  // CLOSE (outside click)
  document.addEventListener('mousedown', function (e) {
    if (
      modal.classList.contains('show') &&
      e.target.classList.contains('modal')
    ) {
      closeModal();
    }
  });
})();