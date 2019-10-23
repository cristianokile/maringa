<?php get_header(); ?>
	<div class="header-principal">
		<?php $tipo = get_field("tipo_de_anuncio");
		if (($tipo == "Pago") || ($tipo == "Gratuito") ) {
			echo do_shortcode('[elementor-template id="1497"]'); 
		}else{
			echo do_shortcode('[elementor-template id="2202"]');
		}?>
	</div>
</header>
<section id="primary" class="container">
	<main id="main" class="site-main content-area" role="main">
		<div class="col col no-padding">
			<div class="row">
				<div class="col">
					<?php echo do_shortcode('[elementor-template id="2796"]') ?>
				</div>
            </div>
        </div>
	</main>
</section>
<?php get_footer();?>
