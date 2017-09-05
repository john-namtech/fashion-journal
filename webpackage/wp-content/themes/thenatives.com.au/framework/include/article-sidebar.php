<?php
if(get_field('up_next')) {
    $nextpost = get_field('up_next_post')?get_field('up_next_post'):false;
}
else {
    $nextpost = get_next_post(true);
}
?>
<?php if($nextpost):?>
    <div class="upNext pull-right">
        <a href="<?php echo get_the_permalink($nextpost->ID); ?>">
            <img class="img-responsive pull-left" src="<?php echo get_the_post_thumbnail_url($nextpost->ID); ?>" alt="image">
            <div class="contentUpNext pull-right">
                <label>up next:</label>
                <p><?php echo get_the_title($nextpost->ID); ?></p>
            </div>
            <div class="clearfix"></div>
        </a>
    </div>
<?php endif; ?>
<?php
$category = get_the_category();
$parent_cat = get_category($category[0]->category_parent);
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