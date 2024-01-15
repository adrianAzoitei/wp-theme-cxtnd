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
    get_template_part('template-parts/content', 'post-list', $args);
?>

<?php
    get_footer();
?>