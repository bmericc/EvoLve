<?php
/**
 * Template: Header.php 
 *
 * @package EvoLve
 * @subpackage Template
 */
?>
<!DOCTYPE html>

<!--BEGIN html-->
<html <?php language_attributes(); ?>>


<!--BEGIN head-->
<head>

	<!-- <title> artık add_theme_support('title-tag') ile WP/Yoast tarafından enjekte ediliyor -->

	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo esc_url( add_query_arg( 'ver', EVOLVE_THEME_VERSION, get_stylesheet_uri() ) ); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo esc_url( add_query_arg( 'ver', EVOLVE_THEME_VERSION, CSS . '/print.css' ) ); ?>" type="text/css" media="print" />
  

  <!-- Custom Stylesheets -->
  
  <?php get_template_part('custom-css', 'header'); ?>
  
	<!-- Theme Hook -->
  <?php if ( is_singular() && ! evolve_is_amp_request() ) wp_enqueue_script( 'comment-reply' ); // loads the javascript required for threaded comments ?>
  
  <!-- Bahri Look Start -->
	<?php wp_head(); ?>   
  <!-- Bahri Look End-->	  

 <?php $options = get_option('evolve'); 
 $css_content = $options['evl_css_content'];
 if (!empty($css_content)) {
 echo '<style type="text/css">'.stripslashes($css_content).'</style>'; } ?>      


<!--END head-->
</head>



<!--BEGIN body-->
<body <?php body_class(); ?>>

<?php if ($options['evl_custom_background'] == "1") { ?>
<div id="wrapper">
<?php } ?>

<div id="top"></div>





	<!--BEGIN .header-->
		<div class="header" style="margin: 0 auto;<?php if( get_header_image() ) { ?>padding:10px 20px 35px 20px;width: 940px;background:url('<?php header_image(); ?>');<?php } ?>">
    
	<!--BEGIN .container-->
	<div class="container" style="margin-bottom:0px;">
  
  
  
  <!-- AD Space 1 -->
  
  
    <?php $options = get_option('evolve'); 
     if (!empty($options['evl_space_1'])) { 
    
 $ad_space_1 = $options['evl_space_1']; 
 echo '<div style="float:right;margin-left:10px;overflow:hidden;">'.stripslashes($ad_space_1).'</div>';
 
 } 
?>                        
  
  
  
  <?php $options = get_option('evolve'); if ($options['evl_pos_logo'] == "disable") { ?>
  
  <?php } else { ?>
  
    <?php $options = get_option('evolve');
    if ($file = $options['file']) {
        echo "<a href=".home_url()."><img id='logo-image' src='/wp-content/uploads/2013/12/alpindede_logo.png' alt='".esc_attr( get_bloginfo( 'name' ) )."' /></a>";
    }
      ?>  
     
     <?php } ?> 
     
     
     <?php 
     $taglinestyle = '';
     
     if (($options['evl_tagline_pos'] !== "disable") && ($options['evl_tagline_pos'] == "under")) {
     $taglinestyle = "style='clear:left;padding-top:10px;'";
     } 
     
     if (($options['evl_tagline_pos'] !== "disable") && ($options['evl_tagline_pos'] == "above")) {
     $taglinestyle = "style='padding-top:0px;'";  }
     
     $tagline = '<div id="tagline" '.$taglinestyle.'>'.get_bloginfo( 'description' ).'</div>';
     
     if (($options['evl_tagline_pos'] !== "disable") && ($options['evl_tagline_pos'] == "above")) { 
     $taglinestyle = "padding-top:10px;'";
     
     echo $tagline;
      
     } ?>
     
     
     <?php if ($options['evl_blog_title'] == "1") { ?>
      
     <?php } else { ?> 
     
     
       
			<div id="logo"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ) ?></a></div>
      
      <?php } if (($options['evl_tagline_pos'] !== "disable") && (($options['evl_tagline_pos'] == "") || ($options['evl_tagline_pos'] == "next") || ($options['evl_tagline_pos'] == "under")))    
      {
			echo $tagline;
      
      } ?>

	<!--END .container-->
		</div>
    
    		<!--END .header-->
		</div>
    
  
  <div class="menu-container">
          	
	<div class="menu-back">
  
  

  
  <!--BEGIN .container-menu-->
  <div class="container nacked-menu" style="margin:0 auto;padding-bottom:10px;position:relative;z-index:99;">

     <?php if ($options['evl_main_menu'] == "1") { ?>
    <br /><br />
    
   <?php } else { ?>

  <div class="menu-top-left"></div>
  <div class="menu-top-right"></div>
  
  <div class="menu-bottom-left"></div>
  <div class="menu-bottom-right"></div>
  
  <div class="menu-middle-left"></div>
  <div class="menu-middle-right"></div> 
  
    <div class="menu-top"></div>
    <div class="menu-bottom"></div>
    
     <div class="menu-middle"></div>
    
     <button class="mobile-menu-toggle" type="button" aria-controls="primary-navigation" aria-expanded="false">
       <span class="mobile-menu-toggle-icon" aria-hidden="true"></span>
       <span>Menü</span>
     </button>

     <?php if ( has_nav_menu( 'primary-menu' ) ) { ?>
 
     
     <?php wp_nav_menu( array( 'container_class' => 'menu', 'container_id' => 'primary-navigation', 'menu_class' => 'nav', 'theme_location' => 'primary-menu' ) ); ?>
      
      <?php } else { ?>
      
      
	        <div id="primary-navigation" class="menu">
	          <?php wp_page_menu( 'show_home=1&menu_class=nav' ); ?>
	        </div>
          
          <?php } ?>  
       
       <?php } ?>
       
       
       
       
       </div>

        <!--BEGIN featured-slider -->
        <?php if ( ( is_home() || is_front_page() ) && function_exists( 'evolve_featured_post_slider' ) ) {
            evolve_featured_post_slider();
        } ?>
        <!--END featured-slider -->

        <!--BEGIN header-content.php -->
        
         <?php $options = get_option('evolve'); 
  if ($options['evl_home_header_content'] == "disable") { ?>
  
  <?php } else { ?>
  
  
  <?php get_template_part('header-content', 'header'); ?>
       
       <?php } ?>
       
        <!--END header-content.php -->
        
        
          <?php $options = get_option('evolve');

