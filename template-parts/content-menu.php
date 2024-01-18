<?php
    $pagename = get_query_var('pagename');
?>

<div class="flex flex-row w-full justify-center border-solid border-t-[1px] border-b-[1px] border-[#EBEBEB]">
    <?php        
        $pages = get_pages();
        $pages = array_filter($pages, static function ($element) {
            return $element->post_name !== "home";
        });
        foreach ( $pages as $page ):
    ?>
    <a href="/<?php echo $page->post_name ?>">
        <div class="hover:bg-[#EBEBEB] relative items-center justify-center px-6 py-5 <?php if (strcasecmp($pagename, $page->post_name) == 0) { echo 'active'; } ?>">
            <?php echo ucfirst(str_replace('-', ' ', $page->post_name)) ?>
        </div>
    </a>
    <?php endforeach; 
    ?>
</div>