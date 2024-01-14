<?php
    $category = get_query_var('category');
    if ($category == null) {
        $category = 'mental-health';
    }
    $args = array( 'category_name' => $category );
?>

<div class="flex flex-row w-full justify-center">
    <?php
        $categories = ['Mental health', 'Personal development'];
        foreach ( $categories as $cat ):
    ?>
    <a href="/brain?category=<?php echo str_replace(' ', '-', strtolower($cat)); ?>">
        <div class="category items-center justify-center mx-2 my-2 px-3 py-3 text-sm <?php if (str_replace(' ', '-', strtolower($cat)) == $category) { echo 'active-category'; } ?>">
            <?php echo $cat; ?>
        </div>
    </a>
    <?php endforeach; 
    ?>
</div>