<?php
  get_header();
?>

<div class="flex-1 flex flex-col justify-start items-start w-[40%] my-5">
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

<script>
    // Get the paragraph element
    const textElement = document.querySelector('.hidden-text');
    const triggerElement = document.querySelector('.trigger');

    // Add a click event listener to the paragraph
    triggerElement.addEventListener('click', function () {
      textElement.classList.add('visible-text');
    });
</script>
<?php
    get_footer();
?>