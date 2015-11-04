<?php
/**
 * Template header, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>


<?php
if ($_SESSION['DW68700bfd16c2027de7de74a5a8202a6f']['translationlc'] == 'en') {
	tpl_includeFile('header_en.html');
} else {
	tpl_includeFile('header.html');
}
?>

<!-- ********** HEADER ********** -->
<div id="dokuwiki__header" style="display:none;"><div class="pad group">

            <li><a href="#dokuwiki__content"><?php echo $lang['skip_to_content']; ?></a></li>
        </ul>

        <h1><?php
            // get logo either out of the template images folder or data/media folder
            $logoSize = array();
            $logo = tpl_getMediaFile(array(':wiki:logo.png', ':logo.png', 'images/logo.png'), false, $logoSize);

            // display logo and wiki title in a link to the home page
            tpl_link(
                wl(),
                '<img src="'.$logo.'" '.$logoSize[3].' alt="" /> <span>'.$conf['title'].'</span>',
                'accesskey="h" title="[H]"'
            );
        ?></h1>
        <?php if ($conf['tagline']): ?>
            <p class="claim"><?php echo $conf['tagline']; ?></p>
        <?php endif ?>
    </div>

    <div class="tools group">
    <div class="headings group">
        <ul class="a11y skip">
        <!-- USER TOOLS -->
        <?php if ($conf['useacl']): ?>
            <div id="dokuwiki__usertools">
                <h3 class="a11y"><?php echo $lang['user_tools']; ?></h3>
                <ul>
                    <?php
                        if (!empty($_SERVER['REMOTE_USER'])) {
                            echo '<li class="user">';
                            tpl_userinfo(); /* 'Logged in as ...' */
                            echo '</li>';
                        }
                        tpl_action('admin', 1, 'li');
                        tpl_action('profile', 1, 'li');
                        tpl_action('register', 1, 'li');
                        tpl_action('login', 1, 'li');
                    ?>
                </ul>
            </div>
        <?php endif ?>

        <!-- SITE TOOLS -->
        

    </div>

    <!-- BREADCRUMBS -->
    <?php if($conf['breadcrumbs'] || $conf['youarehere']): ?>
        <div class="breadcrumbs">
            <?php if($conf['youarehere']): ?>
                <div class="youarehere">xxx<?php tpl_youarehere() ?></div>
            <?php endif ?>
            <?php if($conf['breadcrumbs']): ?>
                <div class="trace"><!--足迹--><?php tpl_breadcrumbs() ?></div>
            <?php endif ?>
        </div>
    <?php endif ?>

    <?php html_msgarea() ?>

    <hr class="a11y" />
</div></div><!-- /header -->