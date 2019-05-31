<?php get_header();?>
<?php setPostViews( get_the_ID() );?>
<main class="main">
    <ol class="breadcrumbs"><?php get_breadcrumb(); ?></ol>
    <?php the_post_thumbnail( array (1170), [ 'class' => 'hero-img' , 'alt' => 'główne zdjęcie postu' ] ); ?>
    <section class="post-header">
        <span class="post-header__time"><?php the_time('d.m.Y');?></span>
        <h1 class="post-header__title"><?php the_title(); ?></h1>
    </section>
    <section class="post-author">
        <img class="post-author__photo" src="<?php echo get_avatar_url( get_current_user_id()); ?>" alt="zdjęcie autora">
        <strong class="post-author__name"><?php the_author_meta('display_name', 1); ?></strong>
        <p class="post-author__position"><?php the_author_meta('description', 1); ?></p>
        <a class="post-author__ask" href="https://rafalfuczynski.com">Chcesz coś zlecić?</a>
    </section>
    <article class="post-content">
        <?php while ( have_posts() ) {
            the_post();
            the_content();
        } ?>
    </article>
    <section class="post-share">
        <a class="post-share--sticky" href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>"><i class="fb-icon F-FACEBOOK-OFFICIAL-F"></i><br>udostępnij</a>
    </section>     
    <section class="post-tags-header-container">
        <h3 class="post-tags-header">Tagi</h3>
    </section>
    <section class="post-tags-list">
        <?php the_tags('','',''); ?>
    </section>
    <section class="pp-popular-posts">
        <div class="pp-popular-posts__header-container">
            <h3 class="pp-popular-posts__header">Najczęściej czytane</h3>
        </div>
        <?php query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=4');
            if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
            <article class="pp-single-popular-post">
                <a class="pp-single-popular-post__thumb" href='<?php the_permalink() ?>'>
                    <?php the_post_thumbnail( array (300), [ 'class' => 'pp-single-popular-post__img' , 'alt' => 'miniaturka posta' ] ); ?>
                </a>
                <h3 class="pp-single-popular-post__title">
                    <a class="pp-single-popular-post__title--link" href='<?php the_permalink() ?>'><?php the_title(); ?></a>
                </h3>
                <a class="pp-single-popular-post--read-more" href='<?php the_permalink();?>'>Zobacz całość <i class="arrow-icon F-ARROW-RIGHT"></i></a>
            </article>
            
        <?php
        endwhile; endif;
        wp_reset_query();
        ?>
    </section>
    <?php comments_template(); ?>
</main>
<?php get_footer(); ?>