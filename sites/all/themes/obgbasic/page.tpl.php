

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
          <li><a href="https://twitter.com/OBGcockerrescue" title="Twitter">a</a></li>
          <li><a href="https://www.facebook.com/OBGcockerrescue" title="Facebook">v</a></li>
          <li><a href="http://pinterest.com/source/cockerspanielrescue.com/" title="Pinterest">p</a></li>
        </ul>
      </aside>
    <!-- End Social Icons -->

    </div>    
  </header>
  
  <section class="page_heading">
    <div class="logo container">
      <a href="">Advocate</a>     
      <span class="tagline">Oldies But Goodies Cocker Rescue</span>
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
        <div class="container clearfix">

            <div class="first one-fourth footer-area">
            <?php if ($page['footer_first']) :?>
            <?php print render($page['footer_first']); ?>
            <?php endif; ?>
            </div>

            <div class="one-fourth footer-area">
            <?php if ($page['footer_second']) :?>
            <?php print render($page['footer_second']); ?>
            <?php endif; ?>
            </div>

            <div class="one-fourth footer-area">
            <?php if ($page['footer_third']) :?>
            <?php print render($page['footer_third']); ?>
            <?php endif; ?> 
            </div>

            <div class="one-fourth footer-area last">
            <?php if ($page['footer_fourth']) :?>
            <?php print render($page['footer_fourth']); ?>
            <?php endif; ?> 
            </div>

        </div>
      <?php endif; ?>
      
      <?php print render($page['footer']); ?>

      <div class="copy">
        <p>Copyright ©2013 Oldies But Goodies Cocker Rescue. All Rights Reserved.</p>
      </div>

    </div>
  </footer>

<?php print render($page['bottom']); ?>