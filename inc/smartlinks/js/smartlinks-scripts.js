	jQuery( ".btn-link" ).each(function(){
		jQuery(this).click(function() {
			jQuery('.descript').hide('fast');
			var rel = jQuery(this).attr('rel');
			if(jQuery('.description'+rel).is(":visible")){
				jQuery('.description'+rel).hide('fast');
			} else {
				jQuery('.description'+rel).show('fast');
			}
		});
	});
	jQuery( ".btn-link-mobile" ).each(function(){
		jQuery(this).click(function() {
			jQuery('.descript-mobile').slideUp('fast');
			var rel = jQuery(this).attr('rel');
			if(jQuery('.description'+rel).is(":visible")){
				jQuery('.description'+rel).slideUp('fast');
			} else {
				jQuery('.description'+rel).slideDown('fast');
			}
		});
	});
