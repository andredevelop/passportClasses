<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- font open sans -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- metatags -->
	<meta name="description" content="Plataforma de estudos."/>
	<meta name="keywords" content="desenvolvimento web,seo,marketing digital,programação,cursos online,web design,front-end,web developer,back-end,php,pacajus,controle financeiro" />
	<meta name="robots" content="index,follow" />
	<meta name="author" content="Francisco André | Dev. Web" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />
	<!-- charset -->
	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
	<script src="https://kit.fontawesome.com/d76df92ddf.js" crossorigin="anonymous"></script>
	<!-- icone do site -->
	<link rel="shortcut icon" type="image-x/png" href="<?php echo INCLUDE_PATH ?>favicon.ico" />
	<!-- estilo -->
	<?php echo Spawn::spawnLinkFile('all','css/cssGlobal','globalStyle.css'); ?><!-- global style -->
	<?php echo Spawn::spawnLinkFile('login','css/cssPages','loginStyle.css'); ?><!-- login style -->
	<link rel="stylesheet" href="css/cssPages/loginStyle.css">
	<title>Seja bem-bindo(a)</title>
</head>
<body>
	<base base="<?php echo INCLUDE_PATH ?>" /><!-- base -->
	<div class="loading"><img src="images/load3.gif"></div><!-- loading -->
	
	<div class="mainLogin bgIndigo">
		<?php 
			if(isset($_POST['login'])){
				User::startLogin($_POST['user']);
			}
		?>
		<div class="container dspFlexWrap textF8">
			<section class="login w100">
				<form method="post" class="w50 dspFlexWrap">
					
					<span class="w100 dspFlexWrap">Usuário:</span>
					<div class="w100">
						<i class="fa-solid fa-user"></i>
						<input class="w90" type="text" name="user">
					</div><!-- w100 -->
	
					<input type="submit" name="login" class="textF8 bgKelyGreen" value="Entrar">
				</form>
			</section><!-- login -->
		</div><!-- container -->
	</div><!-- mainLogin -->

<?php Spawn::spawnLinkFile('all','js/jsLibs','jquery.js'); ?><!-- jquery -->
<?php Spawn::spawnLinkFile('all','js/jsGlobal','const.js'); ?><!-- funcAside -->
</body>
</html>