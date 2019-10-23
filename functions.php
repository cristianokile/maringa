<?php
if ( ! function_exists( 'temzap_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function temzap_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Temzap , use a find and replace
	 * to change 'temzap' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'temzap', get_template_directory() . '/languages' );
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
    add_image_size( 'TemZAP-logos', 300, 300, true );
    add_image_size( 'TemZAP-card-imagens', 640, 310, true );
    add_image_size( 'TemZAP-capa-perfil', 851, 310, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'temzap' ),
	) );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 
        'html5', 
        array(
    		'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
	) );

     // Habilita formatos de posts
        add_theme_support( 'post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'audio',
            'empresas',
        ) );

    /*
     * WooCommerce support.
     */
    add_theme_support( 'woocommerce' );

    /**
     * Add theme Support custom logo
     *
     * @since WP 4.5
     * @sin 1.2.1
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 36,
            'width'       => 160,
            'flex-height' => true,
            'flex-width'  => true,
        // 'header-text' => array( 'site-title',  'site-description' ), //
        )
    );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'temzap_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'temzap_setup' );

// Add support for WooCommerce.
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function temzap_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'temzap_content_width', 1170 );
}
add_action( 'after_setup_theme', 'temzap_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function temzap_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar Global - Site Todo', 'temzap' ),
        'id'            => 'sidebar-global',
        'description'   => esc_html__( 'Adicione Widgets Aqui.', 'temzap' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar Páginas Resultados', 'temzap' ),
        'id'            => 'sidebar-resultados',
        'description'   => esc_html__( 'Adicione Widgets Aqui.', 'temzap' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar Páginas Gerais', 'temzap' ),
        'id'            => 'sidebar-paginas-gerais',
        'description'   => esc_html__( 'Adicione Widgets Aqui.', 'temzap' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar Perfis Pagos', 'temzap' ),
        'id'            => 'sidebar-perfis-pagos',
        'description'   => esc_html__( 'Adicione Widgets Aqui.', 'temzap' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar Perfis Destaques', 'temzap' ),
        'id'            => 'sidebar-perfis-destaques',
        'description'   => esc_html__( 'Adicione Widgets Aqui.', 'temzap' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar Perfis Grátis', 'temzap' ),
        'id'            => 'sidebar-perfis-gratis',
        'description'   => esc_html__( 'Adicione Widgets Aqui.', 'temzap' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Section Ads Footer', 'temzap' ),
        'id'            => 'section-ads-footer',
        'description'   => esc_html__( 'Use apenas ARTES RETANGULARES!', 'temzap' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'temzap_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function temzap_scripts() {
    $theme = wp_get_theme( 'TemZAP' );
    $version = $theme->get( 'Version' );
	// load bootstrap css
	wp_enqueue_style( 'temzap-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );
    // fontawesome cdn
    wp_enqueue_style( 'temzap-pro-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css' );
	// load bootstrap css
	// load AItheme styles
	// load Temzap  styles
	wp_enqueue_style( 'temzap-style', get_stylesheet_uri() );
    if(get_theme_mod( 'theme_option_setting' ) && get_theme_mod( 'theme_option_setting' ) !== 'default') {
        wp_enqueue_style( 'temzap-'.get_theme_mod( 'theme_option_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/theme-option/'.get_theme_mod( 'theme_option_setting' ).'.css', false, '' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-merriweather') {
        wp_enqueue_style( 'temzap-montserrat-merriweather-font', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700,900|Montserrat:300,400,400i,500,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-opensans') {
        wp_enqueue_style( 'temzap-montserrat-opensans-font', 'https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) && get_theme_mod( 'preset_style_setting' ) !== 'default') {
        wp_enqueue_style( 'temzap-'.get_theme_mod( 'preset_style_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/typography/'.get_theme_mod( 'preset_style_setting' ).'.css', false, '' );
    }
	wp_enqueue_script('jquery');
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/inc/assets/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );
    wp_enqueue_script('temzap-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true );
	wp_enqueue_script('temzap-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script('temzap-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true );
	wp_enqueue_script( 'temzap-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true );
    wp_enqueue_script( 'jquery-mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js', array(), '1.14.15' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    wp_enqueue_script( 'temzap-js-custom', get_template_directory_uri() . '/inc/assets/js/custom.js', array(), $version, true );
}
add_action( 'wp_enqueue_scripts', 'temzap_scripts' );
function temzap_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="d-block mb-3">' . __( "To view this protected post, enter the password below:", "temzap" ) . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __( "Password:", "temzap" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__( "Submit", "temzap" ) . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter( 'the_password_form', 'temzap_password_form' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Load plugin compatibility file.
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';
/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'temzap_navwalker' )) {
    require_once(get_template_directory() . '/inc/temzap_navwalker.php');
};

// Custom Shortcodes
function get_smartlinks($atts){
    $content_smartlink = include( get_template_directory() . '/inc/smartlinks/smartlinks.php' );
    return $content_smartlink;
};
add_shortcode('smartlinks','get_smartlinks');

// Custom Shortcodes
function get_thecontent($atts){
    $content = apply_filters( 'the_content', get_the_content(), get_the_ID() );
    return $content;
};
add_shortcode('getthecontent','get_thecontent');

// Custom Shortcodes
function get_count_posts(){
    global $wp_query; 
    $countposts = "Foram encontrados:";
    if ( is_search() || is_tag() ){
        // Include Title
        if ( is_search() ){
            require_once(get_template_directory() . '/inc/queries-taxonomy-header-title-search.php');
        }elseif( is_tag() ){
            require_once(get_template_directory() . '/inc/queries-taxonomy-header-title-tags.php');
        }else{

        };
        // Contador
        $qtde = $wp_query->found_posts;
        if ($contador1 == 0) {
            //$countposts = "Nenhum resultado encontrado!";
        }elseif($contador1 == 1) {
            //$countposts = "Foi encontrado: <strong  style='color: #7a7a7a'> 1 resultado</strong>";
        }else{
            //$countposts = "Foram encontrados: <strong style='color: #7a7a7a'>" . $qtde . " resultados</strong>";
        };?>
        <script>
            jQuery("section.wrap-first h2.elementor-heading-title").each(function() {
                var text = jQuery(this).text();
                text = text.replace("Search Results for: ", "");
                jQuery(this).text(text);
            });
        </script>
        <style>
            section.wrap-first h2.elementor-heading-title{text-transform: capitalize;}
        </style>
        <?php 
    }else{
        $qtde = $wp_query->found_posts;
        if ($qtde == 0) {
            //$countposts = "Nenhum resultado encontrado!";
        } elseif($qtde == 1) {
            //$countposts = "Foi encontrado: <strong  style='color: #7a7a7a'>" . $qtde . " resultado</strong>";
        }else{
            //$countposts = "Foram encontrados: <strong style='color: #7a7a7a'>" . $qtde . " resultados</strong>";
        }    
    }    
    return $countposts;
}; 
add_shortcode('count_posts','get_count_posts');

function string_limit_words($string, $word_limit){
    $words = explode(' ', $string, ($word_limit + 1));
    if(count($words) > $word_limit)
        array_pop($words);
    return implode(' ', $words);
};
add_shortcode('corta_palavras','get_corta_palavras');

function get_btn_call_wpp($atts){
    $btn_call_wpp = include( get_template_directory() . '/inc/btn-call-wpp.php' );
    return $btn_call_wpp;
}
add_shortcode('btn_call_wpp','get_btn_call_wpp');

function formatadados($param1,$param2){
    $info = $param1;
    $dado = $param2;

    switch ($info){
        case "tel1":
            $arr = array('(',')','-',''); 
            $word = $dado;
            $resultado = str_replace($arr,"",$word);
        break;
        case "email":
            $resultado = $dado;
        break;
        case "end":
            $resultado = $dado;
        break;
        case "insta":
            $arr = array('http://','https://','www.','instagram.com/'); 
            $word = $dado;
            $resultado = str_replace($arr,"",$word);
        break;
        case "face":
            $arr = array('http://','https://','www.','fb.com/','facebook.com/'); 
            $word = $dado;
            $resultado = str_replace($arr,"",$word);
        break;
        case "youtube":
            $arr = array('http://','https://','www.','youtube.com/'); 
            $word = $dado;
            $resultado = str_replace($arr,"",$word);
        break;
        case "site":
            $arr = array('http://','https://','www.'); 
            $word = $dado;
            $resultado = str_replace($arr,"",$word);
        break;
        case "wpp":
            $arr = ""; 
            $word = preg_replace('/[^0-9]/', '', $dado );
            $resultado = str_replace($arr,"",$word);
        break;
        default:
            $resultado = "Nenhum";
        break;
    }
    return $resultado; 
};?>