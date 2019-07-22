<nav class="navbar navbar-expand-xl p-0">
    <div class="navbar-brand">
        <?php if ( get_theme_mod( 'temzap_logo' ) ): ?>
            <a href="<?php echo esc_url( home_url( '/' )); ?>">
                <img src="<?php echo esc_attr(get_theme_mod( 'temzap_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
            </a>
        <?php else : ?>
            <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
        <?php endif; ?>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php
    wp_nav_menu(array(
        'theme_location'    => 'primary',
        'container'       => 'div',
        'container_id'    => 'main-nav',
        'container_class' => 'collapse navbar-collapse justify-content-end',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav',
        'depth'           => 3,
        'fallback_cb'     => 'temzap_navwalker::fallback',
        'walker'          => new temzap_navwalker()
    ));?>
</nav>