<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col no-padding">
				<?php $tipo = get_field("tipo_de_anuncio");
				if (($tipo == "Pago") || ($tipo == "Gratuito") ) {
					echo do_shortcode('[elementor-template id="1497"]'); 
				}else
					if ( is_home() && ! is_front_page() ) : ?>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					<?php endif; 
				}?>
			</div>
		</div>
	</div>
</header>
<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-8">
	<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>
	</main>
</section>
<?php get_footer(); ?>
