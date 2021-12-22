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
/_
Theme Name:
Theme URI:
Author: A
Author URI:
Description:
Version: 1.0
_/

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
