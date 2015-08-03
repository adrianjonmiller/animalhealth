<?php


add_shortcode('wpv-filter-meta-html', 'wpv_filter_meta_html');
function wpv_filter_meta_html($atts) {
    extract(
        shortcode_atts( array(), $atts )
    );

    global $WP_Views;
    $view_settings = $WP_Views->get_view_settings();
    
    if (isset($view_settings['filter_meta_html'])) {
		
        $content = wpml_content_fix_links_to_translated_content($view_settings['filter_meta_html']);
        
        return wpv_do_shortcode($content);
    } else {
        return '';
    }
}
