<?php
  get_header();
?>
<?php
    $pagename = get_query_var('pagename');
    $args = array( 'category_name' => $pagename );
?>

<?php
    get_template_part('template-parts/content', 'post-list', $args);
?>

<?php
    get_footer();
?>