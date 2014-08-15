// JavaScript Document

jQuery(document).ready(function($) {
	
	/* ---------------------------------------------------------------------- */
	/*	Min-height															  */
	/* ---------------------------------------------------------------------- */
	(function() {
		// Set minimum height so footer will stay at the bottom of the window
		function setMinHeight() {
			$('#wrap').css('min-height',
				$(window).outerHeight(true)
				- ( $('body').outerHeight(true) - $('body').height())
				- $('#footer').outerHeight(true)
			);
		}
		setMinHeight();
		// Window resize
		$(window).on('resize', function() {
			var timer = window.setTimeout( function() {
				window.clearTimeout( timer );
				setMinHeight();
			}, 30 );
		});
	})();
	/* end Min-height */
	
	
	/* ---------------------------------------------------------------------- */
	/*	Main Navigation														  */
	/* ---------------------------------------------------------------------- */
	(function() {
		$.fn.collapse = function (option) {
			var $this = $(this), move = $this.hasClass('in') ? 'hide' : 'show';
			if(move == 'show'){
				$this.addClass('in');
				$this.css('height','auto');
			}
			else if(move == 'hide') {
				$this.removeClass('in');
				$this.css('height',0);
			}
		}
		$(document).on('click.collapse', '[data-toggle=collapse]', function (e) {
			var $this = $(this), href, 
			target = $this.attr('data-target')|| e.preventDefault()
			$(target).collapse('toggle');
		})
	})();
	/* end Main Navigation */
	
	function checkEmail(email) {
		// Check for empty field
		if (email.length == 0) {return false;}
		
		// Check for email format
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {return true;}
		else {return false;}
	}
	
	/* Registeration of the user */
	$("#register-form").submit(function(e){
		var $content = $('.modal .content'), isValidForm = true, 
			$email=$("#register-form input").val(), $error=$("#login-error");
		isValidForm = checkEmail($email);
    	if (!isValidForm){
			 $error.removeClass('hide');
			 return false;
		}
		$.ajax({
			type: 'POST',
			url: 'register.php',
			data: $('#register-form').serialize(),
			cache: false,
			beforeSend:function(){
				$($content).html('<div class="loading"><img src="img/loader.gif" alt="Loading..." /></div>');
			},
			success:function(data){
				$($content).empty();
				$($content).append(data);
			},
			error:function(){
				$($content).html('<p class="error">Sorry we were unable to reach host.Please try after sometime.</p>');
			}
		});
		e.preventDefault();
	});
	/* End of Registration */
	
});