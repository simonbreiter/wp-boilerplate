<?php get_header() ?>
    <section id="content" role="main">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
                <?php the_post() ?>
                <?php get_template_part('entry') ?>
                <?php comments_template() ?>
            <?php endwhile ?>
        <?php endif ?>
        <?php get_template_part('nav', 'below') ?>
    </section>
<?php get_sidebar() ?>
<?php get_footer() ?>