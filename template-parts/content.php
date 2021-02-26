<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package casinos
 */

$image = get_field('casino_imagem');
$picture = $image['sizes']['large'];



?>


<div id="post-<?php the_ID(); ?>" class="relative flex flex-col justify-center w-full min-w-full lg:flex-row lg:h-56 mb-7">
  <div class="md:flex ">
    <a href="<?php the_field('casino_link') ?>" title="<?php the_title() ?>" class="relative block w-full h-48 overflow-hidden lg:rounded-bl-2xl lg:h-56 md:w-3/6 ">

      <img title="" src="<?php echo $picture ?>" class="block object-cover w-full h-full rounded-t-2xl md:rounded-tr-none" alt="" width="360" height="360">

      <?php if (get_field('recomendado')) : ?>
        <span class="absolute w-24 h-24 tip-recomended" style="background: url('http://localhost/wp/wp-content/themes/casinos/dist/img/tip-recommended.png') center no-repeat;">Recomendado</span>

      <?php endif; ?>
    </a>

    <!-- site-content -->
    <div class="w-full h-48 p-5 bg-white lg:h-56 md:rounded-tr-2xl lg:rounded-none ">
      <h2 class="pb-3 text-2xl font-bold text-gray-800 uppercase">
        <a href="<?php the_field('casino_link') ?>" title="<?php the_title() ?>"><?php the_title() ?></a>
      </h2>

      <p class="text-gray-800 "><?php the_field('casino_descricao') ?></p>
    </div>
  </div>
  <!-- site-bonus -->
  <div class="flex flex-col justify-around px-5 text-center text-white bg-indigo-800 lg:w-96 sm:h-56 lg:rounded-tr-2xl rounded-b-2xl sm:rounded-br-2xl lg:rounded-bl-none py-7">
    <!-- bonus-prize -->
    <strong class="text-xl font-light leading-8 text-white uppercase">
      Bónus
      <span class="block mt-5 text-5xl font-black leading-8 uppercase"><?php the_field('montante_bonus') ?>€</span>
    </strong>

    <a href="<?php the_field('casino_link') ?>" title="Abrir conta" class="block py-3 mt-5 text-sm font-bold text-white uppercase duration-150 ease-in-out transform bg-green-400 rounded hover:scale-110 hover:elevation-2 " rel="nofollow">Abrir conta</a>
  </div>
</div>