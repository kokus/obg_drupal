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
      <!-- Start Navigation -->
      <nav>
        <ul>
          <li class="current-menu-item"><a href="index.html">home</a></li>
          <li><a href="about.html">about</a></li>
          <li><a href="blog.html">blog</a></li>
          <li><a href="events_list.html">events</a></li>
          <li>
            <a href="#">gallery</a>
            <ul>
              <li><a href="gallery_2_columns.html">Gallery 2 Columns</a></li>
              <li><a href="gallery_3_columns.html">Gallery 3 Columns</a></li>
              <li><a href="gallery_4_columns.html">Gallery 4 Columns</a></li>
              <li>
                <a href="#">Gallery With Sidebar &rarr;</a>
                <ul>
                  <li><a href="gallery_2_columns_sidebar.html">2 Columns With Sidebar</a></li>
                  <li><a href="gallery_3_columns_sidebar.html">3 Columns With Sidebar</a></li>
                  <li><a href="gallery_4_columns_sidebar.html">4 Columns With Sidebar</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="donate.html">donate</a></li>
          <li><a href="contact.html">contact</a></li>
          <li><a href="styles.html">styles</a></li>
        </ul>
      </nav>
      <!-- End Navigation -->
      
      <!-- Start Social Icons -->
      <aside>
        <ul class="social icon">
          <li><a href="" title="Twitter">a</a></li>
          <li><a href="" title="Facebook">v</a></li>
          <li><a href="" title="Flickr">d</a></li>
          <li><a href="" title="Vimeo">c</a></li>
          <li><a href="" title="Google">t</a></li>
          <li><a href="" title="RSS">b</a></li>
          <!-- More Social Icons:
          <li><a href="" title="Picasa">e</a></li>
          <li><a href="" title="dribbble">f</a></li>
          <li><a href="" title="Forrst">g</a></li>
          <li><a href="" title="deviantART">h</a></li>
          <li><a href="" title="WordPress">i</a></li>
          <li><a href="" title="Blogger">j</a></li>
          <li><a href="" title="Yahoo!">k</a></li>
          <li><a href="" title="Amazon">l</a></li>
          <li><a href="" title="LinkedIn">m</a></li>
          <li><a href="" title="Last.fm">n</a></li>
          <li><a href="" title="StumbleUpon">o</a></li>
          <li><a href="" class="Pinterest">p</a></li>
          <li><a href="" title="Xing">q</a></li>
          <li><a href="" title="SoundCloud">r</a></li>
          <li><a href="" title="Delicious">s</a></li>
          <li><a href="" title="Mail">u</a></li>
          <li><a href="" title="Google">w</a></li>
          -->
        </ul>
      </aside>
      <!-- End Social Icons -->
    </div>    
  </header>
  
  <section class="page_heading home">
    <div class="logo container">
      <a href="">Advocate</a>     
      <span class="tagline">a theme for non-profits, charities, activists and political campaigns</span>
    </div>
  </section>
  
  <!-- Start Home -->
  <div id="home" class="page_wrapper">
    
    <!-- Start Container -->
    <section class="container">
    
      <!-- Start Page -->
      <div class="page">
        
        <!-- Start Slider -->
        <div class="flexslider-container">
          <div id="slider" class="flexslider">
            <ul class="slides">
              <li>
                    <img src="images/content/slide-1.jpg" alt="" />
                <p class="flex-caption">
                  <b>Protect Endangered Animals</b> - This is a great place to draw attention to your cause or charity with a bold image and some descriptive text.
                </p>
                </li>
                <li>
                    <img src="images/content/slide-2.jpg" alt="" />
                <p class="flex-caption">
                  <b>Protect Our Coral Reefs</b> - This slider is also responsive,  so your visitors see your site exactly as intended, no matter what device they're using.
                </p>                
                </li>
              <li>
                    <img src="images/content/slide-3.jpg" alt="" />
                <p class="flex-caption">
                  <b>Plant a Tree</b> - Advocate theme features unlimited color options and Google fonts making it easy to customize to your unique purpose.
                </p>
                </li>
                <li>
                    <img src="images/content/slide-4.jpg" alt="" />
                <p class="flex-caption">
                  <b>Save the Rainforest</b> - Bring awareness to your cause with style and function. 
                </p>
                </li>
              </ul>
          </div>
        </div>
        <!-- End Slider -->
        
        <div class="sub_heading">
          <h2>Join The Revolution</h2>
          <span class="line"></span>
        </div>
        <div id="revolution_wrap" class="full">
          <div id="description" class="one_third">
            <h3>Beautiful themes loaded with easy to customize options.</h3>

            <p>Advocate is built with an impressive set of custom options that lets you change font styles, create <span class="color">unlimited colors</span> and is  almost entirely image free! We use font-based icons and CSS3 buttons to make your site retina sharp and fast loading.</p>
            
          </div>
          
          <!-- Start Actions -->
          <div id="actions">
            <div class="box one_half">
              <div class="inner">
                <div class="box_heading">
                  <span class="icon general-enclosed">2</span>
                  <h4>Buy Stuff</h4>
                </div>
                <p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere.</p>
              </div>
            </div>
            <div class="box one_half column_last">
              <div class="inner">
                <div class="box_heading">
                  <span class="icon general-enclosed">o</span>
                  <h4>Volunteer</h4>
                </div>
                <p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere.</p>
              </div>
            </div>
            <div class="box one_half">
              <div class="inner">
                <div class="box_heading">
                  <span class="icon general-enclosed">~</span>
                  <h4>Donate</h4>
                </div>
                <p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere.</p>
              </div>
            </div>
            <div class="box one_half column_last">
              <div class="inner">
                <div class="box_heading">
                  <span class="icon general-enclosed">l</span>
                  <h4>Share</h4>
                </div>
                <p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere.</p>
              </div>
            </div>
          </div>
          <!-- End Actions -->    
        </div>
        
        
        <!-- Start Help -->
        <div id="help" class="framed_box">
          <span class="icon general">l</span>
          <div class="text">
            <h3>Donate what you can to help</h3>
            <span class="color">Your tax-free donation helps us do stuff for people, animals and communities in need.</span>
          </div>
          <a href="#" class="donate_button">Donate Now!</a>
        </div>
        <!-- End Help -->   
        
        <!-- Start Items -->    
        <div id="items">
        
          <!-- Start News -->
          <div class="news one_third">
            <div class="box_heading">
              <h2>Blog</h2>
              <span class="line"></span>
            </div>
            <ul>
              <li>
                <h5><a href="blog_single.html">Save The Whales</a></h5>
                <p>Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl.</p>
              </li>
              <li>
                <h5><a href="blog_single.html">Vote Superman for President</a></h5>
                <p>Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl.</p>
              </li>
              <li>
                <h5><a href="blog_single.html">Protect Our Coral Reefs</a></h5>
                <p>Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl.</p>
              </li>
              
            </ul>           
          </div>
          <!-- End News -->
          
          <!-- Start Events -->
          <div class="events one_third">
            <div class="box_heading">
              <h2>Events</h2>
              <span class="line"></span>
            </div>
            <ul>  
              <li>
                <div class="date"><span>23</span> May</div>
                <div class="details">
                  <h5><a href="event_description.html">Rainforest Protection Meeting</a></h5>
                  <p>6pm @ Golden State Park</p>
                </div>
              </li>
              <li>
                <div class="date"><span>22</span> May</div>
                <div class="details">
                  <h5><a href="event_description.html">Green Energy Conference</a></h5>
                  <p>2pm @ Menlo Park</p>
                </div>
              </li>
              <li>
                <div class="date"><span>21</span> May</div>
                <div class="details">
                  <h5><a href="event_description.html">Organic Pot Luck Night!</a></h5>
                  <p>6pm @ Santa clara University</p>
                </div>
              </li>
              <li>
                <div class="date"><span>18</span> May</div>
                <div class="details">
                  <h5><a href="event_description.html">Beach Clean Up</a></h5>
                  <p>10am @ Venice Beach</p>
                </div>
              </li>
            </ul>
          </div>
          <!-- End Events -->
          
          <!-- Start Sponsors -->
          <div id="sponsors" class="one_third column_last">
            <div class="box_heading">
              <h2>Our Sponsors</h2>
              <span class="line"></span>
            </div>
            <ul>
              <li><img src="images/content/sponsor-1.png" alt="Sponsor 1" /></li>
              <li class="last"><img src="images/content/sponsor-2.png" alt="Sponsor 2" /></li>
              <li><img src="images/content/sponsor-3.png" alt="Sponsor 3" /></li>
              <li class="last"><img src="images/content/sponsor-4.png" alt="Sponsor 4" /></li>
              <li><img src="images/content/sponsor-5.png" alt="Sponsor 5" /></li>
              <li class="last"><img src="images/content/sponsor-6.png" alt="Sponsor 6" /></li>
              <li class="bottom"><img src="images/content/sponsor-9.png" alt="Sponsor 9" /></li>
              <li class="bottom last"><img src="images/content/sponsor-7.png" alt="Sponsor 7" /></li>
            </ul>
          </div>
          <!-- End Sponsors -->
          
        </div>
        <!-- End Items -->
                
      </div>
      <!-- End Page -->
      
    </section>
    <!-- End Container -->
    
  </div>
  <!-- End Home -->
  
  <footer>
    <div class="container">
      <div class="widget one_fourth">
        <h2 class="logo">Advocate</h2>
        <p>This is a text widget, you can add anything you’d like to this area. Maybe  a little more info about your organization or perhaps even a bit of html.</p>
      </div>
      <div class="widget one_fourth">
        <h5>Twitter</h5>
        
        <div class="twitter_stream"></div>
        
      </div>
      <div class="widget one_fourth">
        <h5>Newsletter</h5>
                
        <form action="javascript:;" method="post">
          
          <p>Signup to receive breaking news.</p>
          
          <p>
            <label for="name">Name *</label>
            <input type="text" name="name" id="name" value="" />
          </p>
          <p>
            <label for="email">Email *</label>
            <input type="text" name="email" id="email" value="" />
          </p>
          
          <input type="submit" class="button white" value="Signup &#x2192;" />
          
        </form>
      </div>
      <div class="widget one_fourth column_last">
        <h5>Location</h5>
        <div class="location_widget">
          <p>
            1234 Advocate Drive <br/>
            Miami, FL 33445
          </p>
          <p>
            <span class="icon general">r</span> 123.333.4524 <br/>
            <span class="icon general">h</span> <a href="">info@advocate.com</a> <br/>
            <span class="icon general">l</span> <a href="">www.advocate.com</a>
          </p>
        </div>
      </div>
      
      <div class="copy">
        <p>Copyright &copy;2012 Advocate. All Rights Reserved.</p>
      </div>
      
    </div>
  </footer>


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
        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
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
