<main id="articleShoot-Page" class="articleShoot">
    <section class="container">
        <div class="articleMeta">
            <div class="row">
                <?php
                $category = get_the_category();
                $parent_cat = get_category($category[0]->category_parent);
                while ($parent_cat->category_parent) {
                    $parent_cat = get_category($parent_cat->category_parent);
                }
                ?>
                <div class="col-lg-7 col-md-8 col-sm-7 col-xs-6">
                    <a href="<?php echo get_category_link($parent_cat); ?>"
                       class="tagName fashion"><?php echo $parent_cat->name; ?></a>
                    <span class="titleText"><?php echo $category[0]->name; ?></span>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-5 col-xs-6">
                    <span class="titleText"><?php echo get_the_date('d.m.Y'); ?></span>
                </div>
            </div>
        </div>

        <div class="articleHeader">
            <?php if (have_rows('slider')): ?>
                <div class="articleSliderShoot">
                    <?php $i = 0;
                    while (have_rows('slider')): the_row();
                        $i++; ?>
                        <div class="articleShootSlide">
                            <?php $caption = get_sub_field('caption') ? get_sub_field('caption') : ('Slider ' . $i); ?>
                            <img src="<?php the_sub_field('image'); ?>" alt="<?php echo $caption; ?>">
                            <h4><?php echo $caption; ?></h4>
                            <div class="wrapperHeader">
                                <h1 class="titleArticle_Shoot"><?php the_title() ?></h1>
                                <p class="description_TitleArticle_Shoot"><?php the_sub_field('description'); ?></p>
                                <p class="descriptionContent_TitleArticle_Shoot"><?php the_sub_field('content_banner'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="contentArticle">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                    <?php if (have_rows('slider')): ?>
                    <div class="sliderPost row">
                        <?php
                            $i = 0;
                            while (have_rows('slider')): the_row(); $i++;
                        ?>
                        <div class="sliderPostItem col-lg-6 col-me-6 col-sm-12 col-xs-12">
                            <p class="numberSliderPost"><?php echo ($i<10)?('0'.$i):$i; ?></p>
                            <?php $caption = get_sub_field('caption') ? get_sub_field('caption') : ('Slider ' . $i); ?>
                            <img class="img-responsive imageSliderPost"
                                 src="<?php the_sub_field('image'); ?>" alt="<?php echo $caption; ?>">
                            <p class="descriptionSliderPost"><?php the_sub_field('content_thumbnail'); ?></p>
                        </div>
                        <?php ;endwhile; ?>
                    </div>
                    <?php endif; ?>

                    <?php get_template_part('framework/include/sharebox'); ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    <?php get_template_part('framework/include/article-sidebar'); ?>
                </div>
            </div>
        </div>

        <?php get_template_part('framework/include/related'); ?>
    </section>
</main>