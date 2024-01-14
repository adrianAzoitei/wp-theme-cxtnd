<?php
  get_header();
?>
<?php
    $category = get_query_var('category');
    if ($category == null) {
        $category = 'mental-health';
    }
    $args = array( 'category_name' => $category );
?>

<?php
    get_template_part('template-parts/content', 'category-menu');
?>

<div class="flex-1 flex flex-col h-[100%] m-10">
    <?php        
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); 
    ?>
    <a href="<?php the_permalink(); ?>">
        <div class="flex flex-row items-center h-[10vh] my-2">
            <img class="h-auto w-[10vh] mx-5" src="<?php echo the_post_thumbnail_url() ?>"/>
            <div class="flex flex-col justify-start h-[100%]">
                <p class="text-lg"><?php the_title(); ?></p>
                <p class="text-xs"><?php the_excerpt(); ?></p>
            </div>
        </div>
    </a>
    <?php endforeach; 
        wp_reset_postdata();
    ?>
</div>

<?php
    get_footer();
?>