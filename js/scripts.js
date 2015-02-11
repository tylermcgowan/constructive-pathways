(function($) {
	
	var mobileMenuWidth = 700;
	
	var logo = $(".logo");
	var menu = $(".menu");
	var header = $("header");
	var logoBottom = logo.outerHeight(true);


	$(".menu button").on("click", function() {
		menu.toggleClass('active');
	});
	
	$(window).on("scroll", function(e) {
		if ($(this).scrollTop() > logoBottom) {
			header.addClass("sticky");
		} else {
			header.removeClass("sticky");
		}
	  
	});	
	
	var width = $(window).width();
	var offset = width >= mobileMenuWidth ? -136 : -60;
	
	if (window.location.hash) {
		$.scrollTo(window.location.hash, 1, {offset: offset});
		menu.find("a[href="+window.location.hash+"]").addClass("active");
	}
	
	
	$(".menu").localScroll({hash:true, offset: offset});
	
	
	$(".menu a").on("click", function(e) {
//		e.preventDefault();
		menu.removeClass("active");
		menu.find("a").removeClass("active");
		$(this).addClass("active");
		
	});
	
	
	function validateEmailSimple(email) {
	    var re = /\S+@\S+\.\S+/;
	    return re.test(email);
	}	
	
	var formRequired = $("form .required");
	var formEmail = $("form .email");
	var errorMessage = $(".error-message");
	
	$("form").on("submit", function() {
		var valid = true;
		
		formRequired.removeClass('error');
		
		formRequired.each(function() {
			var e = $(this);
			if ($.trim(e.val()) == '') {
				e.addClass('error');
				valid = false;
			}
		});
		
		formEmail.each(function() {
			var e = $(this);
			if (!validateEmailSimple(e.val())) {
				e.addClass('error');
				valid = false;
			}
		});
		
		errorMessage[valid ? 'hide' : 'show']();

		return valid;
	});
	
})(jQuery);