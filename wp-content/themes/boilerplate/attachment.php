<?php get_header() ?>
<?php global $post ?>
    <section id="content" role="main">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
                <?php the_post() ?>
                <header class="header">
                    <h1 class="entry-title"><?php the_title() ?>
                        <span class="meta-sep">|</span>
                        <a href="<?= get_permalink($post->post_parent) ?>"
                           title="<?php printf(__('Return to %s', 'starter_kit'), esc_html(get_the_title($post->post_parent), 1)) ?>"
                           rev="attachment">
                            <span class="meta-nav">&larr; </span><?= get_the_title($post->post_parent) ?>
                        </a>
                    </h1><?php edit_post_link() ?>
                    <?php get_template_part('entry', 'meta') ?>
                </header>
                <article id="post-<?php the_ID() ?>" <?php post_class() ?>>
                    <header class="header">
                        <nav id="nav-above" class="navigation" role="navigation">
                            <div class="nav-previous"><?php previous_image_link(false, '&larr;') ?></div>
                            <div class="nav-next"><?php next_image_link(false, '&rarr;') ?></div>
                        </nav>
                    </header>
                    <section class="entry-content">
                        <div class="entry-attachment">
                            <?php if (wp_attachment_is_image($post->ID)): ?>
                                <?php $att_image = wp_get_attachment_image_src($post->ID, "large") ?>
                                <p class="attachment">
                                    <a href="<?= wp_get_attachment_url($post->ID) ?>"
                                       title="<?php the_title() ?>" rel="attachment">
                                        <img src="<?= $att_image[0] ?>" width="<?= $att_image[1] ?>"
                                             height="<?= $att_image[2] ?>" class="attachment-medium"
                                             alt="<?php $post->post_excerpt ?>"/>
                                    </a>
                                </p>
                            <?php else : ?>
                                <a href="<?= wp_get_attachment_url($post->ID) ?>"
                                   title="<?= esc_html(get_the_title($post->ID), 1) ?>"
                                   rel="attachment"><?= basename($post->guid) ?></a>
                            <?php endif ?>
                        </div>
                        <div class="entry-caption"><?php if (!empty($post->post_excerpt)) the_excerpt() ?></div>
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail() ?>
                        <?php endif ?>
                    </section>
                </article>
                <?php comments_template() ?>
            <?php endwhile ?>
        <?php endif ?>
    </section>
<?php get_sidebar() ?>
<?php get_footer() ?>