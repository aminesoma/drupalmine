<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<div id="layout" class="boxed">
		<header id="header">
			<div class="a_head">
				<div class="row clearfix">
					
					<?php
						if ($page['left_bar']):
					?>
					<div class="breaking_news lefter">
						<div class="freq_out">
							<div class="freq">
								<div class="inner_f"></div>
								<div id="layerBall"></div>
							</div>
						</div>
						<?php
							print render($page['left_bar']);
						?>
					</div>
					<?php
						endif;
					?>
					<!-- /breaking news -->

					<div class="right_bar">
						<?php
							if ($page['right_bar']):
								print render($page['right_bar']);
							endif;
						?>
						<!-- /social -->
						<span id="date_time"></span>
						<!-- /date -->
					</div>
					<!-- /right bar -->
				</div><!-- /row -->
			</div><!-- /a head -->

				<!-- /a head -->
				<div class="b_head">
					<div class="row clearfix">
						<div class="logo">
							<?php
								if($logo){
							?>
							<a href="<?php print check_url($front_page); ?>" title="<?php print $site_name; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></a>
							<?php }?>
							<?php if ($site_slogan){ ?>
							<div id="site-slogan"><?php print $site_slogan; ?></div>
							<?php } ?>
						</div>
						<!-- /logo -->
						<?php
							if ($page['ads_banner_right']):
								print '<div class="ads">';
									print render($page['ads_banner_right']);
								print '</div>';
							endif;
						?>
						
						<!-- /ads -->
					</div>
					<!-- /row -->
				</div>
				<!-- /b head -->

				<div class="row clearfix">
					<div class="sticky_true">
						<div class="c_head clearfix">
							<nav>
								<?php 
									if ($page['main_menu']): 
										//$menu_name = variable_get('menu_main_links_source', 'main-menu'); 
										//$tree = menu_tree($menu_name); 
										print render($page['main_menu']);
										//print drupal_render($tree, array('links' => $main_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix', 'sf-menu sf-js-enabled sf-shadow')))); 
									endif;
								?>
							</nav><!-- /nav -->
	
						<div class="right_icons">
							<a class="random_post bottomtip" href="#" title="Random Post"><i class="icon-media-shuffle"></i></a><!-- /random post -->
	
							<div class="search">
								<div class="search_icon"><i class="fa-search"></i></div>
								<div class="s_form">
									<?php
										if ($page['search_form']):
											print render($page['search_form']);
										endif;
									?><!-- /form -->
								</div><!-- /s form -->
							</div><!-- /search -->
						</div><!-- /right icons -->
					</div><!-- /c head -->
				</div><!-- /sticky -->
			</div><!-- /row -->
		</header><!-- /header -->

		<div class="page-content">
			<div class="row clearfix">
				<div class="grid_9 alpha">
					<?php
						if ($page['top_news']):
					?>
					<div class="ipress_slider mbf">
						<div class="slider_a owl-carouseltheme">
							
							<div class="item clearfix">
							
							<?php 
								print render($page['top_news']);
							?>
							</div><!-- /slide -->

							<!-- /slide -->

						</div><!-- /slider -->
					</div>
							
					<?php
						endif;
					?><!-- /slider ipress -->

					<div class="grid_8 omega posts righter">
						<?php
							if ($page['content'] || isset($messages)):
							if(drupal_is_front_page()) {
								unset($page['content']['system_main']['default_message']);
							}
							print $messages;
							print render($page['content']); 
						endif; 
						?>
					</div><!-- end grid9 -->

					<div class="grid_4 alpha sidebar sidebar_b">
					<?php
						if ($page['sidebar_first']):
							print render($page['sidebar_first']);
						endif;
					?>
					
					</div><!-- end grid9 -->
				</div><!-- end grid9 -->

				<div class="grid_3 omega sidebar sidebar_a">
					<?php
						if ($page['sidebar_second']):
							print render($page['sidebar_second']);
						endif;
					?>
					
					
				</div><!-- /grid3 sidebar A -->
			</div><!-- /row -->
		</div><!-- /end page content -->

		<footer id="footer">
			<div class="row clearfix">
				<div class="grid_3">
					<div class="widget">
						<div class="title"><h4>About iPress</h4></div>
						<p> iPress is a magazine/blog/ad/review template. Nunc montes odio phasellus dignissim, aenean, nec augue velit integer elementum ut montes quis integer cursus, est purus, lectus duis, scelerisque tincidunt ultricies phasellus elementum turpis tristique.<br><br>

