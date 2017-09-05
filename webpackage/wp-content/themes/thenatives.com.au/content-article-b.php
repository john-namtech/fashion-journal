<main id="articleB-Page" class="articleB">
    <section class="container">
        <div class="articleMeta">
            <div class="row">
                <?php
                $category = get_the_category();
                $parent_cat = get_category($category[0]->category_parent);
                while($parent_cat->category_parent){
                    $parent_cat = get_category($parent_cat->category_parent);
                }
                ?>
                <div class="col-lg-7 col-md-8 col-sm-7 col-xs-6">
                    <?php if($category): ?>
                        <?php if($parent_cat): ?>
                            <a href="<?php echo get_category_link($parent_cat); ?>" class="tagName fashion"><?php echo $parent_cat->name; ?></a>
                        <?php endif; ?>
                        <span class="titleText"><?php echo $category[0]->name; ?></span>
                    <?php endif; ?>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-5 col-xs-6">
                    <span class="titleText"><?php echo get_the_date('d.m.Y'); ?></span>
                </div>
            </div>
        </div>

        <div class="articleHeader">
            <h1 class="titleArticle_B"><?php the_title(); ?></h1>
            <?php if(have_rows('slider')):?>
                <div class="articleSlider">
                    <?php $i=0; while (have_rows('slider')): the_row(); $i++; ?>
                        <div class="articleCSlide">
                            <?php $caption = get_sub_field('caption')?get_sub_field('caption'):('Slider '.$i); ?>
                            <img src="<?php the_sub_field('image'); ?>" alt="<?php echo $caption; ?>">
                            <h4><?php echo $caption; ?></h4>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="contentArticle">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                    <?php if(get_field('author') || get_field('photographer')): ?>
                        <div class="titleText">
                            <?php if(get_field('author')): ?>
                                <div>WORDS BY <?php the_field('author'); ?></div>
                            <?php endif; ?>
                            <?php if(get_field('author')): ?>
                                <div>Photography by <?php the_field('photographer'); ?></div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <div class="wrapperContain">
                        <?php the_content(); ?>
                    </div>

                    <?php get_template_part('framework/include/sharebox'); ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    <div class="advertisement pull-right">
                        <img class="img-responsive pull-left" src="<?php echo THEME_IMAGES; ?>/asos-1.png" alt="image">
                        <div class="contentAdvertisement pull-right">
                            <p>THIS ARTICLE IS PROUDLY BOUGHT TO YOU BY ASOS & FASHION JOURNAL</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?php
                    if(get_field('advertise_right')){
                        $banner_right = get_field('advertise_right');
                    }
                    else {
                        $banner_right = get_field('advertise_right','category_'.$parent_cat->term_id);
                    }
                    ?>
                    <?php if($banner_right): ?>
                        <div class="sideBarImage pull-right">
                            <img class="img-responsive" src="<?php the_field('image',$banner_right->ID); ?>"
                                 alt="<?php echo get_the_title($banner_right->ID); ?>">
                        </div>
                        <div class="clearfix"></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php get_template_part('framework/include/related'); ?>
    </section>
</main>