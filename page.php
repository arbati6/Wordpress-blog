<?php get_header();?>
<main class="main">
    <ol class="breadcrumbs"><?php get_breadcrumb(); ?></ol>
    <?php
        while(have_posts()) {
            the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content();
    }?>
</main>
<?php get_footer();?>