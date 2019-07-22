<?php get_header(); ?>
	<div class="header-principal">
		<?php $tipo = get_field("tipo_de_anuncio");
		if (($tipo == "Pago") || ($tipo == "Gratuito") ) {
			echo do_shortcode('[elementor-template id="1497"]'); 
		}?>
	</div>
</header>
<section id="primary">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'front-page' );
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
		endwhile;?>
	</main>
</section>
<?php get_footer(); ?>
