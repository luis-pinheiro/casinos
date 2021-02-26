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

<div id="post-<?php the_ID(); ?>" class="grid grid-cols-1 md:grid-cols-4 mx-7 mb-20">
  <div class=" h-56 ">
    <a target="_blank" href="<?php the_field('casino_link') ?>" title="<?php the_title() ?>"
      class="relative block w-full h-56 overflow-hidden lg:rounded-bl-2xl lg:h-56 ">

      <img title="" src="<?php echo $picture ?>"
        class="block object-cover w-full h-full rounded-t-2xl md:rounded-tr-none" alt="" width="360" height="360">

      <?php if (get_field('recomendado')) : ?>
      <span class="absolute w-24 h-24 tip-recomended"
        style="background: url('http://localhost/wp/wp-content/themes/casinos/dist/img/tip-recommended.png') center no-repeat;">Recomendado</span>

      <?php endif; ?>
    </a>
  </div>
  <div class=" h-56 flex  bg-gray-50  md:col-span-3 md:rounded-tr-2xl lg:rounded-none lg:col-span-2">
    <div class="w-full self-center  p-5   ">
      <h2 class="pb-3 text-2xl raleway font-bold text-gray-800 uppercase">
        <a href="<?php the_field('casino_link') ?>" title="<?php the_title() ?>"><?php the_title() ?></a>
      </h2>

      <p class="text-gray-800 lato"><?php the_field('casino_descricao') ?></p>
    </div>
  </div>
  <div
    class="p-7 h-56 lato md:col-span-4 lg:col-span-1 text-center text-white bg-indigo-800 lg:rounded-tr-2xl rounded-b-2xl sm:rounded-br-2xl lg:rounded-bl-none">
    <strong class="text-xl font-light leading-8 text-white uppercase">
      Bónus
      <span class="block mt-5 text-5xl font-black leading-8 uppercase"><?php the_field('montante_bonus') ?>€</span>
    </strong>

    <a target="_blank" href="<?php the_field('casino_link') ?>" title="Abrir conta"
      class="block py-3 mt-5 text-sm font-bold text-white uppercase duration-150 ease-in-out transform bg-limegreen-500 hover:bg-limegreen-600 rounded hover:scale-110 hover:elevation-2 "
      rel="nofollow">Abrir conta</a>
  </div>
</div>