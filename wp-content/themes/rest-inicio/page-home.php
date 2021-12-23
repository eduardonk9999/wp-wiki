<?php
  // Template Name: Menu da Semana
?>
<?php get_header(); ?>
  <section class="container">
    <h2 class="subtitulo">Menu da Semana</h2>

    <div class="menu-item grid-8">
      <h2>Peixes</h2>
      <ul>
        <?php if(have_rows('comidas')) { while (have_rows('comidas')) { the_row(); ?>
          <li>
            <span><sup>R$</sup><?php the_sub_field('preco'); ?></span>
            <div>
              <h3><?php the_sub_field('nome'); ?></h3>
              <p><?php the_sub_field('descricao'); ?></p>
            </div>
          </li>
        <?php } } ?>
        
      </ul>
    </div>

    <div class="menu-item grid-8">
      <h2>Carnes</h2>
      <ul>
        <li>
          <span><sup>R$</sup>129</span>
          <div>
            <h3>Picanha Nobre no Alho</h3>
            <p>Pequenas tiras de salmão feitas no alho e óleo</p>
          </div>
        </li>
        <li>
          <span><sup>R$</sup>89</span>
          <div>
            <h3>Cupim no Bafo</h3>
            <p>Sardinhas escolhidas a dedo e fritas em cerveja premium</p>
          </div>
        </li>
        <li>
          <span><sup>R$</sup>159</span>
          <div>
            <h3>Hamburger Artesanal Rest</h3>
            <p>Grandes camarões grelhados, servidos ao molho de camarão com catupiry</p>
          </div>
        </li>
      </ul>
    </div>

  </section>
<?php get_footer(); ?>