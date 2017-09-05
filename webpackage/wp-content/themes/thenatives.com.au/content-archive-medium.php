<div class="hrefThumbnails">
    <a href="<?php the_permalink(); ?>" class="imageThumbnails">
        <?php if(has_post_thumbnail()): ?>
        <img class="img-responsive image-md" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        <?php endif; ?>
        <div class="boxContain contentThumbnails-<?php echo ucfirst(get_field('position')); ?>">
            <div class="innerBoxContain textBottom containerText">
                <p class="size-other"><?php the_title(); ?></p>
            </div>
        </div>
    </a>
    <div class="clearfix"></div>
</div>