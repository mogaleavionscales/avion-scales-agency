<?php
get_header();
?>
<main style="max-width: 1200px; margin: 2rem auto; padding: 0 2rem;">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>
<?php
get_footer();
