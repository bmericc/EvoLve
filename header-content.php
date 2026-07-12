	<?php $options = get_option('evolve'); if (is_home()) { 
  $settings = $options['evl_home_header_content'];
        } elseif (is_single()) {
     $settings = $options['evl_single_header_content'];   
        } else {
         $settings = $options['evl_archives_header_content']; } ?>
  
  
  <div class="container" style="margin:0 auto;">


        <?php
  if ($settings == "search_social" || $settings == "") { ?>
  
  <div style="float:left;width:620px;height:50px;margin-top:12px;">
  
  <!--BEGIN #subscribe-follow-->
 
<span class="social-title"><?php _e( 'KEEP IN TOUCH', 'evolve' ); ?></span>

<?php get_template_part('social-buttons', 'header'); ?>


<!--END #subscribe-follow-->
  
  
</div>  
  
   <!--BEGIN #righttopcolumn-->  
  <div id="righttopcolumn"> 
       
<?php get_search_form(); ?> 

</div> 
  <!--END #righttopcolumn-->


  
  <?php } elseif ($settings == "post_search_social") { ?>

  <div style="float:left;width:620px;height:50px;margin-top:12px;">

  <!--BEGIN #subscribe-follow-->

<span class="social-title"><?php _e( 'KEEP IN TOUCH', 'evolve' ); ?></span>

<?php get_template_part('social-buttons', 'header'); ?>


<!--END #subscribe-follow-->


</div>

   <!--BEGIN #righttopcolumn-->
  <div id="righttopcolumn">

<?php get_search_form(); ?>

</div>
  <!--END #righttopcolumn-->

<?php } else { ?>
   
   
          
       
       <?php } ?>
       
    
       
       
       </div>