Email:	<a href="contact.html">information@ipress.com</a> </p>
					</div><!-- /widget -->
				</div><!-- /grid3 -->

				<div class="grid_3">
					<div class="widget">
						<div class="title"><h4>Recent Posts</h4></div>
						<ul class="small_posts">
							<li class="clearfix">
								<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb4.jpg" alt="#"></a>
								<h3><a href="single_post.html">What is the worst could be the worst?</a></h3>
								<div class="meta mb"> 1 day ago  /  <a href="single_post.html">1 comment</a> </div>
							</li>
							<li class="clearfix">
								<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb5.jpg" alt="#"></a>
								<h3><a href="single_post.html">Praesent ipsum adipiscing mi eget ipsum</a></h3>
								<div class="meta mb"> 3 days ago  /  <a href="single_post.html">3 comments</a> </div>
							</li>
							<li class="clearfix">
								<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb6.jpg" alt="#"></a>
								<h3><a href="single_post.html">Paul Thomson on post with SoundCloud</a></h3>
								<div class="meta mb"> 6 days ago  /  <a href="single_post.html">5 comments</a> </div>
							</li>
						</ul>
					</div><!-- /widget -->
				</div><!-- /grid3 -->

				<div class="grid_3">
					<div class="widget">
						<div class="title"><h4>Best Reviews</h4></div>
						<ul class="small_posts">
							<li class="clearfix">
								<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb13.jpg" alt="#"></a>
								<h3><a href="single_post.html">What is the worst could be the worst?</a></h3>
								<div class="meta mb"> <a class="cat color1" href="#" title="View all posts under Entertainment">Entertainment</a><span class="post_rating" href="#" title="Rating">8.89</span> </div>
							</li>
							<li class="clearfix">
								<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb12.jpg" alt="#"></a>
								<h3><a href="single_post.html">Praesent ipsum adipiscing mi eget ipsum</a></h3>
								<div class="meta mb"> <a class="cat color3" href="#" title="View all posts under News">News</a><span class="post_rating" href="#" title="Rating">8.1</span> </div>
							</li>
							<li class="clearfix">
								<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb11.jpg" alt="#"></a>
								<h3><a href="single_post.html">Paul Thomson on post with SoundCloud</a></h3>
								<div class="meta mb"> <a class="cat color4" href="#" title="View all posts under Sports">Sports</a><span class="post_rating" href="#" title="Rating">7.95</span> </div>
							</li>
						</ul>
					</div><!-- /widget -->
				</div><!-- /grid3 -->

				<div class="grid_3">
					<div class="widget">
						<div class="title"><h4>Newsletters</h4></div>
						<p> To receive the latest updates and Latest Posts enter your email. </p>
						<form id="newsletters" method="post" action="http://feedburner.google.com/fb/a/mailverify" target="popupwindow" onSubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=sevenpsd', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
							<input type="email" onFocus="if (this.value=='Type Your Email') this.value = '';" onBlur="if (this.value=='') this.value = 'Type Your Email';" value="Type Your Email" placeholder="Type Your Email" required="required">
							<button type="submit"><i class="icon-checkmark"></i></button>
						</form>
					</div><!-- /widget -->

					<div class="widget">
						<div class="title"><h4>Follow us</h4></div>
						<div class="social">
							<a href="#" class="toptip" title="Twitter"><i class="fa-twitter"></i></a>
							<a href="#" class="toptip" title="Facebook"><i class="fa-facebook"></i></a>
							<a href="#" class="toptip" title="Google Plus"><i class="fa-google-plus"></i></a>
							<a href="#" class="toptip" title="Linkedin"><i class="fa-linkedin"></i></a>
							<a href="#" class="toptip" title="Github"><i class="fa-github"></i></a>
							<a href="#" class="toptip" title="instagram"><i class="fa-instagram"></i></a>
							<a href="#" class="toptip" title="Dribbble"><i class="fa-dribbble"></i></a>
						</div><!-- /social -->
					</div><!-- /widget -->
				</div><!-- /grid3 -->

			</div><!-- /row -->

			<div class="row clearfix">
				<div class="footer_last">
					<span class="copyright">© 2014 <a href="http://theme20.com/">Theme20</a>. All Rights Reserved. Powered by <a href="http://themeforest.net/user/T20">Themeforest</a>.</span>

					<div id="toTop" class="toptip" title="Back to Top"><i class="icon-arrow-thin-up"></i></div>
				</div><!-- /last footer -->
			</div><!-- /row -->

		</footer><!-- /footer -->

	</div><!-- /layout -->

