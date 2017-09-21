<?php
/**
 * DokuWiki Bootstrap3 Template
 *
 * @link     http://dokuwiki.org/template:bootstrap3
 * @author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

if (!defined('DOKU_INC')) die(); /* must be run from within DokuWiki */
@require_once(dirname(__FILE__).'/tpl_functions.php'); /* include hook for template functions */
header('X-UA-Compatible: IE=edge,chrome=1');

include_once(dirname(__FILE__).'/tpl_global.php'); // Include template global variables

// Get the template info (useful for debug)
if ($INFO['isadmin'] && isset($_GET['do']) && $_GET['do'] == 'check') {
  $template_info = confToHash(dirname(__FILE__).'/template.info.txt');
  msg('bootstrap3 template version: v' . $template_info['date'], 1, '', '', MSG_ADMINS_ONLY);
}

?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang'] ?>"
  lang="<?php echo $conf['lang'] ?>" dir="<?php echo $lang['direction'] ?>" class="no-js">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title><?php echo bootstrap3_page_browser_title() ?></title>
  <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <?php echo tpl_favicon(array('favicon', 'mobile')) ?>
  <?php tpl_includeFile('meta.html') ?>
  <?php foreach ($bootstrap_styles as  $bootstrap_style): ?>
  <link type="text/css" rel="stylesheet" href="<?php echo $bootstrap_style; ?>" />
  <?php endforeach; ?>
  <link type="text/css" rel="stylesheet" href="<?php echo DOKU_TPL ?>assets/font-awesome/css/font-awesome.min.css" />
  <?php tpl_metaheaders() ?>
  <link type="text/css" rel="stylesheet" href="<?php echo DOKU_TPL ?>assets/perfect-scrollbar/perfect-scrollbar.min.css">
  <link type="text/css" rel="stylesheet" href="<?php echo DOKU_TPL ?>assets/nano-scroller/nanoscroller.css">
  <link type="text/css" rel="stylesheet" href="<?php echo DOKU_TPL ?>css/custom.css?20161028a">
  <script src="<?php echo DOKU_TPL ?>assets/perfect-scrollbar/perfect-scrollbar.jquery.min.js"></script>
  <script src="<?php echo DOKU_TPL ?>assets/nano-scroller/nanoscroller.min.js"></script>
  <script src="<?php echo DOKU_TPL ?>js/jquery.scrollTo.min.js"></script>
  <script src="<?php echo DOKU_TPL ?>js/custom.js?20161028"></script>
  <style type="text/css">
    body { padding-top: <?php echo $navbar_padding ?>px; }
    <?php if (bootstrap3_conf('tocCollapseSubSections')): ?>
    #dw__toc .nav .nav .nav { display: none; }
    <?php endif; ?>
    .dw-toc-affix { z-index: 9999; top: <?php echo ($navbar_padding -10) ?>px; }
  </style>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script type="text/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php if ($fixedTopNavbar): ?>
  <script type="text/javascript">/*<![CDATA[*/
    jQuery(document).ready(function() {
        //jQuery('.dw-sidebar-content').addClass('nano');
        //jQuery(".dw-sidebar-body").addClass('nano-content');
        if (location.hash) {
            setTimeout(function() {
                scrollBy(0, -<?php echo $navbar_padding ?>);
            }, 1);
        }
        function sidebar_position(){
            if (jQuery(window).width()>768){
                var windowHeight = jQuery(window).height();
                var scrollTop = jQuery(window).scrollTop();
                var scrollBottom = jQuery(document).height()-jQuery(window).height()-jQuery(document).scrollTop();
                var asideOffsetTop = jQuery('#dokuwiki__aside').offset().top; // 115;
                var asideWidth = jQuery('#dokuwiki__aside').width();
                var pinTop = 50; // CSS文件.pin的top值;
                var footerHeight = jQuery('#dw__footer').outerHeight();

                if (scrollTop <= asideOffsetTop - pinTop){
                    jQuery('#dokuwiki__aside').height(windowHeight-asideOffsetTop+scrollTop);
                    jQuery('.dw-sidebar-content').height(windowHeight-asideOffsetTop+scrollTop);
                    jQuery('.dw-sidebar-content').removeClass('pin');
                    jQuery('.dw-sidebar-content').width('auto');
                }else if (scrollTop > asideOffsetTop - pinTop && scrollBottom > footerHeight){
                    jQuery('#dokuwiki__aside').height(windowHeight-pinTop);
                    jQuery('.dw-sidebar-content').height(windowHeight-pinTop);
                    jQuery('.dw-sidebar-content').addClass('pin');
                    jQuery('.dw-sidebar-content').outerWidth(asideWidth);
                }else{
                    jQuery('#dokuwiki__aside').height(windowHeight-pinTop-footerHeight+scrollBottom);
                    jQuery('.dw-sidebar-content').height(windowHeight-pinTop-footerHeight+scrollBottom);
                    jQuery('.dw-sidebar-content').addClass('pin');
                    jQuery('.dw-sidebar-content').outerWidth(asideWidth);
                }
                jQuery('.dw-sidebar-content').perfectScrollbar('update');
            }else{
                jQuery('#dokuwiki__aside').height('auto');
                jQuery('.dw-sidebar-content').height('auto');
                jQuery('.dw-sidebar-content').removeClass('pin');
                jQuery('.dw-sidebar-content').width('auto');
            }
        }

        if (jQuery(window).width()>768 && jQuery('#dokuwiki__aside').size() > 0){
            jQuery('.dw-sidebar-content').perfectScrollbar();
            jQuery(window).resize(function(){
                 sidebar_position();
            });
            jQuery(window).scroll(function(){
                sidebar_position();
                jQuery('#dw__toc .panel-body').scrollTo('.active:last',{
                    offset: -100
                });
            });
            jQuery(window).resize();
            jQuery('.dw-sidebar-content').scrollTo('.active',200,{
                offset: -100
            });
            //jQuery(".dw-sidebar-content").nanoScroller();
            //makeScrollable(".dw-sidebar-content", ".dw-sidebar-body");

            jQuery('#dw__toc .panel-body').perfectScrollbar();
            setTimeout(function(){
                jQuery('#dw__toc .panel-body').perfectScrollbar('update');
            },500);

            // 修正模板Toc宽度计算错误的BUG
            jQuery('#dw__toc').width(jQuery('article .toc-col').width());
        }
    });
  /*!]]>*/</script>
  <?php endif; ?>
