<?php
    $pagename = get_query_var('pagename');
?>

<div class="flex flex-row w-full justify-center border-solid border-t-[1px] border-b-[1px] border-[#EBEBEB]">
    <?php        
        $pages = ['Food', 'Brain', 'Travel'];
        foreach ( $pages as $page ):
    ?>
    <a href="/<?php echo $page ?>">
        <div class="hover:bg-[#EBEBEB] relative items-center justify-center px-6 py-5 <?php if (strcasecmp($pagename, $page) == 0) { echo 'active'; } ?>">
            <?php echo $page ?>
        </div>
    </a>
    <?php endforeach; 
    ?>
</div>