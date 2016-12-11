<footer class="entry-footer">
    <span class="cat-links"><?php _e('Categories: ', 'starter_kit') ?><?php the_category(', ') ?></span>
    <span class="tag-links"><?php the_tags() ?></span>
    <?php if (comments_open()): ?>
        <span class="meta-sep">|</span>
        <span class="comments-link">
          <a href="<?= get_comments_link() ?>">
              <?= sprintf(__('Comments', 'starter_kit')) ?>
          </a>
        </span>
    <?php endif ?>
</footer> 