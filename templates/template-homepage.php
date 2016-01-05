<?php
/**
 * Template Name: Homepage
 *
 * Template file for Homepage
 *
 * @package felilustra
 */

get_header(); ?>

	<div id="intro">
		
		<img src="<?php echo get_template_directory_uri(); ?>/images/feliza_gomez_illustrator.jpg" usemap="#sections" id="homefeli" alt="Feliza Gómez - Illustrator and graphic designer, I like to narrate and tell stories through illustration." />
		
		<map name="sections" id="sections">
			<area id="portfolio" alt="<?php echo __('Work I have done', 'felilustra'); ?>" title="<?php echo __('Work I have done', 'felilustra'); ?>" href="<?php echo bloginfo('url'); ?>/portfolio" shape="poly" coords="230,206,240,200,281,208,281,193,348,206,346,215,387,221,351,342,215,315" style="outline:none;" target="_self"  onmouseover="if(document.images) document.getElementById('homefeli').src= '<?php echo get_template_directory_uri(); ?>/images/portfolio.jpg';" onmouseout="if(document.images) document.getElementById('homefeli').src= '<?php echo get_template_directory_uri(); ?>/images/feliza_gomez_illustrator.jpg';"  />
			<area id="drawing-diary" alt="<?php echo __('Check my workshop', 'felilustra'); ?>" title="<?php echo __('Check my workshop', 'felilustra'); ?>" href="<?php echo bloginfo('url'); ?>/drawing-diary" shape="poly" coords="51,399,139,333,151,340,211,330,246,383,219,407,223,421,197,426,203,437,111,490" style="outline:none;" target="_self"  onmouseover="if(document.images) document.getElementById('homefeli').src= '<?php echo get_template_directory_uri(); ?>/images/drawing.jpg';" onmouseout="if(document.images) document.getElementById('homefeli').src= '<?php echo get_template_directory_uri(); ?>/images/feliza_gomez_illustrator.jpg';"  />
			<area id="aboutme" alt="<?php echo __('Meet me', 'felilustra'); ?>" title="<?php echo __('Meet me', 'felilustra'); ?>" href="<?php echo bloginfo('url'); ?>/about" shape="poly" coords="301,412,293,395,268,385,251,401,251,427,263,452,282,470,306,494,339,462,371,425,386,369,369,355,353,353,335,360,312,390" style="outline:none;" target="_self"  onmouseover="if(document.images) document.getElementById('homefeli').src= '<?php echo get_template_directory_uri(); ?>/images/about_me.jpg';" onmouseout="if(document.images) document.getElementById('homefeli').src= '<?php echo get_template_directory_uri(); ?>/images/feliza_gomez_illustrator.jpg';"  />
			<area id="contact" alt="<?php echo __('Say hello!', 'felilustra'); ?>" title="<?php echo __('Say hello!', 'felilustra'); ?>" href="<?php echo bloginfo('url'); ?>/contact" shape="poly" coords="591,219,730,183,755,282,612,319" style="outline:none;" target="_self"  onmouseover="if(document.images) document.getElementById('homefeli').src= '<?php echo get_template_directory_uri(); ?>/images/mail.jpg';" onmouseout="if(document.images) document.getElementById('homefeli').src= '<?php echo get_template_directory_uri(); ?>/images/feliza_gomez_illustrator.jpg';"  />
			<area id="blog" alt="<?php echo __('Read my stories', 'felilustra'); ?>" title="<?php echo __('Read my stories', 'felilustra'); ?>" href="<?php echo bloginfo('url'); ?>/blog" shape="poly" coords="795,290,778,293,758,297,744,310,732,330,725,354,729,380,737,399,752,415,773,425,795,433,830,431,854,419,872,398,880,370,878,341,868,318,844,302,823,293" style="outline:none;" target="_self"  onmouseover="if(document.images) document.getElementById('homefeli').src= '<?php echo get_template_directory_uri(); ?>/images/blog.jpg';" onmouseout="if(document.images) document.getElementById('homefeli').src= '<?php echo get_template_directory_uri(); ?>/images/feliza_gomez_illustrator.jpg';"  />
			<area id="store" alt="<?php echo __('Buy cute things', 'felilustra'); ?>" title="<?php echo __('Buy cute things', 'felilustra'); ?>" href="<?php echo bloginfo('url'); ?>/store" shape="poly" coords="569,388,694,352,732,513,617,544,605,526,575,537,570,515" style="outline:none;" target="_self"  onmouseover="if(document.images) document.getElementById('homefeli').src= '<?php echo get_template_directory_uri(); ?>/images/store.jpg';" onmouseout="if(document.images) document.getElementById('homefeli').src= '<?php echo get_template_directory_uri(); ?>/images/feliza_gomez_illustrator.jpg';"  />
		</map>

	</div>

<?php 
	if (!is_front_page()) {
		get_footer();
	}
?>