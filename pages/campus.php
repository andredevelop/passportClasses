<section class="section-main">
	<h2 class="textDarkBlue">Meus cursos</h2>

	<form method="post" class="w100">
		<input class="w50 borderRadius textPastelBlue" type="text" name="search-campus" placeholder="Buscar...">
	</form>

	<section class="module-wraper w100">
		<div class="container w100">

			<?php 
				for ($i = 0; $i <= 16; $i++){

			?>
			<div class="module-single w30">
				<img src="<?php echo INCLUDE_PATH;?>img/imgCursoTeste.jpg">
			</div><!-- module-single -->
			<?php } ?>
		
		</div><!-- container -->
	</section><!-- module-wraper -->

</section><!-- section-main -->	