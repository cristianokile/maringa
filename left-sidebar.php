<?php
/**
* Template Name: Página com Sidebar Esquerda
 */
get_header(); ?>
    <div class="header-principal">
        <?php $tipo = get_field("tipo_de_anuncio");
        if (($tipo == "Pago") || ($tipo == "Gratuito") ) {
            echo do_shortcode('[elementor-template id="1497"]'); 
        }else{
            echo do_shortcode('[elementor-template id="2202"]');
        }?>
    </div>
</header>
<section id="primary" class="container">
    <main id="main" class="site-main content-area" role="main">
        <div class="col col no-padding">
            <div class="row">
                <?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
                    <div class="col-3 hidden-xs" style="padding-top: 10px;">
                        <div class="sidebar-wrapper sidebar-archive row">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                <?php } ?>
                <?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
                    <div class="col col-sm-12 col-md-9 col-lg-9 col-xl-9">
                <?php } else { ?>
                    <div class="col">
                <?php } 
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', 'page' );
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    endwhile;?>
                    </div>    
            </div>
        </div>
    </main>
</section>
<?php get_footer();?>
