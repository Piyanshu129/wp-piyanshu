<?php
if (!function_exists('blogdu_front_page_banner_section')) :
    /**
     *
     * @since blogdu
     *
     */
    function blogdu_front_page_banner_section()
    {
        if (is_front_page() || is_home()) {
        $blogus_enable_main_slider = get_theme_mod('show_main_news_section',1);
        $select_vertical_slider_news_category = blogus_get_option('select_vertical_slider_news_category');
        $all_posts_vertical = blogus_get_posts($select_vertical_slider_news_category);
        if ($blogus_enable_main_slider): ?>
         <div class="col-12 cc mb-5">
            <div class="homemain bs swiper-container">
                <div class="swiper-wrapper">
                   <?php blogdu_get_block('list', 'banner'); ?>         
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <!--==/ Home Slider ==-->
        <?php endif; ?>
        <!-- end slider-section -->
        <?php }
    }
endif;
add_action('blogdu_action_front_page_main_section_1', 'blogdu_front_page_banner_section', 40); ?>
