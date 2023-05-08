<?php


get_header();

// this  basic code for uplod content
    if (have_posts()): 
        while (have_posts()): the_post();
    the_content();
    endwhile;
endif;
get_footer();
?>