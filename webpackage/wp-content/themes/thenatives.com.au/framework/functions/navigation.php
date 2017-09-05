<?php
add_filter('wp_nav_menu_objects', 'ad_filter_category_menu', 10, 2);
function ad_filter_category_menu($sorted_menu_objects, $args) {
    foreach ($sorted_menu_objects as $menu_object) {
        if($menu_object->object=='category'){
            $catid = $menu_object->object.'_'.$menu_object->object_id;
            $data_bg = get_field('background_color',$catid)?(' data-bg="'.get_field('background_color',$catid).'"'):'';
            $data_color = get_field('text',$catid)?(' data-color="'.get_field('text',$catid).'"'):'';
            $menu_object->title = '<span'.$data_bg.$data_color.'><span class="before"></span>' . $menu_object->title . '<span class="after"></span></span>';
        }
        else {
            $menu_object->title = '<span>'.$menu_object->title.'</span>';
        }
    }
    return $sorted_menu_objects;
}