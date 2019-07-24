/*  ---------------------  */
/*     SCRIPTS DEKMÍDIA    */
/*  ---------------------  */

// Muda o visual do menu quando scrolla
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
		if(window.screen.width > 640 ) {
	        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
	            // document.getElementById("navbar").style.padding = "30px 10px";
	            // document.getElementById("logo").style.fontSize = "25px";
	            document.getElementById("logo-header").style.width = "80px";
	            document.getElementById("logo-header").style.maxWidth = "80px";
	            document.getElementById("logo-header").style.top = "0px";
	            document.getElementById("logo-header").style.left = "0px";
	            document.getElementById("logo-header").classList.add("margintop-0");
	        } else {
	            // document.getElementById("navbar").style.padding = "80px 10px";
	            // document.getElementById("logo").style.fontSize = "35px";
	            document.getElementById("logo-header").style.width = "127px";
	            document.getElementById("logo-header").style.maxWidth = "127px";
	            document.getElementById("logo-header").style.top = "-1px";
	            document.getElementById("logo-header").style.left = "0px";
	            document.getElementById("logo-header").classList.remove("margintop-0");
	        }
	    }
    }

// Script para o Smartlink
    jQuery(document).ready(function($){
        jQuery(document).ready(function($){
            jQuery( ".btn-link" ).each(function(){
                jQuery(this).click(function() {
                    jQuery('.descript').hide('fast');
                    var rel = jQuery(this).attr('rel');
                    if(jQuery('.description'+rel).is(":visible")){
                        jQuery('.description'+rel).hide('fast');
                        jQuery('.btn-link').removeClass( "ativo" );
                    } else {
                        jQuery('.description'+rel).show('fast');
                        jQuery('.btn-link').addClass( "ativo" );
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
            jQuery( ".icon-categorias" ).hide();
            jQuery( ".mais-categorias-1" ).click(function() {
                jQuery( ".icon-categorias" ).show();
                jQuery( ".mais-categorias-1" ).hide();
            });
        });
    });
