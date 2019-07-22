<!-- DEPENDÊNCIAS -->
<script src="js/smartlinks-scripts.js"></script>
<link rel="stylesheet" href="css/smartlinks-style.css">

<!-- ORIGEM DE DADOS -->
<?php $infos = [
    "tipo" => "Gratuito",
    "tel1" => "12 3939-3939",
    "email" => "meuemail@email.com.br",
    "end" => "Rua São Bartolomeu, 71 - Jd São Judas Tadeu",
    "face" => "https://www.facebook.com/meuperfil",
    "insta" => "https://www.instagram.com/meuperfil",
    "site" => "https://www.meusite.com",
    "wpp" => "(12) 99778-9556",
];
function formatadados($param){
	global $infos;
	$resultado = $param;
	switch ($param){
		case "tel1":
			//$arr = array('http://www.','https://www.','instagram.com/'); 
			$word = $infos['tel1'];
			$resultado = str_replace($arr,"",$word);
		break;
		case "tel2":
			//$arr = array('http://www.','https://www.','instagram.com/'); 
			$word = $infos['tel2'];
			$resultado = str_replace($arr,"",$word);
		break;
		case "email":
			//$arr = array('http://www.','https://www.','instagram.com/'); 
			$resultado = $infos['email'];
		break;
		case "end":
			//$arr = array('http://www.','https://www.','instagram.com/'); 
			$resultado = $infos['end'];
		break;
		case "insta":
			$arr = array('http://www.','https://www.','instagram.com/'); 
			$word = $infos['insta'];
			$resultado = str_replace($arr,"",$word);
		break;
		case "face":
			$arr = array('http://www.','https://www.','fb.com','facebook.com/'); 
			$word = $infos['face'];
			$resultado = str_replace($arr,"",$word);
		break;
		case "youtube":
			$arr = array('http://www.','https://www.','youtube.com/'); 
			$word = $infos['youtube'];
			$resultado = str_replace($arr,"",$word);
		break;
		case "site":
			$arr = array('http://','https://','www.'); 
			$word = $infos['site'];
			$resultado = str_replace($arr,"",$word);
		break;
		case "wpp":
			$word = preg_replace('/[^0-9]/', '', $infos['wpp']);
			$resultado = str_replace($arr,"",$word);
		break;
		default:
			$resultado = "Nenhum";
		break;
	}
	return $resultado;
}?>

