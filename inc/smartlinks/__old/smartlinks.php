<!-- DEPENDÊNCIAS -->
<?php $caminho = esc_url( get_template_directory_uri() ) ?>
<script src="<?php echo $caminho;?>/inc/smartlinks/js/smartlinks-scripts.js"></script>
<link rel="stylesheet" href="<?php echo $caminho;?>/inc/smartlinks/css/smartlinks-style.css">

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

<!-- EXIBIÇÃO -->
<div class="container botoes-teste hidden-xs">
	<?php 
		$tipo = $infos['tipo'];
		$randomClass = rand();?>
		
	<?php if ($tipo == "Gratuito") { ?>
		<div class="anuncios anuncios-gratis">
			<?php if (($infos['tel1']) != ""): ?>
				<?php $rando1 = $randomClass++; ?>
				<div class="btn-link phone" rel="<?php echo $rando1;?>">
					<div class="icon-button">
						<i class="fas fa-phone"></i>
					</div>
					<div class="descript description<?php echo $rando1;?>"> 
						<?php echo formatadados("tel1" , $infos['tel1'] ); ?>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['email']) != ""): ?>
				<?php $rando2 = $randomClass++; ?>
				<div class="btn-link email" rel="<?php echo $rando2;?>">
					<div class="icon-button">
						<i class="far fa-envelope"></i>
					</div>
					<div class="descript description<?php echo $rando2;?>"> 
						<?php echo formatadados("email" , $infos['email']); ?>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['end']) != ""): ?>
				<?php $rando3 = $randomClass++; ?>
				<div class="btn-link endereco" rel="<?php echo $rando3;?>">
					<div class="icon-button">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div class="descript description<?php echo $rando3;?>"> 
						<?php echo formatadados("end", $infos['end'])?>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['face']) != ""): ?>
				<?php $rando4 = $randomClass++; ?>
				<div class="btn-link facebook" rel="<?php echo $rando4;?>">	
					<div class="icon-button">
						<i class="fab fa-facebook-f"></i>
					</div>
					<div class="descript description<?php echo $rando4;?>"> 
						<?php echo formatadados("face" , $infos['face']); ?>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['insta']) != ""): ?>
				<?php $rando5 = $randomClass++; ?>
				<div class="btn-link instagram" rel="<?php echo $rando5;?>">	
					<div class="icon-button">
						<i class="fab fa-instagram"></i>
					</div>
					<div class="descript description<?php echo $rando5;?>"> 
						<?php echo formatadados("insta" , $infos['insta']); ?>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['site']) != ""): ?>
				<?php $rando6 = $randomClass++; ?>
				<div class="btn-link site" rel="<?php echo $rando6;?>">	
					<div class="icon-button">
						<i class="fas fa-desktop"></i>
					</div>
					<div class="descript description<?php echo $rando6;?>"> 
						<?php echo formatadados("site" , $infos['site']); ?>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['wpp']) != ""): ?>
				<?php $rando7 = $randomClass++; ?>
				<div class="btn-link whatsapp" rel="<?php echo $rando7;?>">
					<div class="icon-button">		
						<i class="fab fa-whatsapp"></i>
					</div>
					<div class="descript description<?php echo $rando7;?>" style="display: inline-block;">
						<?php echo $infos['wpp']; ?>
					</div>
				</div>
			<?php endif ?>
		</div>
	<?php } else { ?>
		<div class="anuncios anuncios-pagos">
			<?php if (($infos['tel1']) != ""): ?>
				<?php $rando8 = $randomClass++; ?>
				<div class="btn-link phone" rel="<?php echo $rando8;?>">
					<div class="icon-button">
						<i class="fas fa-phone"></i>
					</div>
					<div class="descript description<?php echo $rando8;?>"> 
						<?php echo formatadados("tel1" , $infos['tel1']) ?>
						<a href="http://www.google.com.br" target="_blank">
							<small class="ir">Ligar</small>
						</a>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['email']) != ""): ?>
				<?php $rando9 = $randomClass++; ?>
				<div class="btn-link email" rel="<?php echo $rando9;?>">
					<div class="icon-button">
						<i class="far fa-envelope"></i>
					</div>
					<div class="descript description<?php echo $rando9;?>"> 
						<?php echo formatadados("email" , $infos['email']); ?>
						<a href="#">
							<small class="ir">Abrir</small>
						</a>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['end']) != ""): ?>
				<?php $rando10 = $randomClass++; ?>
				<div class="btn-link endereco" rel="<?php echo $rando10;?>">
					<div class="icon-button">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div class="descript description<?php echo $rando10;?>"> 
						<?php echo formatadados("end" , $infos['end']); ?>
						<a href="http://www.google.com.br" target="_blank">
							<small class="ir">Navegar</small>
						</a>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['face']) != ""): ?>
				<?php $rando11 = $randomClass++; ?>
				<div class="btn-link facebook" rel="<?php echo $rando11;?>">
					<div class="icon-button">
						<i class="fab fa-facebook-f"></i>
					</div>
					<div class="descript description<?php echo $rando11;?>">
						<?php echo formatadados("face" , $infos['face']); ?>
						<a href="http://www.google.com.br" target="_blank">
							<small class="ir">Abrir</small>
						</a> 
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['insta']) != ""): ?>
				<?php $rando12 = $randomClass++; ?>
				<div class="btn-link instagram" rel="<?php echo $rando12;?>">	
					<div class="icon-button">
						<i class="fab fa-instagram"></i>
					</div>
					<div class="descript description<?php echo $rando12;?>"> 
						<?php echo formatadados("insta" , $infos['insta']); ?>
						<a href="http://www.google.com.br" target="_blank">
							<small class="ir">Abrir</small>
						</a>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['site']) != ""): ?>
				<?php $rando13 = $randomClass++; ?>
				<div class="btn-link site" rel="<?php echo $rando13;?>">	
					<div class="icon-button">
						<i class="fas fa-desktop"></i>
					</div>
					<div class="descript description<?php echo $rando13;?>"> 
						<?php echo formatadados("site" , $infos['site']); ?>
						<a href="http://www.google.com.br" target="_blank">
							<small class="ir">Abrir</small>
						</a>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['wpp']) != ""): ?>
				<?php $rando14 = $randomClass++; ?>
				<div class="btn-link whatsapp" rel="<?php echo $rando14;?>">	
					<div class="icon-button">
						<i class="fab fa-whatsapp"></i>
					</div>
					<div class="descript description<?php echo $rando14;?>" style="display: inline-block;"> 
						<?php echo $infos["wpp"];?>
						<a href="http://www.google.com.br" target="_blank">
							<small class="ir">Abrir</small>
						</a>
					</div>
				</div>
			<?php endif ?>
		</div>
	<?php };?>
