<?php
/*
Plugin Name: Persian Add To Social Bookmarking
Plugin URI: http://www.persianscript.ir/
Description: افزونه اشتراک گذاری مطالب در سایتهای اشتراک گذاری: Balatarin,Cloob,Twitter,FaceBook,Google Bookmarks,Digg,Yahoo,Technorati,delicious,FriendFeed,Google +1
Version: 1.4
Author: پرشین اسکریپت
Author URI: http://www.persianscript.ir/

*/

function ps_add_to_social($content) {

    global $post;
	$ps_width = '100%'; // (100px) or (100%)
	$ps_align = 'justify'; // ("left, "center", "right", justify")
	$ps_image_dir = get_settings('home') . '/wp-content/plugins/ps-add-to-social-bookmarking/images/'; // Images URL
	$ps_link = get_permalink($post->ID); // Post URL
    $ps_title = str_replace(' ','+',get_the_title( $post->ID )); // Post title
	$content .= "";
	
	//if (is_page() && is_feed()) {
	if (is_single()) {
		$content .= "\n"
                  . '
				  <style type="text/css">
				  .ps-social-sharing-2011{
					-webkit-transition: opacity 0.3s;
					-moz-transition: opacity 0.3s;
					filter: alpha(opacity=70);
					opacity: 0.5;
					
				}
				.ps-social-sharing-2011:hover{
					filter: alpha(opacity=100);
					opacity: 1;
				}
				  
				  
				  </style>' . "\n"
				  
				  . '
				  <div style="padding:16px 0 16px 0; text-align:' . $ps_align . '; width:' . $ps_width . ';"><img src="' . $ps_image_dir . '/sharethis.png" alt="به اشتراک بگذارید..." /><br>' . "\n"
				  
				  // Balatarin
				  . '<a href="http://www.balatarin.com/links/submit?phase=2&url=' . $ps_link . '&title=' . $ps_title . '" target="_blank" rel="nofollow" title="اشتراک گذاری در بالاترین" >
				  <img class="ps-social-sharing-2011" src="' . $ps_image_dir . 'balatarin.png" border="0" alt="balatarin" />
				  </a>' . "\n"
				  
				  //Cloob
				  . '<a href="http://www.cloob.com/share/link/add?url=' . $ps_link . '&title=' . $ps_title . '" target="_blank" title="اشتراک گذاری در کلوب" >
				  <img class="ps-social-sharing-2011" src="' . $ps_image_dir . 'cloob.png" border="0" alt="cloob" />
				  </a>' . "\n"
							
				  // Twitter
				   . '<a href="http://twitter.com/home?status=' . $ps_title . ' - ' . $ps_link . '" target="_blank" rel="nofollow" title="اشتراک در توییتر" >
				  <img class="ps-social-sharing-2011" src="' . $ps_image_dir . 'twitter.png" border="0" alt="Twitter" />
				  </a>' . "\n"
				  
				  // Facebook
				  . '<a href="http://facebook.com/sharer.php?u=' . $ps_link . '&amp;t=' . $ps_title . '" target="_blank" rel="nofollow" title="اشتراک گذاری در Facebook" >
				  <img class="ps-social-sharing-2011" src="' . $ps_image_dir . 'facebook.png" border="0" alt="Facebook" />
				  </a>'."\n"
				  
				  // Google Bookmarks
                  . '<a href="http://google.com/bookmarks/mark?op=add&amp;bkmk=' . $ps_link . '&amp;title=' . $ps_title . '" target="_blank" rel="nofollow" title="اشتراک گذاری در Google Bookmarks" >
				  <img class="ps-social-sharing-2011" src="' . $ps_image_dir . 'google.png" border="0" alt="Google Bookmarks"  />
				  </a>'."\n"
				  
				  // Google Buzz
                  . '<a href="http://www.google.com/reader/link?url=' . $ps_link . '&title=' . $ps_title . '&srcURL=' . $ps_link . '" target="_blank" rel="nofollow" title="اشتراک گذاری در Google Buzz" >
				  <img class="ps-social-sharing-2011" src="' . $ps_image_dir . 'buzz.png" border="0" alt="Google Buzz" />
				  </a>'."\n"
				  
				  // Digg
				  . '<a href="http://digg.com/submit?phase=2&amp;url=' . $ps_link . '&amp;title=' . $ps_title . '" target="_blank" rel="nofollow" title="اشتراک گذاری در Digg" >
				  <img class="ps-social-sharing-2011" src="' . $ps_image_dir . 'digg.png" border="0" alt="Digg" />
				  </a>'."\n"
				  
				  // Yahoo mass
				  . '<a href="ymsgr:im?msg=ino bebin - ' . $ps_link . ' - ' . $ps_title . '" target="_blank" rel="nofollow" title="اشتراک گذاری در یاهو مسنجر" >
				  <img class="ps-social-sharing-2011" src="' . $ps_image_dir . 'yahoo.png" border="0" alt="yahoo" />
				  </a>'."\n"
				  
				  // Technorati
				  . '<a href="http://technorati.com/faves?add=' . $ps_link . '&title=' . $ps_title . '" target="_blank" rel="nofollow" title="اشتراک گذاری در Technorati" >
				  <img class="ps-social-sharing-2011" src="' . $ps_image_dir . 'technorati.png" border="0" alt="Technorati" />
				  </a>'."\n"
				  
				  // delicious
				  . '<a href="http://delicious.com/post?url=' . $ps_link . '&title=' . $ps_title . '" target="_blank" rel="nofollow" title="اشتراک گذاری در delicious" >
				  <img class="ps-social-sharing-2011" src="' . $ps_image_dir . 'delicious.png" border="0" alt="delicious" />
				  </a>'."\n"
				  
				  // FriendFeed
				  . '<a href="http://friendfeed.com/share?title=' . $ps_title . '&url=' . $ps_link . '" target="_blank" rel="nofollow" title="اشتراک گذاری در FriendFeed" >
				  <img class="ps-social-sharing-2011" src="' . $ps_image_dir . 'friendfeed.png" border="0" alt="FriendFeed" />
				  </a>'."\n"
				  
				  // Google +1
				  . '<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
				  {lang: "fa"}
				  </script>
				  <g:plusone class="ps-social-sharing-2011" href="' . $ps_link . '"></g:plusone>'."\n"
				  

                  . '</div>' . "\n";			  
    }				  
	
	return $content;
}

add_filter('the_content', 'ps_add_to_social');

?>