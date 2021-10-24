<?php
    get_header();
    if(have_posts()) {
        while(have_posts()) {
            the_post();
?>
        <div class="post-thumbnail">
        <h2>
            <? the_title(); ?>
        </h2>
<?php
            the_content();
?>
        </div>
<?php
        }
    } else {
        echo "Nie ma postów";
    }
get_footer();
