<?php
/*
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>
<section>

    <div class="contentVertical">
        <?php
        $category = get_category(get_query_var('cat'), false);
        ?>
        <?php
        global $wp_query;
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 2,
            'orderby' => 'date',
            'order' => 'DESC',
            'cat' => $category->term_id,
        );
        $wp_query = new WP_Query($args);
        ?>
        <div class="container">
            <div class="row imgPosts">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()): the_post(); ?>
                        <div class="colVer">
                            <?php get_template_part('content', 'archive-large'); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                <div class="colVer">
                    <div class="hrefThumbnails">
                        <a class="imageThumbnails">
                            <img class="img-responsive image-lg" src="<?php echo THEME_IMAGES; ?>/post-3.png"
                                 alt="image">
                            <div class="boxContain contentThumbnails-Left">
                                <div class="innerBoxContain textLabels-Left bigText">
                                    <p>19 of Our Favourite Sustainably Sourced Local Labels</p>
                                    <span class="tagName sponsored">sponsored</span>
                                </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="verticalSpacing-lg"></div>

    <div class="sliderE">
        <div class="container">
            <div class="row">
                <div class="tag tagE col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <a href="">
                        <img class=" image-sm" src="<?php echo THEME_IMAGES; ?>/e@1x.svg" alt="tag E">
                    </a>
                </div>
                <div class="wrapperSlider col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/image.png"
                                     alt="image">
                                <div class="boxContain contentThumbnails-Bottom">
                                    <div class="innerBoxContain beforeHover">
                                        <p>19-20 <br/> may</p>
                                    </div>
                                    <div class="innerBoxContain afterHover">
                                        <p>add to calendar</p>
                                        <span class="tagName sales">sales</span>
                                    </div>
                                </div>
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES;?>/image12x.jpg"
                                     alt="image">
                                <div class="boxContain contentThumbnails-Bottom">
                                    <div class="innerBoxContain beforeHover">
                                        <p>now til 26 jun</p>
                                    </div>
                                    <div class="innerBoxContain afterHover">
                                        <p>add to calendar</p>
                                        <span class="tagName sales">sales</span>
                                    </div>
                                </div>
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/image22x.jpg"
                                     alt="image">
                                <div class="boxContain contentThumbnails-Bottom">
                                    <div class="innerBoxContain beforeHover">
                                        <p>27 may</p>
                                    </div>
                                    <div class="innerBoxContain afterHover">
                                        <p>add to calendar</p>
                                        <span class="tagName sales">sales</span>
                                    </div>
                                </div>
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/image32x.jpg"
                                     alt="image">
                                <div class="boxContain contentThumbnails-Bottom">
                                    <div class="innerBoxContain beforeHover">
                                        <p>now til 20 jul</p>
                                    </div>
                                    <div class="innerBoxContain afterHover">
                                        <p>add to calendar</p>
                                        <span class="tagName sales">sales</span>
                                    </div>
                                </div>
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/image42x.jpg"
                                     alt="image">
                                <div class="boxContain contentThumbnails-Bottom">
                                    <div class="innerBoxContain beforeHover">
                                        <p>19-20 <br/> may</p>
                                    </div>
                                    <div class="innerBoxContain afterHover">
                                        <p>add to calendar</p>
                                        <span class="tagName sales">sales</span>
                                    </div>
                                </div>
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/image52x.jpg"
                                     alt="image">
                                <div class="boxContain contentThumbnails-Bottom">
                                    <div class="innerBoxContain beforeHover">
                                        <p>now til aug</p>
                                    </div>
                                    <div class="innerBoxContain afterHover">
                                        <p>add to calendar</p>
                                        <span class="tagName sales">sales</span>
                                    </div>
                                </div>
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/image62x.jpg"
                                     alt="image">
                                <div class="boxContain contentThumbnails-Bottom">
                                    <div class="innerBoxContain beforeHover">
                                        <p>27 may</p>
                                    </div>
                                    <div class="innerBoxContain afterHover">
                                        <p>add to calendar</p>
                                        <span class="tagName sales">sales</span>
                                    </div>
                                </div>
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/image72x.jpg"
                                     alt="image">
                                <div class="boxContain contentThumbnails-Bottom">
                                    <div class="innerBoxContain beforeHover">
                                        <p>19-20 may</p>
                                    </div>
                                    <div class="innerBoxContain afterHover">
                                        <p>add to calendar</p>
                                        <span class="tagName sales">sales</span>
                                    </div>
                                </div>
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/imagevent2.png"
                                     alt="image">
                                <div class="boxContain contentThumbnails-Bottom">
                                    <div class="innerBoxContain beforeHover">
                                        <p>19-20 may</p>
                                    </div>
                                    <div class="innerBoxContain afterHover">
                                        <p>add to calendar</p>
                                        <span class="tagName sales">sales</span>
                                    </div>
                                </div>
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/imagevent3.png"
                                     alt="image">
                                <div class="boxContain contentThumbnails-Bottom">
                                    <div class="innerBoxContain beforeHover">
                                        <p>19-20 may</p>
                                    </div>
                                    <div class="innerBoxContain afterHover">
                                        <p>add to calendar</p>
                                        <span class="tagName sales">sales</span>
                                    </div>
                                </div>
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/imagevent4.png"
                                     alt="image">
                                <div class="boxContain contentThumbnails-Bottom">
                                    <div class="innerBoxContain beforeHover">
                                        <p>19-20 may</p>
                                    </div>
                                    <div class="innerBoxContain afterHover">
                                        <p>add to calendar</p>
                                        <span class="tagName sales">sales</span>
                                    </div>
                                </div>
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/post-3.png"
                                     alt="image">
                                <div class="boxContain contentThumbnails-Bottom">
                                    <div class="innerBoxContain beforeHover">
                                        <p>19-20 may</p>
                                    </div>
                                    <div class="innerBoxContain afterHover">
                                        <p>add to calendar</p>
                                        <span class="tagName sales">sales</span>
                                    </div>
                                </div>
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/screen-shot-2017-05-19-at-8-44-32-am.png"
                                     alt="image">
                                <div class="boxContain contentThumbnails-Bottom">
                                    <div class="innerBoxContain beforeHover">
                                        <p>19-20 may</p>
                                    </div>
                                    <div class="innerBoxContain afterHover">
                                        <p>add to calendar</p>
                                        <span class="tagName sales">sales</span>
                                    </div>
                                </div>
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="verticalSpacing-lg"></div>

    <div class="groupPost homepageA">
        <div class="container">
            <div class="row">
                <div class="titleOla col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                    <div class="imgPosts">
                        <?php while(have_posts()): the_post();?>
                            <div class="col-sm-3 col-xs-6 colImages">
                                <?php get_template_part('content', 'archive-medium'); ?>
                            </div>
                        <?php endwhile; ?>
                        <div class="clearfix"></div>
                    </div>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>

    <div class="verticalSpacing-lg"></div>

    <div class="sliderC">
        <div class="container">
            <div class="row">
                <div class="tag tagc col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <a href="">
                        <img class="image-sm" src="<?php echo THEME_IMAGES; ?>/c@1x.svg" alt="tag C">
                    </a>
                </div>
                <div class="wrapperSlider col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/image.png"
                                     alt="image">
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="nameModel">Jo Mercer</p>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES;?>/image12x.jpg"
                                     alt="image">
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="nameModel">Jac + Jack</p>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/image22x.jpg"
                                     alt="image">
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="nameModel">Bardot</p>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/image32x.jpg"
                                     alt="image">
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="nameModel">Spring Court</p>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/image42x.jpg"
                                     alt="image">
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="nameModel">Mon Purse</p>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/image52x.jpg"
                                     alt="image">
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="nameModel">By Johnny</p>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/image62x.jpg"
                                     alt="image">
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="nameModel">Jo Mercer</p>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/image72x.jpg"
                                     alt="image">
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="nameModel">Jo Mercer</p>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/imagevent2.png"
                                     alt="image">
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="nameModel">Jo Mercer</p>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/imagevent3.png"
                                     alt="image">
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="nameModel">Jo Mercer</p>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/imagevent4.png"
                                     alt="image">
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="nameModel">Jo Mercer</p>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/post-3.png"
                                     alt="image">
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="nameModel">Jo Mercer</p>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="itemSlider">
                        <div class="hrefThumbnails">
                            <a class="imageThumbnails">
                                <img class="img-responsive image-sm" src="<?php echo THEME_IMAGES; ?>/screen-shot-2017-05-19-at-8-44-32-am.png"
                                     alt="image">
                            </a>
                            <h6 class="thumbnailLocal">melbourne</h6>
                            <p class="nameModel">Jo Mercer</p>
                            <p class="thumbnailName">Ginger & Smart <br/> Warehouse Sale</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
