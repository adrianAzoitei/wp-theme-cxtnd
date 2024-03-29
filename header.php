<!doctype html>
<html lang="en">
  <head>
    <!-- Global Metadata -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <!-- <link rel="icon" type="image/svg" href="..." /> -->

    <!-- Primary Meta Tags -->
    <title>
      <?php 
        if (is_front_page()) {
          echo get_bloginfo('name');
        } else {
          echo get_the_title();
        }
      ?>
    </title>
    <meta name="title" content="<?php echo get_bloginfo('name') ?>" />
    <meta name="description" content="<?php echo get_bloginfo('description') ?>" />
    <?php
      wp_head();
    ?>
  </head>
  <body>
    <div class="flex flex-col justify-start items-center bg-base-100e min-h-[100svh] bg-background text-text font-helvetica">
        <div class="flex flex-col items-center w-[100%]">
          <a href="/"><div class="heading text-2xl font-bold my-5">eat, explore, evolve</div></a>
          <?php
            if (!is_front_page()) {
              get_template_part('template-parts/content', 'menu');
              get_template_part('template-parts/content', 'category-menu');
            }
          ?>
        </div>