// if Header widgets exist

  if (($options['evl_widgets_header'] == "") || ($options['evl_widgets_header'] == "disable"))  
{ } else { ?>
     
  <div class="container widgets-back" style="margin-top:0;margin-bottom:0;width:100%;">  
  
    
        <!--BEGIN .widgets-holder-->
    <div class="widgets-holder widgets-back-inside" style="margin:0 auto;">
    
    <div class="header-1">
    	<?php	if ( !dynamic_sidebar( 'header-1' )) : ?>
      <?php endif; ?>
      </div>
     
     <div class="header-2"> 
      <?php	if ( !dynamic_sidebar( 'header-2' ) ) : ?>
      <?php endif; ?>
      </div>
    
    <div class="header-3">  
	    <?php	if ( !dynamic_sidebar( 'header-3' ) ) : ?>
      <?php endif; ?>
      </div>      
    
    
    <div class="header-4">  
    	<?php	if ( !dynamic_sidebar( 'header-4' ) ) : ?>
      <?php endif; ?>
      </div>
        
    </div> 
    
    <!--END .widgets-holder--> 
    
   </div>
   
   
   
     <?php } ?>
   
     <!-- AD Space 2 -->
  
  
    <?php $options = get_option('evolve');
     if (!empty($options['evl_space_2'])) {
    
 $ad_space_2 = $options['evl_space_2']; 
echo '<div style="clear:both;text-align:center;margin:10px 0 15px 0;overflow:hidden;">'.stripslashes($ad_space_2).'</div>';

 }
?>


      </div>
      <!--END .menu-back-->
      </div>
      <!--END .menu-container-->

       	<!--BEGIN .content-top-->
       <div class="content-top"></div>
       
             	<!--BEGIN .content-->
	<div class="content <?php semantic_body(); ?>">  
  
 


       	<!--BEGIN .container-->
	<div class="container" style="margin:0px auto;">
  
   


		<!--BEGIN #content-->
		<div id="content">
    
    
    
    <?php $options = get_option('evolve');
  if (($options['evl_sidebar_num'] == "disable") || ($options['evl_sidebar_num'] == "disable") && ($options['evl_width_layout'] == "fluid"))  
  
  
    { ?>
  
  
  <?php } else { ?>

  <?php $options = get_option('evolve');
  if ($options['evl_sidebar_num'] == "two") { ?> 
  
  <?php get_sidebar('2'); ?>
  
  
  <?php } ?>
  
    <?php } ?>  