<!-- EXIBIÇÃO -->
<div class="container botoes-teste hidden-xs">
	<?php $tipo = $infos['tipo'];
	if ($tipo == "Gratuito") { ?>
		<div class="anuncios anuncios-gratis">
			<div class="btn-link phone" rel="8">
				<div class="icon-button">
					<i class="fas fa-phone"></i>
				</div>
				<div class="descript description8"> 
					<?php echo formatadados("tel1"); ?>
				</div>
			</div>
			<div class="btn-link email" rel="9">
				<div class="icon-button">
					<i class="far fa-envelope"></i>
				</div>
				<div class="descript description9"> 
					<?php echo formatadados("email"); ?>
				</div>
			</div>
			<div class="btn-link endereco" rel="10">
				<div class="icon-button">
					<i class="fas fa-map-marker-alt"></i>
				</div>
				<div class="descript description10"> 
					<?php echo formatadados("end"); ?>
				</div>
			</div>
			<div class="btn-link facebook" rel="11">	
				<div class="icon-button">
					<i class="fab fa-facebook-f"></i>
				</div>
				<div class="descript description11"> 
					<?php echo formatadados("face"); ?>
				</div>
			</div>
			<div class="btn-link instagram" rel="12">	
				<div class="icon-button">
					<i class="fab fa-instagram"></i>
				</div>
				<div class="descript description12"> 
					<?php echo formatadados("insta"); ?>
				</div>
			</div>
			<div class="btn-link site" rel="13">	
				<div class="icon-button">
					<i class="fas fa-desktop"></i>
				</div>
				<div class="descript description13"> 
					<?php echo formatadados("site"); ?>
				</div>
			</div>
			<div class="btn-link whatsapp" rel="14">
				<div class="icon-button">		
					<i class="fab fa-whatsapp"></i>
				</div>
				<div class="descript description14">
					<?php echo $infos['wpp']; ?>
				</div>
			</div>
		</div>
	<?php } else { ?>
		<div class="anuncios anuncios-pagos">
			<div class="btn-link phone" rel="1">
				<div class="icon-button">
					<i class="fas fa-phone"></i>
				</div>
				<div class="descript description1"> 
					<?php echo formatadados("tel1"); ?>
					<a href="http://www.google.com.br" target="_blank">
						<small class="ir">Ligar</small>
					</a>
				</div>
			</div>
			<div class="btn-link email" rel="2">
				<div class="icon-button">
					<i class="far fa-envelope"></i>
				</div>
				<div class="descript description2"> 
					<?php echo formatadados("email"); ?>
					<a href="#">
						<small class="ir">Abrir</small>
					</a>
				</div>
			</div>
			<div class="btn-link endereco" rel="3">
				<div class="icon-button">
					<i class="fas fa-map-marker-alt"></i>
				</div>
				<div class="descript description3"> 
					<?php echo formatadados("end"); ?>
					<a href="http://www.google.com.br" target="_blank">
						<small class="ir">Navegar</small>
					</a>
				</div>
			</div>
			<div class="btn-link facebook" rel="4">
				<div class="icon-button">
					<i class="fab fa-facebook-f"></i>
				</div>
				<div class="descript description4">
					<?php echo formatadados("face"); ?>
					<a href="http://www.google.com.br" target="_blank">
						<small class="ir">Abrir</small>
					</a> 
				</div>
			</div>
			<div class="btn-link instagram" rel="5">	
				<div class="icon-button">
					<i class="fab fa-instagram"></i>
				</div>
				<div class="descript description5"> 
					<?php echo formatadados("insta"); ?>
					<a href="http://www.google.com.br" target="_blank">
						<small class="ir">Abrir</small>
					</a>
				</div>
			</div>
			<div class="btn-link site" rel="6">	
				<div class="icon-button">
					<i class="fas fa-desktop"></i>
				</div>
				<div class="descript description6"> 
					<?php echo formatadados("site"); ?>
					<a href="http://www.google.com.br" target="_blank">
						<small class="ir">Abrir</small>
					</a>
				</div>
			</div>
			<div class="btn-link whatsapp" rel="7">	
				<div class="icon-button">
					<i class="fab fa-whatsapp"></i>
				</div>
				<div class="descript description7"> 
					<?php echo $infos["wpp"];?>
					<a href="http://www.google.com.br" target="_blank">
						<small class="ir">Abrir</small>
					</a>
				</div>
			</div>
		</div>
	<?php };?>
