<?php get_header() ?>
    <section id="content" role="main">
        <header class="header">
            <h1 class="entry-title"><?php _e('Category Archives: ', 'starter_kit') ?><?php single_cat_title() ?></h1>
            <?php if ('' != category_description()): ?>
                <?= apply_filters('archive_meta', '<div class="archive-meta">' . category_description() . '</div>') ?>
            <?php endif ?>
        </header>
        <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
                <?php the_post() ?>
                <?php get_template_part('entry') ?>
            <?php endwhile ?>
        <?php endif ?>
        <?php get_template_part('nav', 'below') ?>
    </section>
<?php get_sidebar() ?>
<?php get_footer() ?>