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


  <header>
    <div class="container">
     <!-- Start Main Menu -->
      <nav>
        <?php print render($page['header']); ?>
      </nav>
      <!-- End Main Menu -->

      <!-- Start Social Icons  -->
      <aside>
        <ul class="social icon">
          <li><a href="https://www.facebook.com/OBGcockerrescue" title="Facebook">v</a></li>
          <li><a href="http://obgcockerconnection.blogspot.com" title="Blogger">j</a></li>
          <li><a href="https://twitter.com/OBGcockerrescue" title="Twitter">a</a></li>
          <li><a href="http://pinterest.com/obgrescue/" title="Pinterest">p</a></li>
	  <li><a href="http://instagram.com/obgcockerrescue" title="Instagram">t</a></li>
        </ul>
      </aside>
    <!-- End Social Icons -->
    </div>
  </header>

  <section class="page_heading">
    <div class="container">
      <div class="logo">
         <?php if ($logo): ?>
        	<a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>"><img src="<?php print $logo; ?>"/></a>
       	 <?php endif; ?>
      </div>
      <div class="tagline"><?php print $site_name; ?></div>
      <div class="heading_banner">
            <img src="<?php echo drupal_get_path('theme', 'obgbasic'); ?>/images/dcskyline.png">
      </div>
    </div>
  </section>

  <div class="page_wrapper">
    <section class="container">

      <!-- Start Page Content -->
      <div id="home" class="page">

        <?php print $messages; ?>

        <div id="content" class="column">
          <div class="section">
            <?php print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php print render($tabs); ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>


            <?php print render($page['slideshow']); ?>

           <div class="sub_heading">
              <h2>Helping Cockers, Young and Old</h2>
              <span class="line"></span>
            </div> 

            <div class="full" id="revolution_wrap">

              <?php print render($page['content']); ?>

              <div id="actions">
               <div class="box one_half">
                 <div class="inner">
                    <div class="box_heading">
                      <span class="icon general-enclosed">b</span>
                      <h4><a href="adopt">Adopt</a></h4>
                    </div>
                    <p>Save a life, adopt!  Check out all our <a href="/adopt/dogs-available">adoptable dogs</a> and learn more about adopting through OBG.</p>
                 </div>
               </div>
               <div class="box one_half column_last">
                 <div class="inner">
                    <div class="box_heading">
                      <span class="icon general-enclosed">o</span>
                      <h4><a href="volunteer">Volunteer</a></h4>
                    </div>
                    <p>We need you!  Learn how your time can make a difference for this all-volunteer group.</p>
                 </div>
               </div>
               <div class="box one_half">
                 <div class="inner">
                     <div class="box_heading">
                      <span class="icon general-enclosed">c</span>
                      <h4><a href="donate">Donate</a></h4>
                    </div>
                    <p>Every little bit counts!  Feel confident knowing that your donation will go directly to the dogs.</p>
                    <p style="text-align:center;"><b>CFC#&nbsp;27768</b></p>
                  </div>
               </div>
               <div class="box one_half column_last">
                 <div class="inner">

                    <div class="box_heading">
                      <span class="icon general-enclosed">2</span>
                      <h4><a href="/shop">Shop</a></h4>
                    </div>
                    <p>Use <a href="shop/help-obg-online">our links</a> for <a 
href="http://smile.amazon.com/ref=smi_ge_rl_rd_gw?_encoding=UTF8&ein=54-1833707">Amazon Smile</a> or <a href="http://www.igive.com/welcome/lp7/cr44b.cfm">iGive</a> 
for shopping - we get $$$!  And <a href="shop/shop-for-a-cause">shop for a cause</a>, by purchasing items for which OBG gets a donation!.</p>
                  </div>
               </div>
              </div>


            </div>

            <?php //print $feed_icons; ?>

            <div class="framed_box" id="help">
              <span class="icon general">l</span>
              <div class="text">
                <h3>Donate what you can to help</h3>
                <span class="color">Your tax deductible donation provides medical care and temporary boarding for 200 dogs per year.</span>
              </div>
              <!---<a class="donate_button" href="donate">Donate Now!</a>-->
			<div class="donate_button_paypal">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="L2P7YRVE7EATA">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>	

            </div>

            <div id="items">
              <?php if ($page['home_content_left']): ?>
                <div id="home-content-left" class="one_third">
                  <?php print render($page['home_content_left']); ?>
                </div> <!--  /#home-content-left -->
              <?php endif; ?>
              <?php if ($page['home_content_middle']): ?>
                <div id="home-content-middle" class="one_third">
                  <?php print render($page['home_content_middle']); ?>
                </div> <!--  /#home-content-middle -->
              <?php endif; ?>
              <?php if ($page['home_content_right']): ?>
                <div id="home-content-right" class="one_third column_last">
                  <?php print render($page['home_content_right']); ?>
                </div> <!--  /#home-content-right -->
              <?php endif; ?>
            </div>



          </div>
        </div> <!-- /.section, /#content -->

      </div>
      <!-- End Page Content -->

    </section>
  </div>

  <footer>

    <div class="container">

      <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']) :?>


            <div class="first one_fourth footer-area">
            <?php if ($page['footer_first']) :?>
            <?php print render($page['footer_first']); ?>
            <?php endif; ?>
            </div>

            <div class="one_fourth footer-area">
            <?php if ($page['footer_second']) :?>
            <?php print render($page['footer_second']); ?>
            <?php endif; ?>
            </div>

            <div class="one_fourth footer-area">
            <?php if ($page['footer_third']) :?>
            <?php print render($page['footer_third']); ?>
            <?php endif; ?>
            </div>

            <div class="one_fourth footer-area column_last">
            <?php if ($page['footer_fourth']) :?>
            <?php print render($page['footer_fourth']); ?>
            <?php endif; ?>
            </div>


      <?php endif; ?>

      <?php print render($page['footer']); ?>

      <div class="copy">
        <p>Copyright ©2017 Oldies But Goodies Cocker Rescue. All Rights Reserved.</p>
      </div>

    </div>
  </footer>

<?php print render($page['bottom']); ?>
