<?php get_header(); ?>
	<div class="header-principal">
		<?php $tipo = get_field("tipo_de_anuncio");
		if (($tipo == "Pago") || ($tipo == "Gratuito") ) {
			echo do_shortcode('[elementor-template id="1497"]'); 
		}?>
	</div>
</header>
<section id="primary" class="container">
	<main id="main" class="site-main content-area" role="main">
		<div class="col col no-padding">
			<div class="row">
				<?php if ( 
			        is_active_sidebar( 'sidebar-global' ) ||
			        is_active_sidebar( 'sidebar-resultados' ) ||
			        is_active_sidebar( 'sidebar-paginas-gerais' ) ||
			        is_active_sidebar( 'sidebar-perfis-pagos' ) || 
			        is_active_sidebar( 'sidebar-perfis-destaques' ) || 
			        is_active_sidebar( 'sidebar-perfis-gratis' ) 
			    ){?>
				<div class="col col-sm-12 col-md-9 col-lg-9 col-xl-9">
				<?php } else { ?>
				<div class="col">
				<?php }
					if ( have_posts() ) { ?>
						<?php while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_format() );?>
						<?php endwhile; ?>
						<div class="col-12">
			        		<div class="sidebar-wrapper sidebar-archive row">
			            		<?php get_template_part( 'template-parts/content', "ads-widget-area" ); ?>
			            	</div>
			            </div>
						<?php the_posts_navigation();
					}else{
						get_template_part( 'template-parts/content', 'none' );?>
						<div class="col-12">
				    		<div class="sidebar-wrapper sidebar-archive row">
				        		<?php get_template_part( 'template-parts/content', "ads-widget-area" ); ?>
				        	</div>
				        </div>
					<?php }; ?>
					<div class="col-3 hidden-xs" style="padding-top: 10px;">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>				
	</main>
</section>
<?php get_footer();?>
