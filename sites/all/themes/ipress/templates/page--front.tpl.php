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
									<form action="search_result.html" id="search" method="get">
										<input id="inputhead" name="search" type="text" onFocus="if (this.value=='Start Searching...') this.value = '';" onBlur="if (this.value=='') this.value = 'Start Searching...';" value="Start Searching..." placeholder="Start Searching ...">
										<button type="submit"><i class="fa-search"></i></button>
									</form><!-- /form -->
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
					<div class="ipress_slider mbf">
						<div class="slider_a owl-carouseltheme">
							<!-- /slide -->

							<div class="item clearfix">
								<div class="half">
									<div class="slide_details">
										<a class="cat color4" href="#" title="View all posts under Sports">Sports</a>
										<span class="post_rating" href="#" title="Rating"><i class="fa fa-star"></i> 9.11</span>
										<h3><a href="single_post.html">Sed ut perspiciatis unde omnis iste</a></h3>
									</div>
									<a href="single_post.html"><img src="images/assets/slider4.jpg" alt=""></a>
								</div><!-- /half -->

								<div class="half">
									<div class="slide_details">
										<a class="cat color5" href="#" title="View all posts under Music">Music</a>
										<span class="post_rating" href="#" title="Rating"><i class="fa fa-star"></i> 10</span>
										<h3><a href="single_post.html">Discovered the undoubtable source</a></h3>
									</div>
									<a href="single_post.html"><img src="images/assets/slider5.jpg" alt=""></a>
								</div><!-- /half -->

								<div class="half">
									<div class="slide_details">
										<a class="cat color6" href="#" title="View all posts under TV">TV</a>
										<span class="post_rating" href="#" title="Rating"><i class="fa fa-star"></i> 6.99</span>
										<h3><a href="single_post.html">The standard chunk of Lorem ipsum</a></h3>
									</div>
									<a href="single_post.html"><img src="images/assets/slider6.jpg" alt=""></a>
								</div><!-- /half -->
							</div><!-- /slide -->

						</div><!-- /slider -->
					</div><!-- /slider ipress -->

					<div class="grid_8 omega posts righter">
						<div class="post_day mbf clearfix">
							<div class="title colordefault"><h4>Post Of The Day</h4></div>

							<div class="grid_6 alpha relative">
								<a class="cat" href="#" title="View all posts under Travel">Travel</a>
								<a class="float-shadow" href="single_post.html"><img src="images/assets/r_4.jpg" alt=""></a>
							</div><!-- /grid6 alpha -->

							<div class="grid_6 omega">
								<div class="post_day_content">
									<h3> <a href="single_post.html">Here's What Instagram Ads Will Look Like</a> </h3>
									<div class="meta mb"> 3 hours ago    /    <a href="single_post.html">0 comments</a> </div>
									<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry unknown printer took a galley of type and scrambled it to make a type has survived not only fiv... </p>
								</div><!-- /post content -->
							</div><!-- /grid6 omega -->
						</div><!-- /post day -->

						<div class="posts_block mbf clearfix">
							<div class="title color5">
								<h4>Music</h4>
								<a href="#" class="feed toptip" title="RSS Feed"><i class="icon-feed"></i></a>
							</div><!-- /title bar -->

							<div class="grid_6 alpha">
								<div class="mb float-shadow"><a href="single_post.html"><img src="images/assets/r_5.jpg" alt=""></a></div>
								<div class="post_m_content">
									<h3> <a href="single_post.html">Here's What Instagram Ads Will Look Like</a> </h3>
									<div class="meta mb"> 3 hours ago    /    <a href="single_post.html">0 comments</a> </div>
									<p> Lorem Ipsum is simply dummy text of the printing and typesetting... </p>
								</div><!-- post content -->
							</div><!-- /grid6 omega -->

							<div class="grid_6 omega">
								<div class="small_slider_music owl-carousel owl-theme">
									<div class="item clearfix">
										<ul class="small_posts">
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb1.jpg" alt="#"></a>
												<h3><a href="single_post.html">What worst could be the worst?</a></h3>
												<div class="meta mb"> 5 hours ago    /    <a href="single_post.html">1 comments</a> </div>
											</li>
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb2.jpg" alt="#"></a>
												<h3><a href="single_post.html">Praesent ipsum adipiscing mi eget ipsum</a></h3>
												<div class="meta mb"> 1 days ago    /    <a href="single_post.html">5 comments</a> </div>
											</li>
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb3.jpg" alt="#"></a>
												<h3><a href="single_post.html">Paul Thomson on post with SoundCloud</a></h3>
												<div class="meta mb"> 3 days ago    /    <a href="single_post.html">14 comments</a> </div>
											</li>
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb4.jpg" alt="#"></a>
												<h3><a href="single_post.html">For the days of peace and warmth</a></h3>
												<div class="meta mb"> 3 days ago    /    <a href="single_post.html">14 comments</a> </div>
											</li>
										</ul>
									</div>
									
								</div><!-- /slides -->
							</div><!-- grid6 omega -->
						</div><!-- posts block Music -->

						<div class="posts_block mbf clearfix">
							<div class="title color6">
								<h4>TV</h4>
								<a href="#" class="feed toptip" title="RSS Feed"><i class="icon-feed"></i></a>
							</div>

							<div class="carousel_TV">
								<div class="item float-shadow"><a href="#"><img class="toptip" src="images/assets/r_7.jpg" alt="#" title="Lorem Ipsum is not simply"></a></div>
								<div class="item float-shadow"><a href="#"><img class="toptip" src="images/assets/r_8.jpg" alt="#" title="Shooting for new goodies"></a></div>
								<div class="item float-shadow"><a href="#"><img class="toptip" src="images/assets/r_9.jpg" alt="#" title="For the days of peace and warmth"></a></div>
								<div class="item float-shadow"><a href="#"><img class="toptip" src="images/assets/r_10.jpg" alt="#" title="A picture of Sin Fang in Bairro Alto"></a></div>
								<div class="item float-shadow"><a href="#"><img class="toptip" src="images/assets/r_11.jpg" alt="#" title="Breaking the darkness"></a></div>
								<div class="item float-shadow"><a href="#"><img class="toptip" src="images/assets/r_12.jpg" alt="#" title="For the days of peace and warmth"></a></div>
								<div class="item float-shadow"><a href="#"><img class="toptip" src="images/assets/r_13.jpg" alt="#" title="Bairro Alto in Lisboa, Portugal"></a></div>
							</div>
						</div><!-- posts block carousel -->

						<div class="ads_block mbf">
							<a href=""><img src="images/ads3.png" alt=""></a>
						</div><!-- ads block -->

						<div class="posts_block mbf clearfix">
							<div class="title color1">
								<h4>Travel</h4>
								<a href="#" class="feed toptip" title="RSS Feed"><i class="icon-feed"></i></a>
							</div>

							<div class="grid_6 alpha">
								<div class="mb float-shadow"><a href="single_post.html"><img src="images/assets/r_6.jpg" alt=""></a></div>
								<div class="post_m_content">
									<h3> <a href="single_post.html">Here's What Instagram Ads Will Look Like</a> </h3>
									<div class="meta mb"> 3 hours ago    /    <a href="single_post.html">0 comments</a> </div>
									<p> Lorem Ipsum is simply dummy text of the printing and typesetting... </p>
								</div><!-- post content -->
							</div><!-- grid6 omega -->

							<div class="grid_6 omega">
								<div class="small_slider_travel owl-carousel owl-theme">
									<div class="item clearfix">
										<ul class="small_posts">
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb5.jpg" alt="#"></a>
												<h3><a href="single_post.html">What worst could be the worst?</a></h3>
												<div class="meta mb"> 5 hours ago    /    <a href="single_post.html">1 comments</a> </div>
											</li>
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb6.jpg" alt="#"></a>
												<h3><a href="single_post.html">Praesent ipsum adipiscing mi eget ipsum</a></h3>
												<div class="meta mb"> 1 days ago    /    <a href="single_post.html">5 comments</a> </div>
											</li>
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb7.jpg" alt="#"></a>
												<h3><a href="single_post.html">Paul Thomson on post with SoundCloud</a></h3>
												<div class="meta mb"> 3 days ago    /    <a href="single_post.html">14 comments</a> </div>
											</li>
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb8.jpg" alt="#"></a>
												<h3><a href="single_post.html">For the days of peace and warmth</a></h3>
												<div class="meta mb"> 3 days ago    /    <a href="single_post.html">14 comments</a> </div>
											</li>
										</ul>
									</div>
									<div class="item clearfix">
										<ul class="small_posts">
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb11.jpg" alt="#"></a>
												<h3><a href="single_post.html">What worst could be the worst?</a></h3>
												<div class="meta mb"> 5 hours ago    /    <a href="single_post.html">1 comments</a> </div>
											</li>
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb12.jpg" alt="#"></a>
												<h3><a href="single_post.html">Praesent ipsum adipiscing mi eget ipsum</a></h3>
												<div class="meta mb"> 1 days ago    /    <a href="single_post.html">5 comments</a> </div>
											</li>
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb6.jpg" alt="#"></a>
												<h3><a href="single_post.html">Praesent ipsum adipiscing mi eget ipsum</a></h3>
												<div class="meta mb"> 4 days ago    /    <a href="single_post.html">5 comments</a> </div>
											</li>
										</ul>
									</div>
								</div>
							</div><!-- grid6 omega -->
						</div><!-- posts block Travel -->

						<div class="posts_block mbf clearfix">
							<div class="title color3">
								<h4>People</h4>
								<a href="#" class="feed toptip" title="People RSS Feed"><i class="icon-feed"></i></a>
							</div>

							<div class="grid_6 alpha">
								<div class="mb float-shadow"><a href="single_post.html"><img src="images/assets/r_11.jpg" alt=""></a></div>
								<div class="post_m_content">
									<h3> <a href="single_post.html">Here's What Instagram Ads Will Look Like</a> </h3>
									<div class="meta mb"> 3 hours ago    /    <a href="single_post.html">0 comments</a> </div>
									<p> Lorem Ipsum is simply dummy text of the printing and typesetting... </p>
								</div><!-- post content -->
							</div><!-- grid6 omega -->

							<div class="grid_6 omega">
								<div class="small_slider_travel owl-carousel owl-theme">
									<div class="item clearfix">
										<ul class="small_posts">
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb2.jpg" alt="#"></a>
												<h3><a href="single_post.html">What worst could be the worst?</a></h3>
												<div class="meta mb"> 5 hours ago    /    <a href="single_post.html">1 comments</a> </div>
											</li>
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb8.jpg" alt="#"></a>
												<h3><a href="single_post.html">Praesent ipsum adipiscing mi eget ipsum</a></h3>
												<div class="meta mb"> 1 days ago    /    <a href="single_post.html">5 comments</a> </div>
											</li>
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb1.jpg" alt="#"></a>
												<h3><a href="single_post.html">Paul Thomson on post with SoundCloud</a></h3>
												<div class="meta mb"> 3 days ago    /    <a href="single_post.html">14 comments</a> </div>
											</li>
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb10.jpg" alt="#"></a>
												<h3><a href="single_post.html">For the days of peace and warmth</a></h3>
												<div class="meta mb"> 3 days ago    /    <a href="single_post.html">14 comments</a> </div>
											</li>
										</ul>
									</div>
									<div class="item clearfix">
										<ul class="small_posts">
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb4.jpg" alt="#"></a>
												<h3><a href="single_post.html">What worst could be the worst?</a></h3>
												<div class="meta mb"> 5 hours ago    /    <a href="single_post.html">1 comments</a> </div>
											</li>
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb3.jpg" alt="#"></a>
												<h3><a href="single_post.html">Praesent ipsum adipiscing mi eget ipsum</a></h3>
												<div class="meta mb"> 1 days ago    /    <a href="single_post.html">5 comments</a> </div>
											</li>
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb9.jpg" alt="#"></a>
												<h3><a href="single_post.html">Praesent ipsum adipiscing mi eget ipsum</a></h3>
												<div class="meta mb"> 4 days ago    /    <a href="single_post.html">5 comments</a> </div>
											</li>
										</ul>
									</div>
								</div>
							</div><!-- grid6 omega -->
						</div><!-- posts block People -->

					</div><!-- end grid9 -->

					<div class="grid_4 alpha sidebar sidebar_b">
						<div class="widget">
							<div class="title"><h4>New Video</h4></div>
							<iframe src="http://player.vimeo.com/video/13897659?color=E84A4A" height="180"></iframe><a href="http://vimeo.com/13897659">Iconic Poster design</a>
						</div><!-- widget -->

						<div class="widget">
							<div id="calendar_wrap"><table id="wp-calendar">
								<caption>January 2014</caption>
									<thead>
										<tr>
											<th scope="col" title="Monday">M</th>
											<th scope="col" title="Tuesday">T</th>
											<th scope="col" title="Wednesday">W</th>
											<th scope="col" title="Thursday">T</th>
											<th scope="col" title="Friday">F</th>
											<th scope="col" title="Saturday">S</th>
											<th scope="col" title="Sunday">S</th>
										</tr>
									</thead>
							
									<tfoot>
										<tr>
											<td colspan="3" id="prev"><a href="#" title="View posts for December 2013">« Dec</a></td>
											<td class="pad">&nbsp;</td>
											<td colspan="3" id="next" class="pad">&nbsp;</td>
										</tr>
									</tfoot>
							
									<tbody>
										<tr><td colspan="2" class="pad">&nbsp;</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
										<tr><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td></tr>
										<tr><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td id="today">18</td><td>19</td></tr>
										<tr><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td></tr>
										<tr><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td><td class="pad" colspan="2">&nbsp;</td></tr>
									</tbody>
								</table>
							</div>
						</div><!-- widget -->

						<div class="widget">
							<div class="title"><h4>Random Posts</h4></div>
							<div class="relative float-shadow mb">
								<a href="single_post.html"><img src="images/assets/r_1.jpg" alt=""></a>
								<div class="r_content">
									<a class="cat color5" href="#" title="View all posts under Music">Music</a>
									<div class="r_title"><a href="single_post.html">At vero eos et accusamus et iusto</a></div>
								</div>
							</div><!-- relative -->

							<div class="relative float-shadow mb">
								<a href="single_post.html"><img src="images/assets/r_2.jpg" alt=""></a>
								<div class="r_content">
									<a class="cat color6" href="#" title="View all posts under TV">TV</a>
									<div class="r_title"><a href="single_post.html">A picture of Sin Fang in Bairro Alto</a></div>
								</div>
							</div><!-- relative -->

							<div class="relative float-shadow mb">
								<a href="single_post.html"><img src="images/assets/r_3.jpg" alt=""></a>
								<div class="r_content">
									<a class="cat color2" href="#" title="View all posts under Travel">Travel</a>
									<div class="r_title"><a href="single_post.html">Bairro Alto in Lisboa, Portugal</a></div>
								</div>
							</div><!-- relative -->
						</div><!-- widget -->

						<div class="widget">
							<div class="title"><h4>Popular Tags</h4></div>
							<div class="tags">
								<a href="#" title="17 topic"> corporate </a>
								<a href="#" title="44 topic"> theme </a>
								<a href="#" title="10 topic"> css3 </a>
								<a href="#" title="2 topic"> premium </a>
								<a href="#" title="29 topic"> html5 </a>
								<a href="#" title="4 topic"> business </a>
								<a href="#" title="20 topic"> all purpose </a>
								<a href="#" title="14 topic"> jquery </a>
								<a href="#" title="1 topic"> muse template </a>
								<a href="#" title="4 topic"> minimalist </a>
							</div>
						</div><!-- widget -->

						<div class="widget">
							<div class="title"><h4>Like Us</h4></div>
							<div class="bg_light"><iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=313&amp;height=300&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true&amp;appId=138798126277575" height="292"></iframe></div>
						</div><!-- widget -->

					</div><!-- end grid9 -->
				</div><!-- end grid9 -->

				<div class="grid_3 omega sidebar sidebar_a">
					<div class="widget">
						<ul class="counter clearfix">
							<li class="twitter">
								<a href="#"><i class="fa fa-twitter"></i></a>
								<span> 2545 <br> Followes </span>
							</li>
							<li class="facebook">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<span> 1317 <br> Likes </span>
							</li>
							<li class="dribbble">
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<span> 325 <br> Followes </span>
							</li>
							<li class="rss">
								<a href="#"><i class="fa fa-rss"></i></a>
								<span> 27 <br> Subscribers </span>
							</li>
						</ul>
					</div><!-- widget -->

					<div class="widget">
						<div class="ads_widget clearfix">
							<a href="#"><img src="images/ads2.jpg" alt="#"></a>
							<a href="#" class="lefter mt"><img src="images/ads3.jpg" alt="#"></a>
							<a href="#" class="righter mt"><img src="images/ads3.jpg" alt="#"></a>
						</div><!-- widget -->
					</div><!-- widget -->

					<div class="widget">
						<div class="title"><h4>What's Hot</h4></div>

							<div class="small_slider_hots owl-carousel owl-theme">
								

									<ul class="small_posts">
										<li class="clearfix">
											<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb9.jpg" alt="#"><span>5</span></a>
											<h3><a href="single_post.html">What worst could be the worst?</a></h3>
											<div class="meta mb"> <a class="cat color6" href="#" title="View all posts under People">People</a><span class="post_rating" href="#" title="Rating">7</span> </div>
										</li>
										<li class="clearfix">
											<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb8.jpg" alt="#"><span>6</span></a>
											<h3><a href="single_post.html">Praesent ipsum adipiscing mi eget ipsum</a></h3>
											<div class="meta mb"> <a class="cat color7" href="#" title="View all posts under TV">TV</a><span class="post_rating" href="#" title="Rating">5.89</span> </div>
										</li>
										<li class="clearfix">
											<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb7.jpg" alt="#"><span>7</span></a>
											<h3><a href="single_post.html">Paul Thomson on post with SoundCloud</a></h3>
											<div class="meta mb"> <a class="cat color8" href="#" title="View all posts under Society">Society</a><span class="post_rating" href="#" title="Rating">5.5</span> </div>
										</li>
										<li class="clearfix">
											<a class="s_thumb float-shadow" href="single_post.html"><img width="70" height="70" src="images/assets/thumb6.jpg" alt="#"><span>8</span></a>
											<h3><a href="single_post.html">For the days of peace and warmth</a></h3>
											<div class="meta mb"> <a class="cat color3" href="#" title="View all posts under Health">Health</a><span class="post_rating" href="#" title="Rating">4</span> </div>
										</li>
									</ul>
								
							</div><!-- /slides -->
					</div><!-- /widget -->

					<div class="widget">
						<div class="latest_tweets">
							<h4> <i class="fa fa-twitter"></i>  @iPress <small> tweets </small> </h4>
							<div class="tweets">
								<div class="tweets_slider owl-carousel owl-theme">
									<div class="item clearfix">
										Singolo is a free PSD template of a flat, single page website created by @T20 #freebie #psd <a href="#">http://bit.ly/19XM8Lj</a> <br><br>
										2 hours ago  
									</div><!-- /slide -->
									<div class="item clearfix">
										Singolo is a free PSD template of a flat, single page website created by @T20 #freebie #psd <a href="#">http://bit.ly/19XM8Lj</a> <br><br>
										1 day ago  
									</div><!-- /slide -->
									<div class="item clearfix">
										Singolo is a free PSD template of a flat, single page website created by @T20 #freebie #psd <a href="#">http://bit.ly/19XM8Lj</a> <br><br>
										5 days ago  
									</div><!-- /slide -->
								</div><!-- /tweets slider -->
							</div><!-- /tweets -->
						</div><!-- /latest tweets -->
					</div><!-- /widget -->

					<div class="widget">
						<div class="title"><h4>Polls</h4></div>
						<div class="wp-polls">
							<form class="wp-polls-form" action="#" method="post">
								<p class="tac"><strong>What do you think about our website?</strong></p>
								<div class="wp-polls-ans">
									<ul class="wp-polls-ul">
										<li><input type="radio" name="poll_2" value="6"> <label for="poll-answer-6">Awesome</label></li>
										<li><input type="radio" name="poll_2" value="7"> <label for="poll-answer-7">Super</label></li>
										<li><input type="radio" name="poll_2" value="8"> <label for="poll-answer-8">Normal</label></li>
										<li><input type="radio" name="poll_2" value="9"> <label for="poll-answer-9">Bad</label></li>
									</ul>
							
									<input type="button" name="vote" value="   Vote   " class="Buttons">
									<input type="button" name="results" value="   View Results   " class="Buttons">
								</div>
							</form>
						</div>
					</div><!-- widget -->

					<div class="widget">
						<div class="title"><h4>Recent Comments</h4></div>
						<ul class="recent_comments small_posts">
							<li class="clearfix">
								<a class="s_thumb float-shadow" href="single_post.html"><img width="80" height="80" src="images/assets/avatar1.jpg" alt="#"></a>
								<h5><a href="#">Alex Cohn</a>:</h5>
								<p>Lorem Ipsum is simply dummy text of the printing...</p>
							</li>
							<li class="clearfix">
								<a class="s_thumb float-shadow" href="single_post.html"><img width="80" height="80" src="images/assets/avatar2.jpg" alt="#"></a>
								<h5><a href="#">Michele</a>:</h5>
								<p>Here's What Instagram Ads Will Look Like...</p>
							</li>
							<li class="clearfix">
								<a class="s_thumb float-shadow" href="single_post.html"><img width="80" height="80" src="images/assets/avatar3.jpg" alt="#"></a>
								<h5><a href="#">Admin</a>:</h5>
								<p>Lorem ipsum is dolor sit amet text of the ipsum...</p>
							</li>
							<li class="clearfix">
								<a class="s_thumb float-shadow" href="single_post.html"><img width="80" height="80" src="images/assets/avatar4.jpg" alt="#"></a>
								<h5><a href="#">Tomas Giggs</a>:</h5>
								<p>Lorem Ipsum is simply dummy text of the printing...</p>
							</li>
						</ul>
					</div><!-- /widget -->

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








































	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


  <div id="page-wrapper"><div id="page">

    <div id="header"><div class="section clearfix">

      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div id="site-name"><strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong></div>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /#name-and-slogan -->
      <?php endif; ?>

      <?php print render($page['header']); ?>

    </div></div> <!-- /.section, /#header -->

    <?php if ($main_menu || $secondary_menu): ?>
      <div id="navigation"><div class="section">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
        <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
      </div></div> <!-- /.section, /#navigation -->
    <?php endif; ?>

    <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

    <?php print $messages; ?>

    <div id="main-wrapper"><div id="main" class="clearfix">

      <div id="content" class="column"><div class="section">
        <?php //if ($page['highlighted']): ?><div id="highlighted"><?php //print render($page['highlighted']); ?></div><?php //endif; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div></div> <!-- /.section, /#content -->

      <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_first']); ?>
        </div></div> <!-- /.section, /#sidebar-first -->
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_second']); ?>
        </div></div> <!-- /.section, /#sidebar-second -->
      <?php endif; ?>

    </div></div> <!-- /#main, /#main-wrapper -->

    <div id="footer"><div class="section">
      <?php print render($page['footer']); ?>
    </div></div> <!-- /.section, /#footer -->

  </div></div> <!-- /#page, /#page-wrapper -->
