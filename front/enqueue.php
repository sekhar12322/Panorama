<?php 
 
 function panorama_styles(){
//css
wp_register_style('shortcut_icon', get_template_directory_uri() . '/assets/images/icons/favicon.png');
wp_enqueue_style('shortcut_icon');


wp_register_style('settings_css', get_template_directory_uri() . '/assets/css/libs/revolution/settings.css');
wp_enqueue_style('settings_css');

wp_register_style('style_css', get_template_directory_uri() . '/assets/css/style.css');
wp_enqueue_style('style_css');


// wp_register_style( 'Font_Awesome', '../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js' );
// wp_enqueue_style('Font_Awesome');



//js




wp_register_script('jquery', get_template_directory_uri(). '/assets/js/libs/jquery-1.12.4.min.js', array('jquery'), false, false );
wp_register_script('bootstrap_js', get_template_directory_uri(). '/assets/js/libs/bootstrap.min.js', array('jquery'), false, false );
wp_register_script('smoothscroll_js', get_template_directory_uri(). '/assets/js/libs/smoothscroll.min.js', array('jquery'), false, false );
wp_register_script('carousel_js', get_template_directory_uri(). '/assets/js/libs/owl.carousel.min.js', array('jquery'), false, false );
wp_register_script('magnific_js', get_template_directory_uri(). '/assets/js/libs/jquery.magnific-popup.min.js', array('jquery'), false, false );
wp_register_script('sticky_js', get_template_directory_uri(). '/assets/js/libs/theia-sticky-sidebar.min.js', array('jquery'), false, false );
wp_register_script('stellar_js', get_template_directory_uri(). '/assets/js/libs/stellar.min.js', array('jquery'), false, false );
wp_register_script('counter_js', get_template_directory_uri(). '/assets/js/libs/counter-box.min.js', array('jquery'), false, false );
wp_register_script('slider_js', get_template_directory_uri(). '/assets/js/libs/jquery.thim-content-slider.min.js', array('jquery'), false, false );
wp_register_script('moment_js', get_template_directory_uri(). '/assets/js/libs/moment.min.js', array('jquery'), false, false );
wp_register_script('ui_js', get_template_directory_uri(). '/assets/js/libs/jquery-ui.min.js', array('jquery'), false, false );
wp_register_script('date_js', get_template_directory_uri(). '/assets/js/libs/daterangepicker.min.js', array('jquery'), false, false );
wp_register_script('daterange_js', get_template_directory_uri(). '/assets/js/libs/daterangepicker.min-date.min.js', array('jquery'), false, false );
wp_register_script('custom_js', get_template_directory_uri(). '/assets/js/theme-customs.js', array('jquery'), false, false );
wp_register_script('tools_js', get_template_directory_uri(). '/assets/js/libs/revolution/jquery.themepunch.tools.min.js', array('jquery'), false, false );
wp_register_script('themepunch_js', get_template_directory_uri(). '/assets/js/libs/revolution/jquery.themepunch.revolution.min.js', array('jquery'), false, false );
wp_register_script('action_js', get_template_directory_uri(). '/assets/js/libs/revolution/extensions/revolution.extension.actions.min.js', array('jquery'), false, false );
wp_register_script('carouselmin_js', get_template_directory_uri(). '/assets/js/libs/revolution/extensions/revolution.extension.carousel.min.js', array('jquery'), false, false );
wp_register_script('kenburn_js', get_template_directory_uri(). '/assets/js/libs/revolution/extensions/revolution.extension.kenburn.min.js', array('jquery'), false, false );
wp_register_script('layeranimation_js', get_template_directory_uri(). '/assets/js/libs/revolution/extensions/revolution.extension.layeranimation.min.js', array('jquery'), false, false );
wp_register_script('migration_js', get_template_directory_uri(). '/assets/js/libs/revolution/extensions/revolution.extension.migration.min.js', array('jquery'), false, false );
wp_register_script('navigation_js', get_template_directory_uri(). '/assets/js/libs/revolution/extensions/revolution.extension.navigation.min.js', array('jquery'), false, false );
wp_register_script('parallax_js', get_template_directory_uri(). '/assets/js/libs/revolution/extensions/revolution.extension.parallax.min.js', array('jquery'), false, false );
wp_register_script('videomin_js', get_template_directory_uri(). '/assets/js/libs/revolution/extensions/revolution.extension.video.min.js', array('jquery'), false, false );


wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap_js');
wp_enqueue_script('smoothscroll_js');
wp_enqueue_script('carousel_js');
wp_enqueue_script('magnific_js');
wp_enqueue_script('sticky_js');
wp_enqueue_script('stellar_js');
wp_enqueue_script('counter_js');
wp_enqueue_script('slider_js');
wp_enqueue_script('moment_js');
wp_enqueue_script('ui_js');
wp_enqueue_script('date_js');
wp_enqueue_script('daterange_js');
wp_enqueue_script('custom_js');
wp_enqueue_script('tools_js');
wp_enqueue_script('themepunch_js');
wp_enqueue_script('action_js');
wp_enqueue_script('carouselmin_js');
wp_enqueue_script('kenburn_js');
wp_enqueue_script('layeranimation_js');
wp_enqueue_script('migration_js');
wp_enqueue_script('navigation_js');
wp_enqueue_script('parallax_js');
wp_enqueue_script('videomin_js');



}

 add_action('wp_enqueue_scripts', 'panorama_styles');

?>






<!-- <script data-cfasync="false" src="<?php echo get_template_directory_uri().'/../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js';?>"></script> -->

