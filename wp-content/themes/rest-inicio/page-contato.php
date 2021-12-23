<?php
  // Template Name: Contato
?>
<?php get_header(); ?>
	<section class="container contato">
		<h2 class="subtitulo">Contato</h2>

		<div class="grid-16">
			<a href="https://www.google.com.br/maps" target="_blank"><img src="<?php the_field('imagem'); ?>" alt=""></a>
		</div>

		<div class="grid-1-3 contato-item">
			<h2>Dados</h2>
			<p><?php the_field('telefone'); ?></p>
			<p><?php the_field('email'); ?></p>
			<p>facebook.com/rest/</p>
		</div>
		<div class="grid-1-3 contato-item">
			<h2>Horários</h2>
			<p>Segunda à Sexta: 10 às 23</p>
			<p>Sábado: 14 às 23</p>
			<p>Domingo: 14 às 22</p>
		</div>
		<div class="grid-1-3 contato-item">
			<h2>Endereço</h2>
			<p>Rua Marechal, 29</p>
			<p>Copacabana - Rio de Janeiro</p>
			<p>Brasil - Terra - Via Láctea</p>
		</div>
	</section>

<?php get_footer(); ?>