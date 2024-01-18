<div class="flex-1 flex flex-col h-[100%] w-[35%] m-10">
    <?php        
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); 
    ?>
    <a href="<?php the_permalink(); ?>">
        <div class="flex flex-col relative my-2">
            <div class="flex flex-col py-2 px-2 hover:bg-post-hover rounded-lg">
                <div class="flex flex-row items-start justify-between h-[10vh] w-[100%]">
                    <div class="flex flex-col justify-start h-[100%] mr-10">
                        <p class="text-lg font-bold"><?php the_title(); ?></p>
                        <div class="font-light text-post-excerpt text-sm line-clamp-1"><?php the_excerpt(); ?></div>
                    </div>
                    <img class="post-thumbnail-img" src="<?php echo the_post_thumbnail_url() ?>"/>
                </div>
                <div class="h-[2vh] post-thumbnail-icons"></div>
            </div>
            <div class="line"></div>
        </div>
    </a>
    <?php endforeach; 
        wp_reset_postdata();
    ?>
</div>