</div>
<div class="container botoes-teste botoes-teste2 hidden-sm">
	<?php $tipo = $infos['tipo'];
	if ($tipo == "Gratuito") { ?>
		<div class="anuncios anuncios-gratis anuncios-mobile">
			<?php $rando15 = $randomClass++; ?>
			<?php if (($infos['tel1']) != ""): ?>
				<div class="btn-link-mobile phone" rel="<?php echo $rando15;?>">
					<div class="icon-button">
						<i class="fas fa-phone"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['email']) != ""): ?>
				<?php $rando16 = $randomClass++; ?>
				<div class="btn-link-mobile email" rel="<?php echo $rando16;?>">
					<div class="icon-button">
						<i class="far fa-envelope"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['end']) != ""): ?>
				<?php $rando17 = $randomClass++; ?>
				<div class="btn-link-mobile endereco" rel="<?php echo $rando17;?>">
					<div class="icon-button">
						<i class="fas fa-map-marker-alt"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['face']) != ""): ?>
				<?php $rando18 = $randomClass++; ?>
				<div class="btn-link-mobile facebook" rel="<?php echo $rando18;?>">
					<div class="icon-button">
						<i class="fab fa-facebook-f"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['insta']) != ""): ?>
				<?php $rando19 = $randomClass++; ?>
				<div class="btn-link-mobile instagram" rel="<?php echo $rando19;?>">	
					<div class="icon-button">
						<i class="fab fa-instagram"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['site']) != ""): ?>
				<?php $rando20 = $randomClass++; ?>
				<div class="btn-link-mobile site" rel="<?php echo $rando20;?>">	
					<div class="icon-button">
						<i class="fas fa-desktop"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['wpp']) != ""): ?>
				<?php $rando21 = $randomClass++; ?>
				<div class="btn-link-mobile whatsapp" rel="<?php echo $rando21;?>">	
					<div class="icon-button">
						<i class="fab fa-whatsapp"></i>
					</div>
				</div>
			<?php endif ?>
			<div class="btn-link-mobile-footer">	
				<?php if (($infos['tel1']) != ""): ?>
					<div class="descript-mobile phone description<?php echo $rando1;?>"> 
						<?php echo formatadados("tel1" , $infos['tel1']); ?>
					</div>
				<?php endif ?>
				<?php if (($infos['email']) != ""): ?>
					<div class="descript-mobile email description<?php echo $rando2;?>"> 
						<?php echo formatadados("email" , $infos['email']); ?>
					</div>
				<?php endif ?>
				<?php if (($infos['end']) != ""): ?>
					<div class="descript-mobile endereco description<?php echo $rando3;?>"> 
						<?php echo formatadados("end" , $infos['end']); ?>
					</div>
				<?php endif ?>
				<?php if (($infos['face']) != ""): ?>
					<div class="descript-mobile facebook description<?php echo $rando4;?>">
						<?php echo formatadados("face" , $infos['face']); ?> 
					</div>
				<?php endif ?>
				<?php if (($infos['insta']) != ""): ?>
					<div class="descript-mobile instagram description<?php echo $rando5;?>"> 
						<?php echo formatadados("insta"); ?>
					</div>
				<?php endif ?>
				<?php if (($infos['site']) != ""): ?>
					<div class="descript-mobile site description<?php echo $rando6;?>"> 
						<?php echo formatadados("site" , $infos['site']); ?>
					</div>
				<?php endif ?>
				<?php if (($infos['wpp']) != ""): ?>
					<div class="descript-mobile whatsapp description<?php echo $rando7;?>" style="display: block;"> 
						<?php echo $infos['wpp']; ?>
					</div>
				<?php endif ?>
			</div>
		</div>
	<?php } else { ?>
		<div class="anuncios anuncios-pagos anuncios-mobile">
			<?php if (($infos['tel1']) != ""): ?>
				<?php $rando8 = $randomClass++; ?>
				<div class="btn-link-mobile phone" rel="<?php echo $rando1;?>">
					<div class="icon-button">
						<i class="fas fa-phone"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['email']) != ""): ?>
				<?php $rando9 = $randomClass++; ?>
				<div class="btn-link-mobile email" rel="<?php echo $rando2;?>">
					<div class="icon-button">
						<i class="far fa-envelope"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['end']) != ""): ?>
				<?php $rando10 = $randomClass++; ?>
				<div class="btn-link-mobile endereco" rel="<?php echo $rando3;?>">
					<div class="icon-button">
						<i class="fas fa-map-marker-alt"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['face']) != ""): ?>
				<?php $rando11 = $randomClass++; ?>
				<div class="btn-link-mobile facebook" rel="<?php echo $rando4;?>">
					<div class="icon-button">
						<i class="fab fa-facebook-f"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['insta']) != ""): ?>
				<?php $rando12 = $randomClass++; ?>
				<div class="btn-link-mobile instagram" rel="<?php echo $rando5;?>">	
					<div class="icon-button">
						<i class="fab fa-instagram"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['site']) != ""): ?>
				<?php $rando13 = $randomClass++; ?>
				<div class="btn-link-mobile site" rel="<?php echo $rando6;?>">	
					<div class="icon-button">
						<i class="fas fa-desktop"></i>
					</div>
				</div>
			<?php endif ?>
			<?php if (($infos['wpp']) != ""): ?>
				<?php $rando14 = $randomClass++; ?>
				<div class="btn-link-mobile whatsapp" rel="<?php echo $rando7;?>">	
					<div class="icon-button">
						<i class="fab fa-whatsapp"></i>
					</div>
				</div>
			<?php endif ?>
			<div class="btn-link-mobile-footer">	
				<?php if (($infos['tel1']) != ""): ?>
					<div class="descript-mobile phone description<?php echo $rando8;?>"> 
						<?php echo formatadados("tel1" , $infos['tel1']); ?>
						<a href="http://www.google.com.br" target="_blank">
							<small class="ir">Ligar</small>
						</a>
					</div>
				<?php endif ?>
				<?php if (($infos['email']) != ""): ?>
					<div class="descript-mobile email description<?php echo $rando9;?>"> 
						<?php echo formatadados("email" , $infos['email']); ?>
						<a href="http://www.google.com.br" target="_blank">
							<small class="ir">Abrir</small>
						</a>
					</div>
				<?php endif ?>
				<?php if (($infos['end']) != ""): ?>
					<div class="descript-mobile endereco description<?php echo $rando10;?>"> 
						<?php echo formatadados("end" , $infos['end']); ?>
						<a href="http://www.google.com.br" target="_blank">
							<small class="ir">Navegar</small>
						</a>
					</div>
				<?php endif ?>
				<?php if (($infos['face']) != ""): ?>
					<div class="descript-mobile facebook description<?php echo $rando11;?>">
						<?php echo formatadados("face" , $infos['face'] ); ?> 
						<a href="http://www.google.com.br" target="_blank">
							<small class="ir">Abrir</small>
						</a>
					</div>
				<?php endif ?>
				<?php if (($infos['insta']) != ""): ?>
					<div class="descript-mobile instagram description<?php echo $rando12;?>"> 
						<?php echo formatadados("insta" , $infos['insta']); ?>
						<a href="http://www.google.com.br" target="_blank">
							<small class="ir">Abrir</small>
						</a>
					</div>
				<?php endif ?>
				<?php if (($infos['site']) != ""): ?>
					<div class="descript-mobile site description<?php echo $rando13;?>"> 
						<?php echo formatadados("site" , $infos['site']); ?>
						<a href="http://www.google.com.br" target="_blank">
							<small class="ir">Abrir</small>
						</a>
					</div>
				<?php endif ?>
				<?php if (($infos['wpp']) != ""): ?>
					<div class="descript-mobile whatsapp description<?php echo $rando14;?>" style="display: block;"> 
						<?php echo $infos['wpp']; ?>
						<a href="http://www.google.com.br" target="_blank">
							<small class="ir">Conversar Agora!</small>
						</a>
					</div>
				<?php endif ?>
			</div>
		</div>
	<?php };?>
</div>