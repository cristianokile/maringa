<!-- BUTTON CALL WHATSAPP -->
<?php 
	$value = get_field( "tipo_de_anuncio" );
	$wpp = get_field( "whatsapp" );
	if( get_field('whatsapp') ){ ?>
		<?php $short = formatadados("wpp" , $wpp); ?>
		<?php $short_ddd = substr($short, 0, 2); ?>
		<?php $short_prim_numeros = substr($short, 2, 5); ?> 
		<?php $short_secu_numeros = substr($short, 7, 8); ?> 
		<?php $link = "https://wa.me/55".$short."?text=Olá.%20Vi%20seu%20anúncio%20pelo%20Temzap!";?>
		<a class="btn-call-wpp" data-hover="Conversar agora!" href="<?php echo $link;?>" target="_blank">
			<div><i class="fab fa-whatsapp"></i> <?php echo "(".$short_ddd.") " . $short_prim_numeros . "-" . $short_secu_numeros; ?></div>
		</a>	
<?php } ?>