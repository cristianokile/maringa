<article id="content">
	<!-- CONTENT -->
	<?php $tipo = get_field("tipo_de_anuncio");
	if ($tipo == "Pago") {
		echo do_shortcode('[elementor-template id="1544"]');
	}else{
		echo do_shortcode('[elementor-template id="1610"]');
	}?>
    <style>
    	div#content-inside{margin-bottom: 15px!important;}
    </style>
</article>




