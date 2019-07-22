<!-- ORIGEM DE DADOS -->
<?php $infos = [
    "tipo" 	=> get_field( "tipo_de_anuncio" ),
    "tel1" 	=> get_field( "telefone_principal" ),
    "email" => get_field("email"),
    "end" 	=> get_field("endereco"),
    "face" 	=> get_field("facebook"),
    "insta" => get_field("instagram"),
    "site" 	=> get_field("website"),
    "wpp" 	=> get_field("whatsapp"),
];?>

<!-- EXIBIÇÃO DESKTOP -->
<div class="container botoes-teste hidden-xs">
	<?php 
		$tipo = $infos['tipo'];
		$randomClass = rand();?>
		
	<?php if ($tipo == "Gratuito") { ?>
		
		<div class="anuncios anuncios-gratis">
			<?php if (($infos['tel1']) != ""): ?>
				<?php $rando1 = $randomClass++; ?>
				<?php $short = formatadados("tel1" , $infos['tel1']) ?>
				<?php $short_ddd = substr($short, 0, 2); ?>
				<?php $short_prim_numeros = substr($short, 2, 5); ?> 
				<?php $short_secu_numeros = substr($short, 7, 8); ?> 
				<div class="btn-link phone" rel="<?php echo $rando1;?>" title="<?php echo "(".$short_ddd.") " . $short_prim_numeros . "-" . $short_secu_numeros; ?>">
					<div class="icon-button">
						<i class="fas fa-phone"></i>
					</div>
					<div class="descript description<?php echo $rando1;?>"> 
						<?php echo "(".$short_ddd.") " . $short_prim_numeros . "-" . $short_secu_numeros; ?>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['email']) != ""): ?>
				<?php $rando2 = $randomClass++; ?>
				<?php $short = formatadados("email" , $infos['email']); ?>
				<div class="btn-link email" rel="<?php echo $rando2;?>" title="<?php echo $infos['email']; ?>">
					<div class="icon-button">
						<i class="far fa-envelope"></i>
					</div>
					<div class="descript description<?php echo $rando2;?>"> 
						<?php echo $short; ?>	
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['end']) != ""): ?>
				<?php $rando3 = $randomClass++; ?>
				<?php $end = formatadados("end" , $infos['end']); ?>
				<?php $short = mb_strimwidth($end, 0, 20, "...");?>
				<div class="btn-link endereco" rel="<?php echo $rando3;?>" title="<?php echo $infos['end']; ?>">
					<div class="icon-button">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div class="descript description<?php echo $rando3;?>"> 
						<?php $taxonomy = 'cidades';
						$tax_terms = get_terms($taxonomy);
						foreach ($tax_terms as $tax_term) {
							$cidade = ", " . $tax_term->name;
						}?>
						<?php echo $end . $cidade;?>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['face']) != ""): ?>
				<?php $rando4 = $randomClass++; ?>
				<?php $face = formatadados("face" , $infos['face']); ?>
				<?php $short = mb_strimwidth($face, 0, 20, "...");?>
				<div class="btn-link facebook" rel="<?php echo $rando4;?>" title="<?php echo $face;?>">	
					<div class="icon-button">
						<i class="fab fa-facebook-f"></i>
					</div>
					<div class="descript description<?php echo $rando4;?>">
						<?php echo $short; ?>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['insta']) != ""): ?>
				<?php $rando5 = $randomClass++; ?>
				<?php $short = formatadados("insta" , $infos['insta']); ?>
				<div class="btn-link instagram" rel="<?php echo $rando5;?>" title="<?php echo $infos['insta'];?>">	
					<div class="icon-button">
						<i class="fab fa-instagram"></i>
					</div>
					<div class="descript description<?php echo $rando5;?>"> 
						<?php echo $short;?>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['site']) != ""): ?>
				<?php $rando6 = $randomClass++; ?>
				<?php $short = formatadados("site" , $infos['site']); ?>
				<div class="btn-link site" rel="<?php echo $rando6;?>" title="<?php echo $infos['site']?>">	
					<div class="icon-button">
						<i class="fas fa-desktop"></i>
					</div>
					<div class="descript description<?php echo $rando6;?>"> 
						<?php echo $short; ?>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['wpp']) != ""): ?>
				<?php $rando7 = $randomClass++; ?>
				<?php $short = formatadados("wpp" , $infos['wpp']); ?>
				<?php $short_ddd = substr($short, 0, 2); ?>
				<?php $short_prim_numeros = substr($short, 2, 5); ?> 
				<?php $short_secu_numeros = substr($short, 7, 8); ?> 
				<div class="btn-link whatsapp" rel="<?php echo $rando7;?>" title="<?php echo "(".$short_ddd.") " . $short_prim_numeros . "-" . $short_secu_numeros; ?>">
					<div class="icon-button">		
						<i class="fab fa-whatsapp"></i>
					</div>
					<div class="descript description<?php echo $rando7;?>" style="display: inline-block;">
						<?php echo "(".$short_ddd.") " . $short_prim_numeros . "-" . $short_secu_numeros; ?>
					</div>
				</div>
			<?php endif ?>
		</div>

	<?php } else { ?>
		
		<div class="anuncios anuncios-pagos">
			<?php if (($infos['tel1']) != ""): ?>
				<?php $rando8 = $randomClass++; ?>
				<?php $short = formatadados("tel1" , $infos['tel1']) ?>
				<?php $short_ddd = substr($short, 0, 2); ?>
				<?php $short_prim_numeros = substr($short, 2, 5); ?> 
				<?php $short_secu_numeros = substr($short, 7, 8); ?> 
				<?php $link = "tel:55".$short_ddd.$short_prim_numeros.$short_secu_numeros;?>
				<div class="btn-link phone" rel="<?php echo $rando8;?>" title="<?php echo "(".$short_ddd.") " . $short_prim_numeros . "-" . $short_secu_numeros; ?>">
					<div class="icon-button">
						<i class="fas fa-phone"></i>
					</div>
					<div class="descript description<?php echo $rando8;?>"> 
						<?php echo "(".$short_ddd.") " . $short_prim_numeros . "-" . $short_secu_numeros; ?>
						<a href="<?php echo $link;?>" target="_blank">
							<small class="ir">Ligar</small>
						</a>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['email']) != ""): ?>
				<?php $rando9 = $randomClass++; ?>
				<?php $short = formatadados("email" , $infos['email']); ?>
				<?php $link = "mailto:".$short; ?>
				<div class="btn-link email" rel="<?php echo $rando9;?>" title="<?php echo $infos['email']; ?>">
					<div class="icon-button">
						<i class="far fa-envelope"></i>
					</div>
					<div class="descript description<?php echo $rando9;?>"> 
						<?php echo $short; ?>
						<a href="<?php echo $link;?>" target="_blank">
							<small class="ir">Escrever</small>
						</a>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['end']) != ""): ?>
				<?php $rando10 = $randomClass++; ?>
				<?php $end = formatadados("end" , $infos['end']); ?>
				<?php $short = mb_strimwidth($end, 0, 20, "...");?>
				<?php $taxonomy = 'cidades';
					$tax_terms = get_terms($taxonomy);
					foreach ($tax_terms as $tax_term) {
						$cidade = ", " . $tax_term->name;
				}?>
				<?php $link = "http://maps.google.com/?q=".$end . $cidade; ?>				
				<div class="btn-link endereco" rel="<?php echo $rando10;?>" title="<?php echo $infos['end']; ?>">
					<div class="icon-button">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div class="descript description<?php echo $rando10;?>"> 
						<?php echo $short; ?>
						<a href="<?php echo $link;?>" target="_blank">
							<small class="ir">Navegar</small>
						</a>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['face']) != ""): ?>
				<?php $rando11 = $randomClass++; ?>
				<?php $face = formatadados("face" , $infos['face']); ?>
				<?php $short = mb_strimwidth($face, 0, 20, "...");?>
				<?php $link = "https://fb.com/".$face; ?>
				<div class="btn-link facebook" rel="<?php echo $rando11;?>" title="<?php echo $infos['face']; ?>">
					<div class="icon-button">
						<i class="fab fa-facebook-f"></i>
					</div>
					<div class="descript description<?php echo $rando11;?>">
						<?php echo $short; ?>
						<a href="<?php echo $link;?>" target="_blank">
							<small class="ir">Abrir</small>
						</a> 
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['insta']) != ""): ?>
				<?php $rando12 = $randomClass++; ?>
				<?php $insta = formatadados("insta" , $infos['insta']); ?>
				<?php $short = mb_strimwidth($insta, 0, 20, "...");?>
				<?php $link = "https://instagram.com/".$insta; ?>
				<div class="btn-link instagram" rel="<?php echo $rando12;?>" title="<?php echo $infos['insta']; ?>">	
					<div class="icon-button">
						<i class="fab fa-instagram"></i>
					</div>
					<div class="descript description<?php echo $rando12;?>"> 
						<?php echo $short; ?>
						<a href="<?php echo $link;?>" target="_blank">
							<small class="ir">Abrir</small>
						</a>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['site']) != ""): ?>
				<?php $rando13 = $randomClass++; ?>
				<?php $site = formatadados("site" , $infos['site']); ?>
				<?php $short = mb_strimwidth($site, 0, 20, "...");?>
				<?php $link = $site; ?>
				<div class="btn-link site" rel="<?php echo $rando13;?>" title="<?php echo $infos['site']; ?>">
					<div class="icon-button">
						<i class="fas fa-desktop"></i>
					</div>
					<div class="descript description<?php echo $rando13;?>"> 
						<?php echo $short; ?>
						<a href="<?php echo $link;?>" target="_blank">
							<small class="ir">Abrir</small>
						</a>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['wpp']) != ""): ?>
				<?php $rando14 = $randomClass++; ?>
				<?php $short = formatadados("wpp" , $infos['wpp']); ?>
				<?php $short_ddd = substr($short, 0, 2); ?>
				<?php $short_prim_numeros = substr($short, 2, 5); ?> 
				<?php $short_secu_numeros = substr($short, 7, 8); ?> 
				<?php $link = "https://wa.me/55".$short."?text=Olá.%20Vi%20seu%20anúncio%20pelo%20Temzap!";?>
				<div class="btn-link whatsapp" rel="<?php echo $rando14;?>" title="<?php echo "(".$short_ddd.") " . $short_prim_numeros . "-" . $short_secu_numeros; ?>">
					<div class="icon-button">
						<i class="fab fa-whatsapp"></i>
					</div>
					<div class="descript description<?php echo $rando14;?>" style="display: inline-block;"> 
						<?php echo "(".$short_ddd.") " . $short_prim_numeros . "-" . $short_secu_numeros; ?>
						<a href="<?php echo $link;?>" target="_blank">
							<small class="ir">Conversar</small>
						</a>
					</div>
				</div>
			<?php endif ?>
		</div>

	<?php };?>
