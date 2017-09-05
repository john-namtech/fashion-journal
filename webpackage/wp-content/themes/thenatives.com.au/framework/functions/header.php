<?php
if (!function_exists('thenatives_logo')) {
	function thenatives_logo() {
		global $thenatives;
		//$tag = (is_home() && ! is_front_page())?'h1':'h2';
		$tag = 'h2';
		?>
		<div id="logo">
			<<?php echo $tag; ?>>
				<?php if($thenatives['thenatives_logo']): ?>
					<a href="<?php echo get_site_url(); ?>">
                        <?php
                            $logo =  $thenatives['thenatives_logo'];
                            $arr_logo = explode('.',$logo);
                            if($arr_logo[count($arr_logo)-1]=='svg'){
                                $logo = file_get_contents($logo);
                                echo '<span class="logoDesktop">'.$logo.'</span>';
                            }
                            else {
                                echo '<img class="logoDesktop" src="'.$thenatives['thenatives_logo'].'" alt="'.$thenatives['thenatives_text_logo'].'"/>';
                            }
                        ?>
                        <?php if($thenatives['thenatives_sticky_header']): ?>
                            <?php
                            $logo =  $thenatives['thenatives_logo_sticky'];
                            $arr_logo = explode('.',$logo);
                            if($arr_logo[count($arr_logo)-1]=='svg'){
                                $logo = file_get_contents($logo);
                                echo '<span class="logoDesktop-sticky">'.$logo.'</span>';
                            }
                            else {
                                echo '<img class="logoDesktop-sticky" src="'.$thenatives['thenatives_logo_sticky'].'" alt="'.$thenatives['thenatives_text_logo'].'"/>';
                            }
                            ?>
                        <?php endif; ?>
					</a>
				<?php else: ?>
                    <a href="<?php echo get_site_url(); ?>">
					    <?php echo $thenatives['thenatives_text_logo']; ?>
                    </a>
				<?php endif; ?>
			</<?php echo $tag; ?>>
		</div>
		<?php 
	}
	add_action('thenatives_logo','thenatives_logo');
}

if (!function_exists('thenatives_favicon')) {
	function thenatives_favicon() {
		global $thenatives;
		if($thenatives['thenatives_favicon']) {
            echo '<link rel="shortcut icon" href="' . $thenatives['thenatives_favicon'] . '" type="image/x-icon" />' . "\n";
        }
	}
	add_action( 'wp_enqueue_scripts', 'thenatives_favicon', 10);
    add_action('admin_head', 'thenatives_favicon');
    add_action('login_head', 'thenatives_favicon');
}

if (!function_exists('thenatives_banner_top')) {
    function thenatives_banner_top() {
        ?>
        <?php if(is_category() || is_single()): ?>
            <?php
            if(is_category()) {
                $category = get_category(get_query_var('cat'), false);
                $banner_top = get_field('advertise_top','category_'.$category->term_id);
            }
            else{
                $category = get_the_category();
                $parent_cat = get_category($category[0]->category_parent);
                if(get_field('advertise_top')){
                    $banner_top = get_field('advertise_top');
                }
                else {
                    $banner_top = get_field('advertise_top','category_'.$parent_cat->term_id);
                }
            }
            ?>
            <?php if($banner_top): ?>
                <div class="banner-top">
                    <div class="imgBanner-small">
                        <?php if(get_field('url',$banner_top->ID)): ?>
                            <a href="<?php echo get_field('url',$banner_top->ID); ?>">
                                <img src="<?php echo get_field('image',$banner_top->ID); ?>">
                            </a>
                        <?php else: ?>
                            <img src="<?php echo get_field('image',$banner_top->ID); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php
    }
    add_action('thenatives_banner_top','thenatives_banner_top');
}

if( ! function_exists( 'thenatives_get_header' )){
    function thenatives_get_header(){
        global $thenatives;
        get_template_part('framework/headers/header', $thenatives['thenatives_header_style']);
    }
	add_action( 'thenatives_header_init', 'thenatives_get_header', 10 );
}

if (!function_exists('thenatives_social_icons')) {
	function thenatives_social_icons() {
		global $thenatives;
		if($thenatives['thenatives_enable_social_media_icon']){ ?>
			<div class="social-icons">
				<ul>
					<?php if(trim($thenatives['thenatives_facebook_url'])): ?>
						<li class="social facebook-social"><a href="<?php echo trim($thenatives['thenatives_facebook_url']); ?>" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<?php endif; ?>

					<?php if(trim($thenatives['thenatives_twitter_url'])): ?>
						<li class="social twitter-social"><a href="<?php echo trim($thenatives['thenatives_twitter_url']); ?>" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<?php endif; ?>
					
					<?php if(trim($thenatives['thenatives_google_plus_url'])): ?>
						<li class="social google-plus-social"><a href="<?php echo trim($thenatives['thenatives_google_plus_url']); ?>" target="blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<?php endif; ?>

					<?php if(trim($thenatives['thenatives_youtube_url'])): ?>
						<li class="social youtube-social"><a href="<?php echo trim($thenatives['thenatives_youtube_url']); ?>" target="blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
					<?php endif; ?>

					<?php if(trim($thenatives['thenatives_instagram_url'])): ?>
						<li class="social instagram-social"><a href="<?php echo trim($thenatives['thenatives_instagram_url']); ?>" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<?php endif; ?>

					<?php if(trim($thenatives['thenatives_linkedin_url'])): ?>
						<li class="social linkedin-social"><a href="<?php echo trim($thenatives['thenatives_linkedin_url']); ?>" target="blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<?php endif; ?>

					<?php if(trim($thenatives['thenatives_pinterest_url'])): ?>
						<li class="social pinterest-social"><a href="<?php echo trim($thenatives['thenatives_pinterest_url']); ?>" target="blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<?php endif; ?>

					<?php if(trim($thenatives['thenatives_flickr_url'])): ?>
						<li class="social flickr-social"><a href="<?php echo trim($thenatives['thenatives_flickr_url']); ?>"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
					<?php endif; ?>
				</ul>
			</div>
		<?php 
		}
	}
	add_action('thenatives_social_icons','thenatives_social_icons',10);
}