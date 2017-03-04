<?php
/**
 * @file
 * Zen theme's implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation. $language->dir
 *   contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $jump_link_target: The HTML ID of the element that the "Jump to Navigation"
 *   link should jump to. Defaults to "main-menu".
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It should be placed within the <body> tag. When selecting through CSS
 *   it's recommended that you use the body tag, e.g., "body.front". It can be
 *   manipulated through the variable $classes_array from preprocess functions.
 *   The default values can contain one or more of the following:
 *   - front: Page is the home page.
 *   - not-front: Page is not the home page.
 *   - logged-in: The current viewer is logged in.
 *   - not-logged-in: The current viewer is not logged in.
 *   - node-type-[node type]: When viewing a single node, the type of that node.
 *     For example, if the node is a Blog entry, this would be "node-type-blog".
 *     Note that the machine name of the content type will often be in a short
 *     form of the human readable label.
 *   The following only apply with the default sidebar_first and sidebar_second
 *   block regions:
 *     - two-sidebars: When both sidebars have content.
 *     - no-sidebars: When no sidebar content exists.
 *     - one-sidebar and sidebar-first or sidebar-second: A combination of the
 *       two classes when only one of the two sidebars have content.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see zen_preprocess_html()
 * @see template_process()
 */
$data_uri = arg(0);
$page_boxed_layout = theme_get_setting('page_boxed_layout');
$display_page_boxed_layout = explode(',',$page_boxed_layout);
$page_wide_layout = theme_get_setting('page_wide_layout');
$display_page_wide_layout = explode(',',$page_wide_layout);
$safari = strpos($_SERVER["HTTP_USER_AGENT"], 'Safari') ? true : false;
$chrome = strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;
$layout_option = theme_get_setting('layout_option');
$b_checkbox = theme_get_setting('b_checkbox');
$animation = theme_get_setting('animation');
?>
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="<?php print $language->language; ?>"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="<?php print $language->language; ?>"><!--<![endif]-->
<head>
    <?php print $head; ?>
    <?php
    global $theme_root;
    global $base_url;
    ?>
    <title><?php print $head_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <!--[if IE 9]>
    <link rel="stylesheet" href="<?php echo $theme_root; ?>/css/ie9.css">
    <![endif]-->
    <?php print $styles; ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <link href="<?php echo $theme_root; ?>/css/jackbox-ie8.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo $theme_root; ?>/css/ie.css">
    <![endif]-->
    <!--[if gt IE 8]>
    <link href="<?php echo $theme_root; ?>/css/jackbox-ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--[if IE 7]>
    <link rel="stylesheet" href="<?php echo $theme_root; ?>/css/fontello-ie7.css">
    <![endif]-->
    <!-- Stylesheets -->
    <style type="text/css">
        .no-fouc{display:none;}
        <?php if($safari && !$chrome)
        {print '.media-hover .media-icons {
            top:50%;
        position: absolute;
        left: 50%;
        margin-left: -55px;
    }';}?>
    </style>
    <?php print $scripts; ?>
    <?php if (theme_get_setting('loader') == 1) : ?>
        <script type="text/javascript">
                jQuery(document).ready(function(){
                    jQuery('html').addClass('no-fouc');
                    "use strict";
                    jQuery('html').show();
                    var window_w = jQuery(window).width();
                    var window_h = jQuery(window).height();
                    var window_s = jQuery(window).scrollTop();
                    jQuery("body").queryLoader2({
                        backgroundColor: '#f2f4f9',
                        barColor: '#63b2f5',
                        barHeight: 4,
                        percentage:false,
                        deepSearch:true,
                        minimumTime:1000,
                        onComplete: function(){
                            jQuery('.animate-onscroll').filter(function(index){

                                return this.offsetTop < (window_s + window_h);

                            }).each(function(index, value){

                                var el = jQuery(this);
                                var el_y = jQuery(this).offset().top;

                                if((window_s) > el_y){
                                    jQuery(el).addClass('animated fadeInDown').removeClass('animate-onscroll');
                                    setTimeout(function(){
                                        jQuery(el).css('opacity','1').removeClass('animated fadeInDown');
                                    },2000);
                                }

                            });

                        }
                    });

                });
        </script>
    <?php endif; ?>
    <?php if($animation == 1):?>
        <script type="text/javascript" src="<?php print $theme_root;?>/js/animation.js"></script>
    <?php endif;?>
    <!-- jQuery -->
</head>
<body class="sticky-header-on tablet-sticky-header <?php print $classes; ?> <?php if((theme_get_setting('layout_option') == 'boxed' && !in_array($data_uri, $display_page_wide_layout)) || (theme_get_setting('layout_option') == 'wide' && in_array($data_uri, $display_page_boxed_layout))) { echo 'boxed-layout'; } ?>" <?php print $attributes;?>
      style="<?php if($b_checkbox == '1' && in_array($data_uri,$display_page_boxed_layout)):?>
          <?php if(theme_get_setting('background_type') == 'color') : ?>background:<?php print theme_get_setting('background_color'); ?>
          <?php elseif(theme_get_setting('background_type') == 'image'):?>background-image:url(<?php print $theme_root;?>/img/background/<?php print theme_get_setting('background_image');?>.jpg);
          <?php elseif(theme_get_setting('background_type') == 'upload'):?>background-image:url(<?php print file_create_url(theme_get_setting('upload_image'));?>);
          <?php endif; ?>
      <?php endif;?>">
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Container -->
<div class="container">
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
    <!-- Back To Top -->
    <a href="#" id="button-to-top"><i class="icons icon-up-dir"></i></a>
    <?php
    if (theme_get_setting('switcher') == 1) {
        include_once("includes/template_switcher.inc");
    }
    ?>
</div>
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo $theme_root; ?>/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="<?php echo $theme_root; ?>/js/script_ie.js"></script>
<![endif]-->
</body>

</html>

