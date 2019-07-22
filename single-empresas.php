<?php get_header(); ?>
	<div class="header-principal">
		<?php $tipo = get_field("tipo_de_anuncio");
		$destaque = get_field("anuncio_destaque");
		if (($tipo == "Pago") || ($tipo == "Gratuito") ) {
			echo do_shortcode('[elementor-template id="1497"]'); 
		}?>
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
				<?php } 
					get_template_part( 'template-parts/content', "perfis" ); ?>
					<div class="col-12 hidden-xs">
		        		<div class="sidebar-wrapper sidebar-archive row">
		            		<?php get_template_part( 'template-parts/content', "ads-widget-area" ); ?>
		            	</div>
		            </div>
					<?php the_posts_navigation();?>
				</div>
				<?php if ( 
			        is_active_sidebar( 'sidebar-global' ) ||
			        is_active_sidebar( 'sidebar-resultados' ) ||
			        is_active_sidebar( 'sidebar-paginas-gerais' ) ||
			        is_active_sidebar( 'sidebar-perfis-pagos' ) || 
			        is_active_sidebar( 'sidebar-perfis-destaques' ) || 
			        is_active_sidebar( 'sidebar-perfis-gratis' ) 
			    ){?>
			    	<div class="col-3 hidden-xs">
		        		<div class="sidebar-wrapper sidebar-archive row">
		        			<?php if (($tipo == "Pago") || ($tipo == "Sim") ) {
								echo do_shortcode('[elementor-template id="1508"]');
							}elseif (($tipo == "Pago") || ($tipo == "Não") ) {
								echo do_shortcode('[elementor-template id="1508"]');
							}?>	            	
		            	</div>
		            	<?php get_sidebar(); ?>
	            	</div>
	            <?php } ?>	            
	        </div>
        </div>
	</main>
</section>
<?php get_footer(); ?>