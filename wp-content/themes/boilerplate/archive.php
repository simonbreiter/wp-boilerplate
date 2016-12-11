<?php get_header() ?>
    <section id="content" role="main">
        <header class="header">
            <h1 class="entry-title">
                <?php if (is_day()): ?>
                    <?php printf(__('Daily Archives: %s', 'starter_kit'), get_the_time(get_option('date_format'))) ?>
                <?php elseif (is_month()): ?>
                    <?php printf(__('Monthly Archives: %s', 'starter_kit'), get_the_time('F Y')) ?>
                <?php elseif (is_year()): ?>
                    <?php printf(__('Yearly Archives: %s', 'starter_kit'), get_the_time('Y')) ?>
                <?php else : ?>
                    <?php _e('Archives', 'starter_kit') ?>
                <?php endif ?>
            </h1>
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