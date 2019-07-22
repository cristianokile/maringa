<?php
/**
* Template Name: Post Padrão
 * Template Post Type: post
 */
 get_header(); ?>
	<div class="header-principal">
		<?php echo do_shortcode('[elementor-template id="2202"]');?>
	</div>
</header>
<section id="primary" class="container" style="min-height: 280px">
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
				<div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
				<?php } else { ?>
				<div class="col">
				<?php } ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-content">
							<div id="content-inside">	
								<?php echo do_shortcode('[elementor-template id="2196"]'); ?>
							</div>
						</div>
						<div class="col-12 hidden-xs">
			        		<div class="sidebar-wrapper sidebar-archive row">
			            		<?php get_template_part( 'template-parts/content', "ads-widget-area" ); ?>
			            	</div>
		            	</div>
					</article>
				</div>
				<div class="col-3 hidden-xs" style="padding-top: 10px;">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</main>
</section>
<?php get_footer(); ?>
