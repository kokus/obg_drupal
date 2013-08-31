  <div id="menu-bar-wrapper">
    <div class="container clearfix">
        <div id="menu-bar">
          <?php print render($page['navigation']); ?>
        </div>
    </div>
  </div>

  <div id="header-wrapper">

    <div class="container clearfix">

      <header id="header" role="banner">

        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
        <?php endif; ?>

        <?php if ($site_name || $site_slogan): ?>
          <hgroup id="name-and-slogan">
            <?php if ($site_name): ?>
              <h1 id="site-name">
               <span><?php print $site_name; ?></span>
              </h1>
            <?php endif; ?>

            <?php if ($site_slogan): ?>
              <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
            <?php endif; ?>
          </hgroup><!-- /#name-and-slogan -->
        <?php endif; ?>

        <!-- REMOVED /secondary menu  -->

        <?php print render($page['header']); ?>

      </header>

    </div>

  </div>


  <div id="main-wrapper">

    <div class="container clearfix">

      <div id="page">

          <div id="main">

            <div id="content" class="column" role="main">
             
              <?php print render($page['highlighted']); ?>

              <!-- REMOVED /Bredcrumbs-->

              <a id="main-content"></a>
              <?php print render($title_prefix); ?>
              <?php if ($title): ?>
                <h1 class="title" id="page-title"><?php print $title; ?></h1>
              <?php endif; ?>
              

              <?php print render($page['content']); ?>

              <?php print render($page['content_middle']); ?>

              <?php print render($page['content_bottom']); ?>
        
            </div><!-- /#content -->

              <!-- REMOVED /#navigation -->

            <?php
              // Render the sidebars to see if there's anything in them.
              $sidebar_first  = render($page['sidebar_first']);
              $sidebar_second = render($page['sidebar_second']);
            ?>

            <?php if ($sidebar_first || $sidebar_second): ?>
              <aside class="sidebars">
                <?php print $sidebar_first; ?>
                <?php print $sidebar_second; ?>
              </aside><!-- /.sidebars -->
            <?php endif; ?>

          </div><!-- /#main -->

          </div><!-- /#page -->
      </div>
  </div>

  <div id="footer-wrapper">
    
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


    <div class="container clearfix">
        <?php print render($page['footer']); ?>
    </div>

  </div>

  <?php print render($page['bottom']); ?>