<div style="position:relative;float:left;z-index:0;"><div class="social-trans-left"></div><div class="social-trans-right"></div>
<div class="sc_menu">





<ul class="sc_menu">

<li><a target="_blank" href="<?php $options = get_option('evolve');if ($options['evl_rss_feed'] != "" ) { echo $options['evl_rss_feed']; } else { bloginfo( 'rss_url' ); } ?>" class="tipsytext" id="rss" title="RSS Feed"></a></li>

<?php 
  if (!empty($options['evl_newsletter'])) { ?>
<li><a target="_blank" href="<?php $options = get_option('evolve');if ($options['evl_newsletter'] != "" ) echo $options['evl_newsletter']; ?>" class="tipsytext" id="email-newsletter" title="Newsletter"></a></li><?php } else { ?><?php } ?>

<?php 
  if (!empty($options['evl_facebook'])) { ?>
<li><a target="_blank" href="http://facebook.com/<?php $options = get_option('evolve');if ($options['evl_facebook'] == "" ) $options['evl_facebook'] = $default_facebook;echo stripslashes($options['evl_facebook']);?>" class="tipsytext" id="facebook" title="Facebook"></a></li><?php } else { ?><?php } ?>

<?php 
  if (!empty($options['evl_twitter_id'])) { ?>
<li><a target="_blank" href="https://x.com/<?php $options = get_option('evolve');if ($options['evl_twitter_id'] == "" ) $options['evl_twitter_id'] = $default_twitter_id;echo stripslashes($options['evl_twitter_id']);?>" style="text-decoration: none;" class="tipsytext" id="twitter" title="X (Twitter)"></a></li><?php } else { ?><?php } ?>

<?php
  if (!empty($options['evl_instagram'])) { ?>
<li><a target="_blank" href="https://instagram.com/<?php $options = get_option('evolve');if ($options['evl_instagram'] != "" ) echo stripslashes($options['evl_instagram']); ?>" class="tipsytext" id="instagram" title="Instagram"></a></li><?php } else { ?><?php } ?>

<?php
  if (!empty($options['evl_whatsapp'])) { ?>
<li><a target="_blank" href="https://wa.me/<?php $options = get_option('evolve');if ($options['evl_whatsapp'] != "" ) echo $options['evl_whatsapp']; ?>" class="tipsytext" id="whatsapp" title="WhatsApp"></a></li><?php } else { ?><?php } ?>

<?php 
  if (!empty($options['evl_skype'])) { ?>
<li><a href="skype:<?php $options = get_option('evolve');if ($options['evl_skype'] != "" ) echo $options['evl_skype']; ?>?call" class="tipsytext" id="skype" title="Skype"></a></li><?php } else { ?><?php } ?>

<?php 
  if (!empty($options['evl_youtube'])) { ?>
<li><a target="_blank" href="http://youtube.com/user/<?php $options = get_option('evolve');if ($options['evl_youtube'] != "" ) echo $options['evl_youtube']; ?>" class="tipsytext" id="youtube" title="YouTube"></a></li><?php } else { ?><?php } ?>

<?php 
  if (!empty($options['evl_flickr'])) { ?>
<li><a target="_blank" href="http://flickr.com/photos/<?php $options = get_option('evolve');if ($options['evl_flickr'] != "" ) echo $options['evl_flickr']; ?>" class="tipsytext" id="flickr" title="Flickr"></a></li><?php } else { ?><?php } ?>

<?php
  if (!empty($options['evl_linkedin'])) { ?>
<li><a target="_blank" href="<?php $options = get_option('evolve');if ($options['evl_linkedin'] != "" ) echo $options['evl_linkedin']; ?>" class="tipsytext" id="linkedin" title="LinkedIn"></a></li><?php } else { ?><?php } ?>

<?php
  if (!empty($options['evl_tiktok'])) { ?>
<li><a target="_blank" href="https://tiktok.com/@<?php $options = get_option('evolve');if ($options['evl_tiktok'] != "" ) echo stripslashes($options['evl_tiktok']); ?>" class="tipsytext" id="tiktok" title="TikTok"></a></li><?php } else { ?><?php } ?>

<?php
  if (!empty($options['evl_threads'])) { ?>
<li><a target="_blank" href="https://threads.com/@<?php $options = get_option('evolve');if ($options['evl_threads'] != "" ) echo stripslashes($options['evl_threads']); ?>" class="tipsytext" id="threads" title="Threads"></a></li><?php } else { ?><?php } ?>


</ul>
</div>

</div>