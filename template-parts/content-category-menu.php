<div class="flex flex-row w-full justify-center">
    <?php
        // Get the ID of the parent category
        $parent_category = get_category_by_slug($pagename);

        if ($parent_category) {
        $parent_category_id = $parent_category->term_id;

        // Get all child categories of the specified parent category
        $categories = get_categories(array(
            'parent' => $parent_category_id,
            'hide_empty' => false, // Set to true if you want to exclude categories with no posts
        ));

        foreach ( $categories as $cat ): $cat_name = $cat->name;
    ?>
    <a href="/<?php echo $pagename ?>?category=<?php echo str_replace(' ', '-', strtolower($cat_name)); ?>">
        <div class="category items-center justify-center mx-2 my-2 px-3 py-3 text-sm <?php if (str_replace(' ', '-', strtolower($cat_name)) == $category) { echo 'active-category'; } ?>">
            <?php echo $cat_name; ?>
        </div>
    </a>
    <?php endforeach; 
        }
    ?>
</div>