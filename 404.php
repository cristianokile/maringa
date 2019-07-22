<?php get_header(); ?>
	<div class="header-principal">
		<?php $tipo = get_field("tipo_de_anuncio");
		if (($tipo == "Pago") || ($tipo == "Gratuito") ) {
			echo do_shortcode('[elementor-template id="1497"]'); 
		}else{ ?>
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'temzap' ); ?></h1>
			</header>
		<?php }?>
	</div>	
</header>
	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'temzap' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</section>
		</main>
	</section>
<?php get_footer();?>
