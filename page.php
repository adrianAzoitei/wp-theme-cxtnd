<?php
  get_header();
?>
<?php
    $pagename = get_query_var('pagename');
    $category = get_query_var('category');

    if (!$category) {
        $args = array( 'category_name' => $pagename );
    } else {
        $args = array( 'category_name' => $category );
    }
?>

<?php
    get_template_part('template-parts/content', 'post-list', $args);
?>

<?php
    get_footer();
?>