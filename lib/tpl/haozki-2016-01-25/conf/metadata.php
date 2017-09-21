<?php
/*
 * configuration metadata
 *
 * @author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */


// Themes
$meta['bootstrapTheme']      = array('multichoice', '_choices' => array('default', 'optional', 'custom', 'bootswatch'));
$meta['bootswatchTheme']     = array('multichoice', '_choices' => array('easemob', 'cerulean', 'cosmo', 'cyborg', 'darkly', 'flatly', 'journal', 'lumen', 'paper', 'readable', 'sandstone', 'simplex', 'slate', 'spacelab', 'superhero', 'united', 'yeti'));
$meta['customTheme']         = array('string');
$meta['showThemeSwitcher']   = array('onoff');
$meta['hideInThemeSwitcher'] = array('multicheckbox', '_choices' => $meta['bootswatchTheme']['_choices']);
$meta['useLocalBootswatch']  = array('onoff');

// Sidebar
$meta['sidebarPosition']     = array('multichoice', '_choices' => array('left', 'right'));
$meta['rightSidebar']        = array('string');
$meta['leftSidebarGrid']     = array('string');
$meta['rightSidebarGrid']    = array('string');

// Navbar
$meta['inverseNavbar']       = array('onoff');
$meta['fixedTopNavbar']      = array('onoff');
$meta['showTools']           = array('multichoice', '_choices' => array('never', 'logged', 'always'));
$meta['showHomePageLink']    = array('onoff');
$meta['showUserHomeLink']    = array('onoff');
$meta['hideLoginLink']       = array('onoff');
$meta['individualTools']     = array('onoff');
$meta['showIndividualTool']  = array('multicheckbox', '_choices' => array('user', 'site', 'page'));
$meta['showSearchForm']      = array('multichoice', '_choices' => array('never', 'logged', 'always'));
$meta['showAdminMenu']       = array('onoff');

// Semantic
$meta['semantic']            = array('onoff');
$meta['schemaOrgType']       = array('multichoice', '_choices' => array('Article', 'NewsArticle', 'TechArticle', 'BlogPosting', 'Recipe'));

// Layout
$meta['fluidContainer']         = array('onoff');
$meta['fluidContainerBtn']      = array('onoff');
$meta['pageOnPanel']            = array('onoff');
$meta['tableFullWidth']         = array('onoff');
$meta['tableStyle']             = array('multicheckbox', '_choices' => array('striped', 'bordered', 'hover', 'condensed', 'responsive'));
$meta['showLandingPage']        = array('onoff');
$meta['landingPages']           = array('regex');
$meta['showPageTools']          = array('multichoice', '_choices' => array('never', 'logged', 'always'));
$meta['showPageId']             = array('onoff');
$meta['tocCollapseSubSections'] = array('onoff');

// Discussion
$meta['showDiscussion']      = array('onoff');
$meta['discussionPage']      = array('string');

// Cookie Law
$meta['showCookieLawBanner'] = array('onoff');
$meta['cookieLawBannerPage'] = array('string');
$meta['cookieLawPolicyPage'] = array('string');

// Browser Title
$meta['browserTitle']          = array('string');
$meta['browserTitleShowNS']    = array('onoff');
$meta['browserTitleCharSepNS'] = array('multichoice', '_choices' => array('-', '|', ',', '/', '>'));
$meta['browserTitleOrderNS']   = array('multichoice', '_choices' => array('normal', 'reverse'));

// Others
$meta['showPageInfo']        = array('onoff');
$meta['showTranslation']     = array('onoff');
$meta['showBadges']          = array('onoff');
$meta['showLoginOnFooter']   = array('onoff');
$meta['useGravatar']         = array('onoff');
$meta['tagsOnTop']           = array('onoff');
$meta['useAnchorJS']         = array('onoff');
$meta['useLegacyNavbar']     = array('onoff');
