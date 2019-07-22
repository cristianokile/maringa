<?php get_header(); ?>
	<div class="header-principal">
		<?php echo do_shortcode('[elementor-template id="1283"]');?>
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
				<div class="col col-sm-12 col-md-9 col-lg-9 col-xl-9">
				<?php } else { ?>
				<div class="col">
				<?php }
					get_template_part( 'template-parts/content', "taxonomy" ); ?>
					<div class="col-12 hidden-xs">
		        		<div class="sidebar-wrapper sidebar-archive row">
		            		<?php get_template_part( 'template-parts/content', "ads-widget-area" ); ?>
		            	</div>
		            </div>
		        	<?php the_posts_navigation();?>
				</div>
				<div class="col-3 hidden-xs" style="padding-top: 10px;">
		        	<?php get_sidebar(); ?>
		        </div>
            </div>
        </div>
	</main>
</section>

<?php /*
	$tax = 'categoria';
	$terms = get_terms( $tax, $args = array(
	'hide_empty' => false,
	'hide_empty' => false,
	'hide_title_if_empty' => false,
	));

	foreach( $terms as $term ) {
		$term_link = get_term_link( $term );
		if( $term->count > 0 ){
			echo '<a href="' . esc_url( $term_link ) . '">' . $term->name .'</a><br>';
		}elseif( $term->count !== 0 ){
			echo '' . $term->name .'';
		}
	} */?>

<?php get_footer();?>
