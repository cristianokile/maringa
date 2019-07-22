<!-- SE FOR PÁGINAS GERAIS -->
<?php if ( is_active_sidebar( 'sidebar-global' ) ) : ?>
	<div class="hidden-xs">
		<div class="sidebar-wrapper sidebar-archive row">
			<aside id="secondary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-global' ); ?>
			</aside>
		</div>
	</div>
<?php endif; ?>	

<!-- SE FOR PÁGINA DE BUSCAS -->
<?php if ( is_search() || is_tax() || is_tag() ) { ?>
	<?php if ( is_active_sidebar( 'sidebar-resultados' ) ) : ?>
		<div class="hidden-xs">
			<div class="sidebar-wrapper sidebar-archive row">
				<aside id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-resultados' ); ?>
				</aside>
			</div>
		</div>
	<?php endif; ?>	
<?php }?>

<!-- SE FOR PÁGINAS GERAIS -->
<?php if ( is_page() ) { ?>
	<?php if ( is_active_sidebar( 'sidebar-paginas-gerais' ) ) : ?>
		<div class="hidden-xs">
			<div class="sidebar-wrapper sidebar-archive row">
				<aside id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-paginas-gerais' ); ?>
				</aside>
			</div>
		</div>
	<?php endif; ?>	
<?php }?>

<!-- SE FOR POST, TAXONOMIA OU PÁGINA DE TAGS -->
<?php if ( is_single() ) { ?>
	<?php $tipo = get_field("tipo_de_anuncio");
	if ( $tipo == "Pago" ) { ?>
		<?php if ( is_active_sidebar( 'sidebar-perfis-pagos' ) ) : ?>
			<div class="hidden-xs">
				<div class="sidebar-wrapper sidebar-archive row">
					<aside id="secondary" class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'sidebar-perfis-pagos' ); ?>
					</aside>
				</div>
			</div>
		<?php endif; ?>
	<?php }?>
	
	<?php $tipo = get_field("tipo_de_anuncio"); ?>
	<?php $destaque = get_field("anuncio_destaque");
	if ( $tipo == "Pago" && $destaque == "Sim" ) { ?>
		<?php if ( is_active_sidebar( 'sidebar-perfis-destaques' ) ) : ?>
			<div class="hidden-xs">
				<div class="sidebar-wrapper sidebar-archive row">
					<aside id="secondary" class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'sidebar-perfis-destaques' ); ?>
					</aside>
				</div>
			</div>
		<?php endif; ?>		
	<?php }?>	

	<?php $tipo = get_field("tipo_de_anuncio"); ?>
	<?php if ( $tipo == "Gratuito" ) {?>
		<?php if ( is_active_sidebar( 'sidebar-perfis-gratis' ) ) : ?>
			<div class="hidden-xs">
				<div class="sidebar-wrapper sidebar-archive row">
					<aside id="secondary" class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'sidebar-perfis-gratis' ); ?>
					</aside>
				</div>
			</div>
		<?php endif; ?>	
	<?php }?>

<?php }?>
