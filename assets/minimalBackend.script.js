jQuery(document).ready(function () {

	var navOffset = jQuery("#nav").offset().top;
	var fixed = false;

	jQuery(window).scroll(function () {
		if(window.pageYOffset >= navOffset) {
			fixed = true;
			jQuery("#nav").css("position","fixed");
			jQuery("#nav").css("top","-5px");
			jQuery("#nav").css("width","100%");
			jQuery("#contents").css("padding-top","36px");
		}
		if(fixed && window.pageYOffset < navOffset) {
			fixed = false;
			jQuery("#nav").css("position","relative");
			jQuery("#nav").css("top","auto");
			jQuery("#nav").css("width","auto");
			jQuery("#contents").css("padding-top","0");
		}
	});

});