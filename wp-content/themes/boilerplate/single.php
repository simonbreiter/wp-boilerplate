<?php get_header() ?>
    <section id="content" role="main">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
                <? the_post() ?>
                <?php get_template_part('entry') ?>
                <?php if (!post_password_required()) comments_template('', true) ?>
            <?php endwhile ?>
        <?php endif ?>
        <footer class="footer">
            <?php get_template_part('nav', 'below-single') ?>
        </footer>
    </section>
<?php get_sidebar() ?>
<?php get_footer() ?>