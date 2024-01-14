<?php
  get_header();
?>
<div class="text-xl text-center text-text">Category is:</div>
<div class="text-xl text-center text-text"><?php echo get_query_var('category') ?></div>

<?php
get_footer();
?>