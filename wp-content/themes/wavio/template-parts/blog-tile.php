<div class="col-lg p-0 blog-tile">
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <div class="blog-tile-<?php if(has_post_thumbnail()) {echo esc_attr('empty-');}?>placeholder">
            <?php
            get_template_part('template-parts/featured-media');
            ?>
        </div>
        <div class="blog-tile-content">
            <?php
            get_template_part('template-parts/blog-entry-header');
            ?>
            <a href="<?php echo get_the_permalink() ?>">
                <div class="d-inline-block elementor-button-link elementor-button elementor-size-md"><?php echo esc_html__('Read more', 'wavio') ?></div>
            </a>
        </div>
    </article>
</div>