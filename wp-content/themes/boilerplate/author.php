<?php get_header() ?>
    <section id="content" role="main">
        <header class="header">
            <?php the_post() ?>
            <h1 class="entry-title author"><?php _e('Author Archives', 'starter_kit') ?>
                : <?php the_author_link() ?></h1>
            <?php if ('' != get_the_author_meta('user_description')): ?>
                <?= apply_filters('archive_meta', '<div class="archive-meta">' . get_the_author_meta('user_description') . '</div>') ?>
            <?php endif ?>
            <?php rewind_posts() ?>
        </header>
        <?php while (have_posts()): ?>
            <?php the_post() ?>
            <?php get_template_part('entry') ?>
        <?php endwhile ?>
        <?php get_template_part('nav', 'below') ?>
    </section>
<?php get_sidebar() ?>
<?php get_footer() ?>