<article id="post-<?php the_ID(); ?>" <?php post_class('col'); ?>>
	<div class="entry-content">
		<div id="content-inside">
			<?php the_content(); 
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'temzap' ),
				'after'  => '</div>',
			));
			?>
		</div>
	</div>
	<footer class="entry-footer">
		<?php temzap_entry_footer(); ?>
	</footer>
</article>
