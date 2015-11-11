<?php
    $pagename = get_query_var('pagename');
?>
<!-- subheader begin -->
<div id="subheader" style="background:url(<?php echo get_field('sub-'.$pagename,'option');?>) top center no-repeat">
    <h1><?php echo the_title();?></h1>
    <h3>Five Stars Hotel</h3>
</div>
<!-- subheader close -->