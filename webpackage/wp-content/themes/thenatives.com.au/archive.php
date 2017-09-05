<?php get_header(); ?>
<?php
    if(is_category()){
        $category = get_queried_object();
        $style =  get_field('style', $category)?get_field('style', $category):'';
    }
    $style = (isset($style) && $style)?$style:'vertical';
    if(!file_exists(THEME_DIR.'/content-archive-'.$style.'.php')){
        $style = 'vertical';
    }
    get_template_part('content','archive-'.$style);

?>
<?php get_footer(); ?>