</div>

<!-- EXIBIÇÃO MOBILE -->

<div class="container botoes-teste botoes-teste2 hidden-sm">
	<?php $tipo = $infos['tipo'];
	if ($tipo == "Gratuito") { ?>
		<div class="anuncios anuncios-gratis anuncios-mobile">
			<?php if (($infos['tel1']) != ""): ?>
				<?php $rando15 = $randomClass++; ?>
				<?php $short_tel1 = formatadados("tel1" , $infos['tel1']) ?>
				<?php $short_ddd_tel1 = substr($short_tel1, 0, 2); ?>
				<?php $short_prim_numeros_tel1 = substr($short_tel1, 2, 5); ?> 
				<?php $short_secu_numeros_tel1 = substr($short_tel1, 7, 8); ?> 
				<?php $link = "tel:55".$short_ddd_tel1.$short_prim_numeros_tel1.$short_secu_numeros_tel1; ?>
				<div class="btn-link-mobile phone" rel="<?php echo $rando15;?>" title="<?php echo "(".$short_ddd_tel1.") " . $short_prim_numeros_tel1 . "-" . $short_secu_numeros_tel1; ?>">
					<div class="icon-button">
						<i class="fas fa-phone"></i>
					</div>
				</div>
			<?php endif; ?>
			<?php if (($infos['email']) != ""): ?>
				<?php $rando16 = $randomClass++; ?>
				<?php $email = formatadados("email" , $infos['email']); ?>
				<?php $short_email = mb_strimwidth($email, 0, 20, "...");?>
				<div class="btn-link-mobile email" rel="<?php echo $rando16;?>" title="<?php echo $infos['email'] ?>">
					<div class="icon-button">
						<i class="far fa-envelope"></i>
					</div>
				</div>
			<?php endif; ?>
			<?php if (($infos['end']) != ""): ?>
				<?php $rando17 = $randomClass++; ?>
				<?php $end = formatadados("end" , $infos['end']); ?>
				<?php $short_end = mb_strimwidth($end, 0, 20, "...");?>
				<div class="btn-link-mobile endereco" rel="<?php echo $rando17;?>" title="<?php echo $infos['end'] ?>">
					<div class="icon-button">
						<i class="fas fa-map-marker-alt"></i>
					</div>
				</div>
			<?php endif; ?>
			<?php if (($infos['face']) != ""): ?>
				<?php $rando18 = $randomClass++; ?>
				<?php $face = formatadados("face" , $infos['face']); ?>
				<?php $short_face = mb_strimwidth($face, 0, 20, "...");?>
				<div class="btn-link-mobile facebook" rel="<?php echo $rando18;?>" title="<?php echo $infos['face']; ?>">
					<div class="icon-button">
						<i class="fab fa-facebook-f"></i>
					</div>
				</div>
			<?php endif; ?>
			<?php if (($infos['insta']) != ""): ?>
				<?php $rando19 = $randomClass++; ?>
				<?php $insta = formatadados("insta" , $infos['insta']); ?>
				<?php $short_insta = mb_strimwidth($insta, 0, 20, "...");?>
				<div class="btn-link-mobile instagram" rel="<?php echo $rando19;?>" title="<?php echo $infos['insta'];?>">
					<div class="icon-button">
						<i class="fab fa-instagram"></i>
					</div>
				</div>
			<?php endif; ?>
			<?php if (($infos['site']) != ""): ?>
				<?php $rando20 = $randomClass++; ?>
				<?php $site = formatadados("site" , $infos['site']); ?>
				<?php $short_site = mb_strimwidth($site, 0, 20, "...");?>
				<div class="btn-link-mobile site" rel="<?php echo $rando20;?>" title="<?php echo $infos['site'] ?>"> 	
					<div class="icon-button">
						<i class="fas fa-desktop"></i>
					</div>
				</div>
			<?php endif; ?>
			<?php if (($infos['wpp']) != ""): ?>
				<?php $rando21 = $randomClass++; ?>
				<?php $wpp = $short = formatadados("wpp" , $infos['wpp']); ?>
				<?php $short_ddd = substr($short, 0, 2); ?>
				<?php $short_prim_numeros = substr($short, 2, 5); ?> 
				<?php $short_secu_numeros = substr($short, 7, 8); ?> 
				<div class="btn-link-mobile whatsapp" rel="<?php echo $rando21;?>" title="<?php echo "(".$short_ddd.") " . $short_prim_numeros . "-" . $short_secu_numeros; ?>">
					<div class="icon-button">
						<i class="fab fa-whatsapp"></i>
					</div>
				</div>
			<?php endif; ?>
			<div class="btn-link-mobile-footer">	
				<?php if (($infos['tel1']) != ""): ?>
					<div class="descript-mobile phone description<?php echo $rando15;?>"> 
						<?php echo "(".$short_ddd_tel1.") " . $short_prim_numeros_tel1 . "-" . $short_secu_numeros_tel1; ?>
					</div>
				<?php endif; ?>
				<?php if (($infos['email']) != ""): ?>
					<div class="descript-mobile email description<?php echo $rando16;?>"> 
						<?php echo $short_email; ?>
					</div>
				<?php endif; ?>
				<?php if (($infos['end']) != ""): ?>
					<div class="descript-mobile endereco description<?php echo $rando17;?>"> 
						<?php echo $short_end; ?>
					</div>
				<?php endif; ?>
				<?php if (($infos['face']) != ""): ?>
					<div class="descript-mobile facebook description<?php echo $rando18;?>">
						<?php echo "facebook.com/".$short_face; ?>
					</div>
				<?php endif; ?>
				<?php if (($infos['insta']) != ""): ?>
					<div class="descript-mobile instagram description<?php echo $rando19;?>"> 
						<?php echo "instagram.com/".$short_insta; ?>
					</div>
				<?php endif; ?>
				<?php if (($infos['site']) != ""): ?>
					<div class="descript-mobile site description<?php echo $rando20;?>"> 
						<?php echo $short_site; ?>
					</div>
				<?php endif; ?>
				<?php if (($infos['wpp']) != ""): ?>
					<div class="descript-mobile whatsapp description<?php echo $rando21;?>" style="display: block;"> 
						<?php echo "(".$short_ddd.") " . $short_prim_numeros . "-" . $short_secu_numeros; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php } else { ?>
		<div class="anuncios anuncios-pagos anuncios-mobile">
			<?php if (($infos['tel1']) != ""): ?>
				<?php $rando22 = $randomClass++; ?>
				<?php $short_tel1 = formatadados("tel1" , $infos['tel1']) ?>
				<?php $short_ddd_tel1 = substr($short_tel1, 0, 2); ?>
				<?php $short_prim_numeros_tel1 = substr($short_tel1, 2, 5); ?> 
				<?php $short_secu_numeros_tel1 = substr($short_tel1, 7, 8); ?> 
				<?php $link_tel1 = "tel:55".$short_ddd_tel1.$short_prim_numeros_tel1.$short_secu_numeros_tel1; ?>
				<div class="btn-link-mobile phone" rel="<?php echo $rando22;?>" title="<?php echo "(".$short_ddd_tel1.") " . $short_prim_numeros_tel1 . "-" . $short_secu_numeros_tel1; ?>"> 
					<div class="icon-button">
						<i class="fas fa-phone"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['email']) != ""): ?>
				<?php $rando23 = $randomClass++; ?>
				<?php $email = formatadados("email" , $infos['email']); ?>
				<?php $short_email = mb_strimwidth($email, 0, 20, "...");?>
				<?php $link_email = "mailto:".$email; ?>
				<div class="btn-link-mobile email" rel="<?php echo $rando23;?>" title="<?php echo $infos['email'] ?>">
					<div class="icon-button">
						<i class="far fa-envelope"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['end']) != ""): ?>
				<?php $rando24 = $randomClass++; ?>
				<?php $end = formatadados("end" , $infos['end']); ?>
				<?php $short_end = mb_strimwidth($end, 0, 20, "...");?>
				<?php $link_end = "http://maps.google.com/?q=".$end; ?>
				<div class="btn-link-mobile endereco" rel="<?php echo $rando24;?>" title="<?php echo $infos['end'] ?>">
					<div class="icon-button">
						<i class="fas fa-map-marker-alt"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['face']) != ""): ?>
				<?php $rando25 = $randomClass++; ?>
				<?php $face = formatadados("face" , $infos['face']); ?>
				<?php $short_face = mb_strimwidth($face, 0, 20, "...");?>
				<?php $link_face = "https://fb.com/".$face; ?>
				<div class="btn-link-mobile facebook" rel="<?php echo $rando25;?>" title="<?php echo $infos['face']; ?>">
					<div class="icon-button">
						<i class="fab fa-facebook-f"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['insta']) != ""): ?>
				<?php $rando26 = $randomClass++; ?>
				<?php $insta = formatadados("insta" , $infos['insta']); ?>
				<?php $short_insta = mb_strimwidth($insta, 0, 20, "...");?>
				<?php $link_insta = "https://instagram.com/".$insta; ?>
				<div class="btn-link-mobile instagram" rel="<?php echo $rando26;?>" title="<?php echo $infos['insta'];?>">	
					<div class="icon-button">
						<i class="fab fa-instagram"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['site']) != ""): ?>
				<?php $rando27 = $randomClass++; ?>
				<?php $site = formatadados("site" , $infos['site']); ?>
				<?php $short_site = mb_strimwidth($site, 0, 20, "...");?>
				<?php $link_site = $site; ?>
				<div class="btn-link-mobile site" rel="<?php echo $rando27;?>" title="<?php echo $infos['site'] ?>">	
					<div class="icon-button">
						<i class="fas fa-desktop"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['wpp']) != ""): ?>
				<?php $rando28 = $randomClass++; ?>
				<?php $wpp = $short = formatadados("wpp" , $infos['wpp']); ?>
				<?php $short_ddd = substr($short, 0, 2); ?>
				<?php $short_prim_numeros = substr($short, 2, 5); ?> 
				<?php $short_secu_numeros = substr($short, 7, 8); ?> 
				<?php $link_wpp = "https://wa.me/55".$short."?text=Olá.%20Tudo%20bem?%20Vi%20seu%20anúncio%20pelo%20Temzap!&source=123";?>
				<div class="btn-link-mobile whatsapp" rel="<?php echo $rando28;?>" title="<?php echo "(".$short_ddd.") " . $short_prim_numeros . "-" . $short_secu_numeros; ?>">	
					<div class="icon-button">
						<i class="fab fa-whatsapp"></i>
					</div>
				</div>
			<?php endif ?>
			<div class="btn-link-mobile-footer">	
				<?php if (($infos['tel1']) != ""): ?>
					<div class="descript-mobile phone description<?php echo $rando22;?>"> 
						<?php echo "(".$short_ddd_tel1.") " . $short_prim_numeros_tel1 . "-" . $short_secu_numeros_tel1; ?>
						<a href="<?php echo $link_tel1;?>" target="_blank" title="<?php echo "(".$short_ddd.") " . $short_prim_numeros . "-" . $short_secu_numeros; ?>">
							<small class="ir">Ligar</small>
						</a>
					</div>
				<?php endif ?>
				<?php if (($infos['email']) != ""): ?>
					<div class="descript-mobile email description<?php echo $rando23;?>"> 
						<?php echo $short_email; ?>
						<a href="<?php echo $link_email;?>" target="_blank" title="<?php echo $short_email; ?>">
							<small class="ir">Abrir</small>
						</a>
					</div>
				<?php endif ?>
				<?php if (($infos['end']) != ""): ?>
					<div class="descript-mobile endereco description<?php echo $rando24;?>"> 
						<?php echo $infos['end'] ?>
						<a href="<?php echo $link_end;?>" target="_blank" title="<?php echo $infos['end'] ?>">
							<small class="ir">Navegar</small>
						</a>
					</div>
				<?php endif ?>
				<?php if (($infos['face']) != ""): ?>
					<div class="descript-mobile facebook description<?php echo $rando25;?>">
						<?php echo $short_face; ?>
						<a href="<?php echo $link_face;?>" target="_blank" title="<?php echo $infos['face'] ?>">
							<small class="ir">Abrir</small>
						</a>
					</div>
				<?php endif ?>
				<?php if (($infos['insta']) != ""): ?>
					<div class="descript-mobile instagram description<?php echo $rando26;?>"> 
						<?php echo $short_insta; ?>
						<a href="<?php echo $link_insta;?>" target="_blank" title="<?php echo $infos['insta'] ?>">
							<small class="ir">Abrir</small>
						</a>
					</div>
				<?php endif ?>
				<?php if (($infos['site']) != ""): ?>
					<div class="descript-mobile site description<?php echo $rando27;?>"> 
						<?php echo $short_site; ?>
						<a href="<?php echo $link_site;?>" target="_blank" title="<?php echo $infos['site'] ?>">
							<small class="ir">Abrir</small>
						</a>
					</div>
				<?php endif ?>
				<?php if (($infos['wpp']) != ""): ?>
					<div class="descript-mobile whatsapp description<?php echo $rando28;?>" style="display: block;"> 
						<a href="<?php echo $link_wpp;?>" target="_blank" style="color: #FFFFFF;">
							<i class="fab fa-whatsapp"></i> Conversar Agora!
						</a>
					</div>
				<?php endif ?>
			</div>
		</div>
	<?php };?>
</div>