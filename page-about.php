<?php
  get_header();
?>

<div class="flex-1 flex flex-col h-[100%] max-w-[75%] m-10">
    <?php
        $current_page = get_queried_object();
        $content      = apply_filters( 'the_content', $current_page->post_content );
        echo $content;
    ?>
</div>
<?php
    get_footer();
?>