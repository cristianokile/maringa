<?php
$search = get_search_query(); 
$palavras = explode(' ', get_search_query());

function seofriendly($string){
    $string = str_replace(array('[\', \']'), '', $string);
    $string = preg_replace('/\[.*\]/U', '', $string);
    $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
    $string = htmlentities($string, ENT_COMPAT, 'utf-8');
    $string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string );
    $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $string);
    return strtolower(trim($string, '-'));
};

$receive = seofriendly($search);
$palavras[] = $receive;

// PAGO E COM DESTAQUE
// Loop for Search
$args1_posts = array(
    "post_type" => "empresas",
    'post_status' => "publish",
    's' => $search, 
    'tax_query' => array(
        'relation' => 'OR',
        array(
            'tag_slug__in' => $palavras,
        ),
        array(
            'category__in' => $palavras,
        ),
        array(
            'post_name__in' => $palavras,
        ),  
        array(
            'name' => $palavras,
        ),
        array(
            'title' => $search,
        ),        
    ),    
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
// Loop for Category
$args1_categories = array(
    "post_type" => "empresas",
    'post_status' => "publish",
    'tax_query' => array(
        'relation' => 'OR',
        array(
            'taxonomy' => 'categoria',               
            'field' => 'name',                      
            'terms' => $search,   
        ),
        array(
            'taxonomy' => 'categoria',               
            'field' => 'slug',                      
            'terms' => $palavras,   
        ),
        array(
            'tag_slug__in' => $palavras,
        ),
        array(
            'category__in' => $palavras,
        ),
        array(
            'post_name__in' => $palavras,
        ),  
        array(
            'name' => $palavras,
        ),
        array(
            'title' => $search,
        ),        
    ),    
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
// Loop for Tag
$args1_tags = array(
    "post_type" => "empresas",
    'post_status' => "publish",
    'tag' => $palavras,
    get_query_var( 'taxonomy' ) => get_query_var( 'term' ),
    'include_children' => true,
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

// APENAS PAGO
// Loop for Search
$args2_posts = array(
    "post_type" => "empresas",
    'post_status' => "publish",
    's' => $search, 
    'tax_query' => array(
        'relation' => 'OR',
        array(
            'tag_slug__in' => $palavras,
        ),
        array(
            'category__in' => $palavras,
        ),
        array(
            'post_name__in' => $palavras,
        ),  
        array(
            'name' => $palavras,
        ),
        array(
            'title' => $search,
        ),        
    ),  
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
// Loop for Category
$args2_categories = array(
    "post_type" => "empresas",
    'post_status' => "publish",
    'tax_query' => array(
        'relation' => 'OR',
        array(
            'taxonomy' => 'categoria',               
            'field' => 'name',                      
            'terms' => $search,   
        ),
        array(
            'taxonomy' => 'categoria',               
            'field' => 'slug',                      
            'terms' => $palavras,   
        ),
        array(
            'tag_slug__in' => $palavras,
        ),
        array(
            'category__in' => $palavras,
        ),
        array(
            'post_name__in' => $palavras,
        ),  
        array(
            'name' => $palavras,
        ),
        array(
            'title' => $search,
        ),        
    ),  
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
// Loop for Tag
$args2_tags = array(
    "post_type" => "empresas",
    'post_status' => "publish",
    'tag' => $palavras,
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

// GRATUITO
// Loop for Search
$args3_posts = array(
    "post_type" => "empresas",
    'post_status' => "publish",
    's' => $search,
    'tax_query' => array(
        'relation' => 'OR',
        array(
            'tag_slug__in' => $palavras,
        ),
        array(
            'category__in' => $palavras,
        ),
        array(
            'post_name__in' => $palavras,
        ),  
        array(
            'name' => $palavras,
        ),
        array(
            'title' => $search,
        ),        
    ),  
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
// Loop for Category
$args3_categories = array(
    "post_type" => "empresas",
    'post_status' => "publish",
    //'s' => $search,
    'tax_query' => array(
        'relation' => 'OR',
        array(
            'taxonomy' => 'categoria',               
            'field' => 'name',                      
            'terms' => $search,   
        ),
        array(
            'taxonomy' => 'categoria',               
            'field' => 'slug',                      
            'terms' => $palavras,   
        ),
        array(
            'tag_slug__in' => $palavras,
        ),
        array(
            'category__in' => $palavras,
        ),
        array(
            'post_name__in' => $palavras,
        ),  
        array(
            'name' => $palavras,
        ),
        array(
            'title' => $search,
        ),        
    ),  
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
// Loop for Tag
$args3_tags = array(
    "post_type" => "empresas",
    'post_status' => "publish",
    'tag' => $palavras,
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

// RUN SEARCH

if ($search == "") {
    echo do_shortcode('[elementor-template id="2510"]'); 
    echo "<style>
        .nav-previous{display:none}
    </style>"; 
}else{
    // The Query
    $no_results1 = $no_results2 = $no_results3 = false;
    $loop1 = new WP_Query( $args1_posts );
    $loop2 = new WP_Query( $args1_categories );
    $loop3 = new WP_Query( $args1_tags );

    if ( $loop1->have_posts() ) {
        while ( $loop1->have_posts() ) {
            $loop1->the_post();
            echo do_shortcode('[elementor-template id="1008"]'); 
        }
    }elseif ( $loop2->have_posts() ) {
        while ( $loop2->have_posts() ) {
            $loop2->the_post();
            echo do_shortcode('[elementor-template id="1008"]'); 
        }
    }elseif ( $loop3->have_posts() ) {
        while ( $loop3->have_posts() ) {
            $loop3->the_post();
            echo do_shortcode('[elementor-template id="1008"]'); 
        }
    }else{
        $no_results1 = true;
    }
    wp_reset_postdata();

    $loop1 = new WP_Query( $args2_posts );
    $loop2 = new WP_Query( $args2_categories );
    $loop3 = new WP_Query( $args2_tags );
    if ( $loop1->have_posts() ) {
        while ( $loop1->have_posts() ) {
            $loop1->the_post();
            echo do_shortcode('[elementor-template id="785"]'); 
        }
    }elseif ( $loop2->have_posts() ) {
        while ( $loop2->have_posts() ) {
            $loop2->the_post();
            echo do_shortcode('[elementor-template id="785"]'); 
            }
    }elseif ( $loop3->have_posts() ) {
        while ( $loop3->have_posts() ) {
            $loop3->the_post();
            echo do_shortcode('[elementor-template id="785"]'); 
        }
    }else{
        $no_results2 = true;
    }
    wp_reset_postdata();

    $loop1 = new WP_Query( $args3_posts );
    $loop2 = new WP_Query( $args3_categories );
    $loop3 = new WP_Query( $args3_tags );
    if ( $loop1->have_posts() ) {
        while ( $loop1->have_posts() ) {
            $loop1->the_post();
            echo do_shortcode('[elementor-template id="1421"]');
        }
    }elseif ( $loop2->have_posts() ) {
        while ( $loop2->have_posts() ) {
            $loop2->the_post();
                echo do_shortcode('[elementor-template id="1421"]');
            }
    }elseif ( $loop3->have_posts() ) {
        while ( $loop3->have_posts() ) {
            $loop3->the_post();
                echo do_shortcode('[elementor-template id="1421"]');
            }
    }else{
        $no_results3 = true;
    }
    wp_reset_postdata();
        
    if ( $no_results1 && $no_results2 && $no_results3 ) : 
        echo do_shortcode('[elementor-template id="1294"]'); 
    endif;
}


