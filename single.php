<?php
  get_header();
?>

<div class="flex flex-col justify-start items-start w-[40%] bg-blue">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="text-lg font-bold my-3"> <?php the_title(); ?> </div>
    <div class="font-light text-post-excerpt"><?php the_excerpt(); ?></div>
    <div class="font-light my-1 text-xs text-post-excerpt"><?php echo get_the_date(); ?></div>

    <div class="my-5">
        <?php the_content(); ?>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
</div>


<?php
    get_footer();
?>