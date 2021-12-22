<h1>Boilerplate Wordpress</h1>
<p>Projeto Pronto, para apenas mudar thema, e iniciar wp, para os meus freelas...</p>

<img src="https://media-cdn.tripadvisor.com/media/photo-s/15/08/21/54/20181013-162653-largejpg.jpg" width="350" />

<br />

<h2>Passsos Padrão da criação de um Tema</h2>
<br />

1 - Copiar a pasta do site para wp-content/themes/

2 - Mudar o index.html para index.php

3 - Colocar/criar o arquivo style.css na raiz do tema

4 - Adicionar a descrição do tema no topo do style.css

<ul>
  <li>Theme Name:</li>
  <li>Theme URI:</li>
  <li>Author: A</li>
  <li>Author URI:</li>
  <li>Description:</li>
  <li>Version: 1.0</li>
</ul>

5 - Ativar o tema no Wordpress

6 - Corrigir o caminho do style.css e outros caminhos se necessário

<?php echo get_stylesheet_directory_uri(); ?>

Essa função adiciona o caminho até a raiz do tema

7 - Separar o header e footer em arquivos header.php e footer.php
Adicionar antes de fechar o head: <?php wp_head(); ?>
Adicionar antes de fechar o body: <?php wp_footer(); ?>
Adicionar o header e footer nas páginas do site e mudá-las para .php
Com <?php get_header(); ?> e <?php get_footer(); ?>

8 - Começar a substituir o conteúdo por funções de Wordpress

<?php bloginfo('name'); ?>

Mostra o nome do blog