</div>
<div class="container botoes-teste botoes-teste2 hidden-sm">
	<?php $tipo = $infos['tipo'];
	if ($tipo == "Gratuito") { ?>
		<div class="anuncios anuncios-gratis anuncios-mobile">
			<div class="btn-link-mobile phone" rel="22">
				<div class="icon-button">
					<i class="fas fa-phone"></i>
				</div>
			</div>
			<div class="btn-link-mobile email" rel="23">
				<div class="icon-button">
					<i class="far fa-envelope"></i>
				</div>
			</div>
			<div class="btn-link-mobile endereco" rel="24">
				<div class="icon-button">
					<i class="fas fa-map-marker-alt"></i>
				</div>
			</div>
			<div class="btn-link-mobile facebook" rel="25">
				<div class="icon-button">
					<i class="fab fa-facebook-f"></i>
				</div>
			</div>
			<div class="btn-link-mobile instagram" rel="26">	
				<div class="icon-button">
					<i class="fab fa-instagram"></i>
				</div>
			</div>
			<div class="btn-link-mobile site" rel="27">	
				<div class="icon-button">
					<i class="fas fa-desktop"></i>
				</div>
			</div>
			<div class="btn-link-mobile whatsapp" rel="28">	
				<div class="icon-button">
					<i class="fab fa-whatsapp"></i>
				</div>
			</div>
			<br>
			<div class="btn-link-mobile-footer">	
				<div class="descript-mobile phone description22"> 
					<?php echo formatadados("tel1"); ?>
				</div>
				<div class="descript-mobile email description23"> 
					<?php echo formatadados("email"); ?>
				</div>
				<div class="descript-mobile endereco description24"> 
					<?php echo formatadados("end"); ?>
				</div>
				<div class="descript-mobile facebook description25">
					<?php echo formatadados("face"); ?> 
				</div>
				<div class="descript-mobile instagram description26"> 
					<?php echo formatadados("insta"); ?>
				</div>
				<div class="descript-mobile site description27"> 
					<?php echo formatadados("site"); ?>
				</div>
				<div class="descript-mobile whatsapp description28" style="display: block;"> 
					<?php echo $infos['wpp']; ?>
				</div>
			</div>
		</div>
	<?php } else { ?>
		<div class="anuncios anuncios-pagos anuncios-mobile">
			<div class="btn-link-mobile phone" rel="15">
				<div class="icon-button">
					<i class="fas fa-phone"></i>
				</div>
			</div>
			<div class="btn-link-mobile email" rel="16">
				<div class="icon-button">
					<i class="far fa-envelope"></i>
				</div>
			</div>
			<div class="btn-link-mobile endereco" rel="17">
				<div class="icon-button">
					<i class="fas fa-map-marker-alt"></i>
				</div>
			</div>
			<div class="btn-link-mobile facebook" rel="18">
				<div class="icon-button">
					<i class="fab fa-facebook-f"></i>
				</div>
			</div>
			<div class="btn-link-mobile instagram" rel="19">	
				<div class="icon-button">
					<i class="fab fa-instagram"></i>
				</div>
			</div>
			<div class="btn-link-mobile site" rel="20">	
				<div class="icon-button">
					<i class="fas fa-desktop"></i>
				</div>
			</div>
			<div class="btn-link-mobile whatsapp" rel="21">	
				<div class="icon-button">
					<i class="fab fa-whatsapp"></i>
				</div>
			</div>
			<br>
			<div class="btn-link-mobile-footer">	
				<div class="descript-mobile phone description15"> 
					<?php echo formatadados("tel1"); ?>
					<a href="http://www.google.com.br" target="_blank">
						<small class="ir">Ligar</small>
					</a>
				</div>
				<div class="descript-mobile email description16"> 
					<?php echo formatadados("email"); ?>
					<a href="http://www.google.com.br" target="_blank">
						<small class="ir">Abrir</small>
					</a>
				</div>
				<div class="descript-mobile endereco description17"> 
					<?php echo formatadados("end"); ?>
					<a href="http://www.google.com.br" target="_blank">
						<small class="ir">Navegar</small>
					</a>
				</div>
				<div class="descript-mobile facebook description18">
					<?php echo formatadados("face"); ?> 
					<a href="http://www.google.com.br" target="_blank">
						<small class="ir">Abrir</small>
					</a>
				</div>
				<div class="descript-mobile instagram description19"> 
					<?php echo formatadados("insta"); ?>
					<a href="http://www.google.com.br" target="_blank">
						<small class="ir">Abrir</small>
					</a>
				</div>
				<div class="descript-mobile site description20"> 
					<?php echo formatadados("site"); ?>
					<a href="http://www.google.com.br" target="_blank">
						<small class="ir">Abrir</small>
					</a>
				</div>
				<div class="descript-mobile whatsapp description21" style="display: block;"> 
					<?php echo $infos['wpp']; ?>
					<a href="http://www.google.com.br" target="_blank">
						<small class="ir">Conversar Agora!</small>
					</a>
				</div>
			</div>
		</div>
	<?php };?>
</div>