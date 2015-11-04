<?php
/**
 * Template footer, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** FOOTER ********** -->
<div id="dokuwiki__footer"><div class="pad">
 
</div></div><!-- /footer -->

<?php

if ($_SESSION['DW68700bfd16c2027de7de74a5a8202a6f']['translationlc'] == 'en') {
	tpl_includeFile('footer_en.html');
} else {
	tpl_includeFile('footer.html');
}