</head>
<?php tpl_flush() ?>
<body class="<?php echo trim(implode(' ', $body_classes)) ?>">
  <!--[if IE 8 ]><div id="IE8"><![endif]-->
  <div id="dokuwiki__site" class="container<?php echo (bootstrap3_is_fluid_container()) ? '-fluid' : '' ?>">
    <div id="dokuwiki__top" class="site <?php echo tpl_classes(); ?>">

      <?php tpl_includeFile('topheader.html') ?>

      <!-- header -->
      <div id="dokuwiki__header">
        <?php require_once('tpl_navbar.php'); ?>
      </div>
      <!-- /header -->

      <?php tpl_includeFile('header.html') ?>
      <?php tpl_includeFile('social.html') ?>

      <?php require_once('tpl_breadcrumbs.php'); ?>

      <p class="pageId text-right">
        <?php if(bootstrap3_conf('showPageId')): ?><span class="label label-primary"><?php echo hsc($ID) ?></span><?php endif; ?>
      </p>

      <div id="dw__msgarea">
        <?php bootstrap3_html_msgarea() ?>
      </div>

      <main class="main row" role="main">

        <?php bootstrap3_sidebar_include('left') ?>

        <!-- ********** CONTENT ********** -->
        <article id="dokuwiki__content" class="<?php echo bootstrap3_container_grid() ?>" <?php echo ((bootstrap3_conf('semantic')) ? sprintf('itemscope itemtype="http://schema.org/%s"', bootstrap3_conf('schemaOrgType')) : '') ?>>

          <div class="<?php echo ($pageOnPanel ? 'panel panel-default' : 'no-panel') ?>" <?php echo (($semantic) ? 'itemprop="articleBody"' : '') ?>>
            <div class="page <?php echo ($pageOnPanel ? 'panel-body' : '') ?>">

              <?php

                tpl_flush(); /* flush the output buffer */

                // Page-Header DokuWiki page
                tpl_includeFile('pageheader.html');

                // Page-Header DokuWiki page
                if ($ACT == 'show') tpl_include_page('pageheader', 1, 1);

                // render the content into buffer for later use
                ob_start();
                tpl_content(false);

                $content = ob_get_clean();
                $toc     = bootstrap3_toc(tpl_toc(true), true);

                $content = '<div class="dw-content">' . $content . '</div>';

                // Include Page Tools
                require_once('tpl_page_tools.php');

                // Include the TOC layout
                if ($toc) {
                  require_once('tpl_toc.php');
                } else {
                  echo $content;
                }

                tpl_flush();

                // Page-Footer hook
                tpl_includeFile('pagefooter.html');

                // Page-Footer DokuWiki page
                if ($ACT == 'show') tpl_include_page('pagefooter', 1, 1);

              ?>

            </div>
          </div>

        </article>

        <?php bootstrap3_sidebar_include('right') ?>

      </main>

      <footer id="dokuwiki__footer" class="small">

        <a href="javascript:void(0)" class="back-to-top hidden-print btn btn-default btn-sm" title="<?php echo $lang['btn_top'] ?>" id="back-to-top" accesskey="t"><i class="fa fa-arrow-up"></i></a>

        <div class="text-right">

          <?php if (bootstrap3_conf('showPageInfo')): ?>
          <span class="docInfo text-muted">
            <?php tpl_pageinfo() /* 'Last modified' etc */ ?>
          </span>
          <?php endif ?>

          <?php if (bootstrap3_conf('showLoginOnFooter')): ?>
          <span class="loginLink hidden-print">
            <?php echo tpl_action('login', 1, 0, 1, '<i class="fa fa-sign-in"></i> '); ?>
          </span>
          <?php endif; ?>

        </div>

        <div class="text-center hidden-print">
          <p id="dw__license"><?php tpl_license('') ?></p>
        </div>

        <?php
          // DokuWiki badges
          require_once('tpl_badges.php');

          // Footer hook
          tpl_includeFile('footer.html');

          // Footer DokuWiki page
          require_once('tpl_footer.php');
        ?>

      </footer>

      <?php
        // Cookie-Law banner
        require_once('tpl_cookielaw.php');
      ?>

    </div><!-- /site -->

    <?php tpl_indexerWebBug() /* provide DokuWiki housekeeping, required in all templates */ ?>

    <div id="screen__mode"><?php /* helper to detect CSS media query in script.js */ ?>
      <span class="visible-xs"></span>
      <span class="visible-sm"></span>
      <span class="visible-md"></span>
      <span class="visible-lg"></span>
    </div>

  </div>
  <!--[if lte IE 8 ]></div><![endif]-->

</body>
</html>
