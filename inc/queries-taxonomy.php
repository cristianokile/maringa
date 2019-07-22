<!-- NEW LOOP -->
<?php 
$category = get_query_var( 'term' );
$args1 = array(
	'post_type' => 'empresas',
	get_query_var( 'taxonomy' ) => get_query_var( 'term' ),
    'meta_query' => array(
        'relation' => 'AND',
       	array(
            'key' => 'tipo_de_anuncio',
            'value' => 'Pago',
            'compare' => '=',
            'terms' => $category,
        ),
        array(
            'key' => 'anuncio_destaque',
            'value' => 'Sim',
            'compare' => '=',
            'terms' => $category,
        ),
    ),
);

$args2 = array(
	'post_type' => 'empresas',
	get_query_var( 'taxonomy' ) => get_query_var( 'term' ),
    'meta_query' => array(
        'relation' => 'AND',
       	array(
            'key' => 'tipo_de_anuncio',
            'value' => 'Pago',
            'compare' => '=',
            'terms' => $category,
        ),
        array(
            'key' => 'anuncio_destaque',
            'value' => 'Sim',
            'compare' => '!=',
            'terms' => $category,
        ),
    ),
);

$args3 = array(
	'post_type' => 'empresas',
	get_query_var( 'taxonomy' ) => get_query_var( 'term' ),
    'meta_query' => array(
        'relation' => 'AND',
       	array(
            'key' => 'tipo_de_anuncio',
            'value' => 'Pago',
            'compare' => '!=',
            'terms' => $category,
        ),
        array(
            'key' => 'anuncio_destaque',
            'value' => 'Sim',
            'compare' => '!=',
            'terms' => $category,
        ),
    ),
);

// The Query
$loop1 = new WP_Query( $args1 );
if ( $loop1->have_posts() ) {
	while ( $loop1->have_posts() ) {
		$loop1->the_post();
		echo do_shortcode('[elementor-template id="1008"]'); 
	}
}
wp_reset_postdata();

$loop2 = new WP_Query( $args2 );
if ( $loop2->have_posts() ) {
	while ( $loop2->have_posts() ) {
		$loop2->the_post();
		echo do_shortcode('[elementor-template id="785"]');	
	}
}
wp_reset_postdata();

$loop3 = new WP_Query( $args3 );
if ( $loop3->have_posts() ) {
	while ( $loop3->have_posts() ) {
		$loop3->the_post();
		echo do_shortcode('[elementor-template id="1421"]');						
	}
}
wp_reset_postdata();

if (!(have_posts()) ) : 
	echo do_shortcode('[elementor-template id="1294"]'); 
endif;?>
<!-- /NEW LOOP -->