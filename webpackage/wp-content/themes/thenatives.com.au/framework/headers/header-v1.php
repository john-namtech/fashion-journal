<?php global $thenatives; ?>
<header id="header" class="header-v1<?php if($thenatives['thenatives_sticky_header']) echo ' sticky'?>">
    <?php do_action('thenatives_banner_top');?>
	<div class="header-main">
		<div class="container">
            <div class="row">

                <?php if(is_single()): ?>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 wrapperLogo">
                    <?php else: ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 wrapperLogo">
                        <?php endif; ?>
                    <?php do_action('thenatives_logo');?>
                </div>


                <?php if(is_single()): ?>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 socialHeader flexDisplay">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 padding-space">
                        <?php get_template_part('framework/include/sharebox'); ?>
                    </div>

                    <div class="col-lg-10 col-lg-10 col-lg-10 col-xs-10 showPost">
                        <?php $prevpost = get_previous_post(true); ?>
                        <?php if($prevpost): ?>
                        <div class="prevPost col-lg-6 col-lg-6 col-lg-6 col-xs-6">
                            <a href="<?php echo get_the_permalink($nextpost->ID); ?>">
                                <?php if(has_post_thumbnail($prevpost->ID)): ?>
                                    <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($prevpost->ID); ?>">
                                <?php endif; ?>
                                <div class="wrapperContentPostHeader">
                                    <p class="titleTextPost"><?php echo get_the_title($prevpost->ID); ?></p>
                                </div>
                            </a>
                        </div>
                        <?php endif; ?>
                        <div class="currentPost col-lg-12 col-lg-12 col-lg-12 col-xs-12">
                            <?php if(has_post_thumbnail()): ?>
                                <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>">
                            <?php endif; ?>
                            <div class="wrapperContentPostHeader">
                                <p class="status">reading</p>
                                <p class="titleTextPost"><?php the_title(); ?></p>
                            </div>
                        </div>
                        <?php $nextpost = get_next_post(true); ?>
                        <?php if($nextpost): ?>
                        <div class="nextPost col-lg-6 col-lg-6 col-lg-6 col-xs-6">
                            <a href="<?php echo get_the_permalink($nextpost->ID); ?>">
                                <?php if(has_post_thumbnail($nextpost->ID)): ?>
                                <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($nextpost->ID); ?>">
                                <?php endif; ?>
                                <div class="wrapperContentPostHeader">
                                    <p class="titleTextPost"><?php echo get_the_title($nextpost->ID); ?></p>
                                </div>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>

                <?php if(is_single()): ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 flexDisplay">
                <?php else: ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 flexDisplay">
                <?php endif; ?>
                    <?php if(!is_front_page() && !is_single() && !is_404()): ?>
                        <?php
                        if(is_category()){
                            $catid = get_queried_object();
                            $data_bg = get_field('background_color',$catid)?(' background-color: '.get_field('background_color',$catid).';'):'';
                            $data_color = get_field('text',$catid)?(' color: '.get_field('text',$catid).';'):'';
                            echo '<h1 class="verticalTitle pull-left" style="'.$data_bg.$data_color.'">'.$catid->name.'</h1>';
                        }
                        else {
                            echo '<h1 class="verticalTitle pull-left">'.get_the_title().'</h1>';
                        }?>
                    <?php endif; ?>
                    <div class="buttonMenu pull-right">
                        <img class="tagButtonMenu tagE" src="<?php echo THEME_IMAGES; ?>/TagE.png" alt="Tag E">
                        <img class="tagButtonMenu tagF" src="<?php echo THEME_IMAGES; ?>/TagF.png" alt="Tag F">
                        <img class="tagButtonMenu tagS" src="<?php echo THEME_IMAGES; ?>/TagS.png" alt="Tag S">
                        <button>SECTIONS</button>
                    </div>
                </div>
                <nav id="menu" class="nav menu">
                    <a class="closeButton">
                        <img class="blackClose" src="<?php echo THEME_IMAGES; ?>/close-black.svg" alt="image">
                    </a>
                    <?php if ( has_nav_menu( 'category' ) ) : ?>
                        <?php wp_nav_menu( array( 'theme_location' => 'category' ) ); ?>
                    <?php endif; ?>

                    <?php if ( has_nav_menu( 'social' ) ) : ?>
                        <?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
                    <?php endif; ?>

                    <?php if ( has_nav_menu( 'page' ) ) : ?>
                        <?php wp_nav_menu( array( 'theme_location' => 'page' ) ); ?>
                    <?php endif; ?>
                </nav>
            </div>
		</div>
	</div>
</header>