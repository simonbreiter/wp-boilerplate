<section class="entry-content">
    <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail() ?>
    <?php endif ?>
    <?php the_content() ?>
    <div class="entry-links"><?php wp_link_pages() ?></div>
</section>