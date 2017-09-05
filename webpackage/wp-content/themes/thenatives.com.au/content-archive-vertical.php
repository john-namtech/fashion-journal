<main class="layout-vertical">
    <section class="contentVertical">
        <?php
        $category = get_category(get_query_var('cat'),false);
        ?>
        <?php
        global $wp_query;
        $args = array(
            'post_type'				=> 'post',
            'post_status'			=> 'publish',
            'posts_per_page' 		=> 2,
            'orderby' 				=> 'date',
            'order'                 => 'DESC',
            'cat'                   => $category->term_id,
        );
        $wp_query = new WP_Query( $args );
        ?>
        <div class="container">
            <div class="row imgPosts">
                <?php if (have_posts()) : ?>
                    <?php while(have_posts()): the_post();?>
                        <div class="colVer">
                            <?php get_template_part('content', 'archive-large'); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                <div class="colVer">
                    <div class="hrefThumbnails">
                        <a class="imageThumbnails">
                            <img class="img-responsive image-lg" src="<?php echo THEME_IMAGES; ?>/post-3.png" alt="image">
                            <div class="boxContain contentThumbnails-Left">
                                <div class="innerBoxContain textLabels-Left bigText">
                                    <p >19 of Our Favourite Sustainably Sourced Local Labels</p>
                                    <span class="tagName sponsored">sponsored</span>
                                </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if($banner_middle = get_field('advertise_middle','category_'.$category->term_id)): ?>
    <section class="bgNeuw">
        <div class="imgBanner">
            <?php if(get_field('url',$banner_middle->ID)): ?>
            <a href="<?php echo get_field('url',$banner_middle->ID); ?>">
                <img src="<?php echo get_field('image',$banner_middle->ID); ?>">
            </a>
            <?php else: ?>
                <img src="<?php echo get_field('image',$banner_middle->ID); ?>">
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <section class="groupPost">
        <div class="container">
            <div class="titleOla">
                <p>Ola.</p>
            </div>
            <?php
            global $wp_query;
            $args = array(
                'post_type'				=> 'post',
                'post_status'			=> 'publish',
                'posts_per_page' 		=> 8,
                'offset'                => 2,
                'orderby' 				=> 'date',
                'order'                 => 'DESC',
                'cat'                   => $category->term_id,
            );
            $wp_query = new WP_Query( $args );
            ?>
            <?php if (have_posts()) : ?>
            <div class="row imgPosts">
                <?php while(have_posts()): the_post();?>
                    <div class="col-sm-3 col-xs-6 colImages">
                        <?php get_template_part('content', 'archive-medium'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </section>

    <?php if($banner_bottom = get_field('advertise_bottom','category_'.$category->term_id)): ?>
    <section class="bgNeuw">
        <div class="imgBanner-small">
            <?php if(get_field('url',$banner_bottom->ID)): ?>
                <a href="<?php echo get_field('url',$banner_bottom->ID); ?>">
                    <img src="<?php echo get_field('image',$banner_bottom->ID); ?>">
                </a>
            <?php else: ?>
                <img src="<?php echo get_field('image',$banner_bottom->ID); ?>">
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>
</main>
