<?php
$evolve_css_version = '?ver=' . rawurlencode( EVOLVE_THEME_VERSION );
$options = get_option('evolve');
  if ($options['evl_pos_sidebar'] == "right") { ?>
  
  <?php } if ($options['evl_pos_sidebar'] == "left") { ?> 
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/2col-l.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
   
  <?php } if ($options['evl_pos_sidebar'] == "left" && $options['evl_sidebar_num'] == "two") { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/3col-l.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
  <?php } if ($options['evl_pos_sidebar'] == "right" && $options['evl_sidebar_num'] == "two") { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/3col-r.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
  
    <?php } if ($options['evl_pos_sidebar'] == "left_right" && $options['evl_sidebar_num'] == "two") { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/3col-l+r.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
  
  
  <?php } if ($options['evl_width_layout'] == "fluid") { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/fluid.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
  <?php } if ($options['evl_width_layout'] == "fluid" && $options['evl_sidebar_num'] == "two") { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/2fluid.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
  
    <?php } if ($options['evl_width_layout'] == "fluid" && $options['evl_sidebar_num'] == "two" && $options['evl_pos_sidebar'] == "left_right") { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/3fluid.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
  <?php } if ($options['evl_sidebar_num'] == "disable") { ?>
  
  <style>/**
 * 1 column (content) fixed layout
 * 
 * @package WPEvoLve
 * @subpackage Layouts
 * @beta
 */

.container { width: 960px; margin: 20px auto; }
.hfeed { width: 960px; }
.footer { clear: both; }</style>
  
  <?php } if ($options['evl_sidebar_num'] == "disable" && $options['evl_width_layout'] == "fluid") { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/no-sidebar-fluid.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
   <?php } if ($options['evl_content_back'] == "dark") { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/dark.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />

  
     <?php } if ($options['evl_menu_back'] == "dark") { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/dark-menu.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
       <?php } if ($options['evl_main_color'] == "light_grey_blue") { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/light-grey-blue.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
  
      <?php } if ($options['evl_main_color'] == "light_grey_blue" && $options['evl_content_back'] == "dark" ) { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/light-grey-blue+dark.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
           <?php } if ($options['evl_main_color'] == "green_yellow") { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/green-yellow.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
           <?php } if ($options['evl_main_color'] == "green_yellow" && $options['evl_content_back'] == "dark" ) { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/green-yellow+dark.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
             <?php } if ($options['evl_main_color'] == "red_yellow") { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/red-yellow.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
               <?php } if ($options['evl_main_color'] == "red_yellow" && $options['evl_content_back'] == "dark") { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/red-yellow+dark.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
 
               <?php } if ($options['evl_main_color'] == "pink_purple") { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/pink-purple.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
  
                 <?php } if ($options['evl_main_color'] == "pink_purple" && $options['evl_content_back'] == "dark" ) { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/pink-purple+dark.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
                 <?php } if ($options['evl_main_color'] == "light_blue") { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/light-blue.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
  
                 <?php } if ($options['evl_main_color'] == "light_blue" && $options['evl_content_back'] == "dark" ) { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/light-blue+dark.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />


                 <?php } if ($options['evl_main_color'] == "brown_yellow") { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/brown-yellow.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
  
                 <?php } if ($options['evl_main_color'] == "brown_yellow" && $options['evl_content_back'] == "dark" ) { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/brown-yellow+dark.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
      

                 <?php } if ($options['evl_post_layout'] == "two") { ?>
  
  <style>/**
 * Posts Layout
 * 
 */
 
 
.home .hentry, .archive .hentry, .search .hentry {width:48%;float:left;margin-right:19px;padding-bottom:12px;}
.home .hentry .entry-content, .archive .hentry .entry-content, .search .hentry .entry-content {font-size:13px;}
.entry-content {margin-top:25px;}
.home .odd0, .archive .odd0, .search .odd0{clear:both;}
.home .odd1, .archive .odd1, .search .odd1{margin-right:0px;}
.home .entry-title, .entry-title a, .archive .entry-title, .search .entry-title {font-size:24px;letter-spacing:-1px;line-height:23px;}
.home .hentry img, .archive .hentry img, .search .hentry img{float:left;margin-right:10px;max-width:100px;max-height:150px;padding:3px;}
.home .entry-header, .archive .entry-header, .search .entry-header{font-size:12px;}
.home .published strong, .archive .published strong,  .search .published strong{font-size:15px;line-height:15px;}
.home .hentry .comment-count a, .archive .hentry .comment-count a, .search .hentry .comment-count a  {position:relative;bottom:-9px;margin-right:10px;border:none;padding:8px 10px;background:#fff;-moz-box-shadow:0 -1px 3px #ccc;}
.home .hfeed, .archive .hfeed, .single .hfeed, .page .hfeed {margin-right:0px;}</style>
  
                  <?php } if ($options['evl_post_layout'] == "three") { ?>
  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/posts-layout-three.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  
  
  
                   <?php } if ($options['evl_title_font'] == "tahoma") { ?>
  
 <style type="text/css"> 
  #logo, #logo a {font-family:Tahoma, Geneva, Verdana;font-weight:bold;letter-spacing:-2px;}
</style>

 <?php } if ($options['evl_title_font'] == "georgia") { ?>
  
 <style type="text/css"> 
  #logo, #logo a {font-family:Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;font-weight:bold;letter-spacing:-2px;}
</style>

 <?php } if ($options['evl_title_font'] == "arial") { ?>
  
 <style type="text/css"> 
  #logo, #logo a {font-family:Arial Black, Arial, Helvetica Neue, Helvetica, sans-serif;font-weight:bold;letter-spacing:-5px;}
</style>


 <?php } if ($options['evl_title_font'] == "calibri") { ?>
  
 <style type="text/css"> 
  #logo, #logo a {font-family:Calibri,Segoe UI,Myriad Pro,Myriad,Trebuchet MS,Helvetica,Arial,sans-serif;font-weight:bold;letter-spacing:-2px;}
</style>


 <?php } if ($options['evl_content_font'] == "arial") { ?>

  <style type="text/css">body, input, textarea {font-family: Arial, Helvetica Neue, Helvetica, sans-serif;}</style>
  
 <?php } if ($options['evl_content_font'] == "georgia") { ?>

  <style type="text/css">body, input, textarea {font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;}</style>
  
  
   <?php } if ($options['evl_content_font'] == "courier") { ?>

  <style type="text/css">body, input, textarea {font-family: "Courier New", Courier, monospace;}</style>
  
  

 <?php } if ($options['evl_content_font'] == "calibri") { ?>

  <style type="text/css">body, input, textarea {font-family:Calibri,Segoe UI,Myriad Pro,Myriad,Trebuchet MS,Helvetica,Arial,sans-serif;}</style>
  
  
   <?php } if ($options['evl_pos_logo'] == "right") { ?>
   
   <style type="text/css">#logo-image {float:right;margin:0 0 0 20px;} </style>
   
   
     <?php } if ($options['evl_pos_button'] == "left") { ?>
   
   <style type="text/css">#backtotop {left:3%;margin-left:0;} </style>
   
        <?php } if ($options['evl_pos_button'] == "right") { ?>
   
   <style type="text/css">#backtotop {right:3%;} </style>
   
   <?php } if ($options['evl_pos_button'] == "middle" || $options['evl_pos_button'] == "") { ?>
   
   <style type="text/css">#backtotop {left:50%;} </style>
   
   

  
  
  
  

<?php } if ($options['evl_widgets_header'] == "two") { ?>  

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/widgets-header/2-widgets.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  

  <?php } if ($options['evl_widgets_header'] == "three") { ?>  

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/widgets-header/3-widgets.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />


<?php } if ($options['evl_widgets_header'] == "four") { ?>  

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/widgets-header/4-widgets.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />


<?php } if ($options['evl_widgets_header'] == "two" && $options['evl_width_layout'] == "fluid") { ?>


<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/widgets-header/2-widgets-fluid.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />


<?php } if ($options['evl_widgets_header'] == "three" && $options['evl_width_layout'] == "fluid") { ?>


<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/widgets-header/3-widgets-fluid.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />


<?php } if ($options['evl_widgets_header'] == "four" && $options['evl_width_layout'] == "fluid") { ?>


<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/widgets-header/4-widgets-fluid.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />


  
  
  


<?php } if ($options['evl_widgets_num'] == "two") { ?>  

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/widgets-footer/2-widgets.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />
  

  <?php } if ($options['evl_widgets_num'] == "three") { ?>  

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/widgets-footer/3-widgets.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />


<?php } if ($options['evl_widgets_num'] == "four") { ?>  

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/widgets-footer/4-widgets.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />


<?php } if ($options['evl_widgets_num'] == "two" && $options['evl_width_layout'] == "fluid") { ?>


<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/widgets-footer/2-widgets-fluid.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />


<?php } if ($options['evl_widgets_num'] == "three" && $options['evl_width_layout'] == "fluid") { ?>


<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/widgets-footer/3-widgets-fluid.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />


<?php } if ($options['evl_widgets_num'] == "four" && $options['evl_width_layout'] == "fluid") { ?>


<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/widgets-footer/4-widgets-fluid.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />


<?php } if ($options['evl_back_images'] == "1") { ?>


<style>.header, .menu-back, .content, .content-top, .content-bottom, .footer-top, .footer, .hentry,
.wmiddle, .wmiddle-right, .wbottom, .wright, .wtop-top, .wtop-left, .wtop-right, .wtop-middle, .wtopmiddle-left, .wtopmiddle-right,
.entry-header, .published, .widgets-back, .menu-container, .share-this, .wmiddle-left, .wmiddle-right, .wsbottom-left, .wsbottom-right, #respond,
.comment, .trackback, .pingback {background-image:none;}

.nacked-menu {top:-15px;}


.aside .wmiddle-left, .aside .wmiddle-right, .aside .wsbottom-left, .aside .wsbottom-right {background-color:#fff;}

.content {background-color:#eeeff4;}

.menu-back, .content-top, .entry-header, #respond {background-color:#dcdfe4;}

.aside .wtop-top, .aside .wtop-left, .aside .wtop-right,.aside .wtopmiddle-left, .aside .wtopmiddle-right  {background-color:#575a62;}

.aside .wtop-left {left:-19px;}

.aside .wtop-right {right:-19px;}

.aside .wtop-top {left:-9px;right:-9px;}

.menu-top-left, .menu-top-right, .menu-bottom-left, .menu-bottom-right, .menu-middle-left, .menu-middle-right, .menu-top,
.menu-bottom, .menu-middle {background-image:none;background:#eee;}</style>


<?php } if ($options['evl_back_images'] == "1" && $options['evl_content_back'] == "dark") { ?>


<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/dark-nacked-content.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />

<?php } if ($options['evl_back_images'] == "1" && $options['evl_menu_back'] == "dark") { ?>


<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/library/media/layouts/dark-nacked-menu.css<?php echo $evolve_css_version; ?>" type="text/css" media="screen" />


<?php } if ($options['evl_custom_background'] == "1") { ?>
<style type="text/css">
#wrapper {margin:0 auto 30px auto !important;background:#fff;}</style>

<?php } ?>
