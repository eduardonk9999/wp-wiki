<?php
  // Template Name: Sobre
?>
<?php get_header(); ?>
	<section class="container sobre">
		<h2 class="subtitulo">Sobre</h2>

		<div class="grid-8">
			<img src="img/rest-fachada.jpg" alt="Fachada do Rest">
		</div>

		<div class="grid-8">
			<h2>História</h2>
			<p><?php echo get_post_meta(get_the_ID(), 'historia', true); ?></p>
			<p>Gostaria de enfatizar que o desenvolvimento contínuo de distintas formas de atuação prepara-nos para enfrentar situações atípicas decorrentes do remanejamento dos quadros funcionais.</p>
			<h2>Visão</h2>
			<p><?php echo get_post_meta(get_the_ID(), 'visao', true); ?></p>
			<h2>Valores</h2>
			<p><?php get_post_meta(get_the_ID(), 'valores', true); ?></p>
		</div>
	</section>
<?php get_footer(); ?>