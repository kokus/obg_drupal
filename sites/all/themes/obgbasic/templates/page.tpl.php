

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
          <li><a href="http://www.pinterest.com/obgrescue" title="Pinterest">p</a></li>
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
            <img src="/<?php echo drupal_get_path('theme', 'obgbasic'); ?>/images/dcskyline_xmas.png">
      </div>
    </div>
  </section>

  <div class="page_wrapper">
    <section class="container">

      <!-- Start Page Content -->
      <div id="about" class="page with_sidebar">

        <?php print $messages; ?>

        <div id="content" class="column">
          <div class="section">

            <div class="breadcrumb"><?php print $breadcrumb . $title; ?></div>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php print render($tabs); ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

            <?php print render($page['slideshow']); ?>

            <?php print render($page['content']); ?>
            <?php print $feed_icons; ?>
          </div>
        </div> <!-- /.section, /#content -->

      </div>
      <!-- End Page Content -->

      <!-- Start Sidebar -->
      <aside>
        <div id="sidebar">

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

        </div>
      </aside>
      <!-- End Sidebar -->

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
