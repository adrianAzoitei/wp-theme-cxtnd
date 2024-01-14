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
        $title = get_the_title();
        if ($title == "Landing Page") {
          echo "Eat, explore, evolve";
        } else {
          echo $title;
        }
      ?>
    </title>
    <meta name="title" content="Eat, explore, evolve" />
    <meta name="description" content="Personal website." />
    <?php
      wp_head();
    ?>
  </head>
  <body>
    <div class="flex flex-col justify-between items-center bg-base-100e min-h-[100svh] bg-background text-text font-helvetica">
      <a href="/"><div class="heading text-2xl font-bold my-5">eat, explore, evolve</div></a>
      <?php
        if (!is_front_page()) {
          get_template_part('template-parts/content', 'menu');
        }
      ?>