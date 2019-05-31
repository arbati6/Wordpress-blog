<?php get_header();?>
<main class="main">
    <section class="posts-area">
        <section class="new-posts">
            <div class="new-posts__header-container">
                <h1 class="new-posts__header">Wybrana kategoria: <strong class="category-name"><?php single_cat_title() ?></strong></h1>
            </div>
            <?php while ( have_posts() ) { ?>
                <article class="single-post">
                    <?php the_post(); ?>
                    <a class="single-post__thumb" href='<?php the_permalink() ?>'>
                        <span class="single-post__time--absolute"><?php the_time('d.m');?><br/><strong class="single-post__time--bold-text"><?php the_time('Y');?></strong></span>
                        <?php the_post_thumbnail( array (272), [ 'class' => 'single-post__img' , 'alt' => 'miniaturka posta' ] ); ?>
                    </a>
                    <h2 class="single-post__title">
                        <a class="single-post__title--link" href='<?php the_permalink() ?>'><?php the_title(); ?></a>
                    </h2>
                    <p class="single-post__excerpt"><?php echo wp_trim_words(get_the_content(), 13);?>
                        <a class="single-post__excerpt--read-more" href='<?php the_permalink();?>'>Zobacz całość <i class="arrow-icon F-ARROW-RIGHT"></i></a>
                    </p>
                    <a class="single-post__fb-share" href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>"><i class="fb-icon F-FACEBOOK-OFFICIAL-F"></i> udostępnij</a>
                </article>
            <?php } ?>
            <section class="new-posts__pagination">
                <?php echo paginate_links(); ?>
            </section>  
        </section>

        <section class="classifier-posts"></section>

        <section class="popular-posts">
            <div class="popular-posts__header-container">
                <h3 class="popular-posts__header">Najczęściej czytane</h3>
            </div>
            <?php query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=4');
                if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="single-popular-post">
                        <a class="single-popular-post__thumb" href='<?php the_permalink() ?>'>
                            <?php the_post_thumbnail( array (57), [ 'class' => 'single-popular-post__img' , 'alt' => 'miniaturka posta' ] ); ?>
                        </a>
                        <h3 class="single-popular-post__title">
                            <a class="single-popular-post__title--link" href='<?php the_permalink() ?>'><?php the_title(); ?></a>
                        </h3>
                        <a class="single-popular-post--read-more" href='<?php the_permalink();?>'> Zobacz całość <i class="arrow-icon F-ARROW-RIGHT"></i></a>
                    </article>
            <?php
            endwhile; endif;
            wp_reset_query(); ?>
        </section>    
    </section>
</main> 
<?php get_footer(); ?>