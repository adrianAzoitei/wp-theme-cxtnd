<?php
  get_header();
?>
<?php
    $pagename = get_query_var('pagename');
    $args = array( 'category_name' => $pagename );
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