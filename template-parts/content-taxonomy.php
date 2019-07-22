<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php if (is_tag()) {
			get_template_part( 'inc/queries-taxonomy-tags' );
		}else{ 
			get_template_part( 'inc/queries-taxonomy' ); 
		}?>
		 <style>
        	div#content-inside{ margin-bottom: 15px!important;}
        </style>
	</div>
</article>
