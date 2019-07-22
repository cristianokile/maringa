<!-- NEW LOOP -->
<?php 

$category = single_tag_title( "", false );

$string = str_replace(array('[\', \']'), '', $category);
$string = preg_replace('/\[.*\]/U', '', $string);
$string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
$string = htmlentities($string, ENT_COMPAT, 'utf-8');
$string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string );
$string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $string);
$seofriendly = strtolower(trim($string, '-'));

$category = $seofriendly;

$args1 = array(
    'post_type' => 'empresas',
    'tag' => $category,
    get_query_var( 'taxonomy' ) => get_query_var( 'term' ),
    'meta_query' => array(
        'relation' => 'AND',
        array(
            'key' => 'tipo_de_anuncio',
            'value' => 'Pago',
            'compare' => '=',
        ),
        array(
            'key' => 'anuncio_destaque',
            'value' => 'Sim',
            'compare' => '=',
        ),
    ),
);

$args2 = array(
    'post_type' => 'empresas',
    'tag' => $category,
    get_query_var( 'taxonomy' ) => get_query_var( 'term' ),
    'meta_query' => array(
        'relation' => 'AND',
        array(
            'key' => 'tipo_de_anuncio',
            'value' => 'Pago',
            'compare' => '=',
        ),
        array(
            'key' => 'anuncio_destaque',
            'value' => 'Sim',
            'compare' => '!=',
        ),
    ),
);

$args3 = array(
    'post_type' => 'empresas',
    'tag' => $category,
    get_query_var( 'taxonomy' ) => get_query_var( 'term' ),
    'meta_query' => array(
        'relation' => 'AND',
        array(
            'key' => 'tipo_de_anuncio',
            'value' => 'Pago',
            'compare' => '!=',
        ),
        array(
            'key' => 'anuncio_destaque',
            'value' => 'Sim',
            'compare' => '!=',
        ),
    ),
);

// The Query
$no_results1 = $no_results2 = $no_results3 = false;
$loop1 = new WP_Query( $args1 );
$contador1 = 0;

if ( $loop1->have_posts() ) {
    while ( $loop1->have_posts() ) {
        $loop1->the_post();
        $contador1++;
    }
}else{
    $no_results1 = true;
}
wp_reset_postdata();

$loop2 = new WP_Query( $args2 );
if ( $loop2->have_posts() ) {
    while ( $loop2->have_posts() ) {
        $loop2->the_post();
        $contador1++;
    }
}else{
    $no_results2 = true;
}
wp_reset_postdata();

$loop3 = new WP_Query( $args3 );
if ( $loop3->have_posts() ) {
    while ( $loop3->have_posts() ) {
        $loop3->the_post();
        $contador1++;
    }
}else{
    $no_results3 = true;
}
wp_reset_postdata();

if ( $no_results1 && $no_results2 && $no_results3 ) : 
    $contador1 = 0;
endif;?>
<!-- /NEW LOOP -->