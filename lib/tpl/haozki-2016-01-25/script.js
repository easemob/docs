/* DOKUWIKI:include_once assets/bootstrap/js/bootstrap.min.js */
/* DOKUWIKI:include_once assets/anchorjs/anchor.min.js */

/*!
 * DokuWiki Bootstrap3 Template: Hacks!
 *
 * Home     http://dokuwiki.org/template:bootstrap3
 * Author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * License  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

jQuery(document).ready(function() {

  //'use strict';


  function dw_mode(id) {
    return ((jQuery('.mode_' + id).length) ? true : false);
  }


  function checkSize() {

    var $screen_mode = jQuery('#screen__mode'), // Responsive Check
        $dw_aside    = jQuery('.dw__sidebar');  // Sidebar (left and/or right) node

    if ($screen_mode.find('.visible-xs').is(':visible')) {

      if (! $dw_aside.find('.dw-sidebar-content').hasClass('panel')) {
        $dw_aside.find('.dw-sidebar-content').addClass('panel panel-default');
        $dw_aside.find('.dw-sidebar-title').addClass('panel-heading');
        $dw_aside.find('.dw-sidebar-body').addClass('panel-body').removeClass('in');
      }

    } else {

      $dw_aside.find('.dw-sidebar-content').removeClass('panel panel-default');
      $dw_aside.find('.dw-sidebar-title').removeClass('panel-heading');
      $dw_aside.find('.dw-sidebar-body').removeClass('panel-body').addClass('in');

    }

  }


  function resizeToc() {

    jQuery('#dw__toc .panel-body').css({
      'height'    : (jQuery(window).height() - 50 - jQuery('main').position().top) + 'px',
      'overflow-y': 'scroll'
    });

  }


  checkSize();
  jQuery(window).resize(checkSize);


  // Replace ALL input[type=submit|reset|button] (with no events) to button[type=submit|reset|button] for CSS styling
  jQuery.fn.extend({

    input2button: function() {

      return this.each(function() {

        var attrs = { 'type' : 'button' },
            label = '',
            node  = jQuery(this);

        if (typeof node.data('events') === 'undefined' && node.prop('tagName') == 'INPUT') {

          jQuery(node[0].attributes).each(function(index, attribute) {
            if (attribute.name == 'value') {
              label = attribute.value;
            } else {
              attrs[attribute.name] = attribute.value;
            }
          });

          var newNode = jQuery('<button/>', attrs).html(label);
          node.replaceWith(newNode);

        }

      });

    }

  });


  jQuery('.fluid-container').on('click', function() {

    var $self = jQuery(this);

    if (jQuery('#dokuwiki__site').hasClass('container')) {

      jQuery('#dokuwiki__site, nav > div, article, #dw__footer > div')
        .removeClass('container')
        .addClass('container-fluid');
      $self.parent().addClass('active');

      DokuCookie.setValue('fluidContainer', 1);

    } else {

      jQuery('#dokuwiki__site, nav > div, article, #dw__footer > div')
        .removeClass('container-fluid')
        .addClass('container');
      $self.parent().removeClass('active');

      DokuCookie.setValue('fluidContainer', 0);

    }

  });


  /* DOKUWIKI:include js/template.js */


  // Init template
  jQuery(document).trigger('bootstrap3:init');

  // Init other components
  jQuery(document).trigger('bootstrap3:components');

  /* DOKUWIKI:include js/plugins.js */

  // Init plugins
  jQuery(document).trigger('bootstrap3:plugins');


  // Re-initialize some components in media-manager
  if (dw_mode('media') || jQuery('#media__manager')) {

    jQuery(document).ajaxSuccess(function() {
      jQuery(document).trigger('bootstrap3:init');
      jQuery(document).trigger('bootstrap3:buttons');
      jQuery(document).trigger('bootstrap3:tabs');
      jQuery(document).trigger('bootstrap3:media-manager');
    });

  }

  // Index tree
  if (dw_mode('index')) {

    jQuery(document).ajaxSuccess(function() {
      jQuery(document).trigger('bootstrap3:mode-index');
    });

    jQuery('#index__tree').click(function(e) {
      jQuery(document).trigger('bootstrap3:mode-index');
    });

  }


  // Configuration manager
  if (dw_mode('admin')) {

    var tpl_sections = {
      // Section        Insert before           Icon
      'Themes'        : ['bootstrapTheme',      'fa-tint'],
      'Sidebar'       : ['sidebarPosition',     'fa-columns'],
      'Navbar'        : ['inverseNavbar',       'fa-navicon'],
      'Semantic'      : ['semantic',            'fa-share-alt'],
      'Layout'        : ['fluidContainer',      'fa-desktop'],
      'Discussion'    : ['showDiscussion',      'fa-comments'],
      'Cookie Law'    : ['showCookieLawBanner', 'fa-legal'],
      'Browser Title' : ['browserTitle',        'fa-header'],
      'Others'        : ['showPageInfo',        'fa-gears']
    };

    jQuery('label[for^=config___tpl____bootstrap3]').each(function() {
      var $node = jQuery(this);
      jQuery.each(tpl_sections, function(section, item){
        if( $node.attr('for').match([item[0], '$'].join('')) ) {
          $node.parents('tr').before(jQuery(['<tr><td><h4><i class="fa ', item[1], '"></i> ', section, '</h4></td><td></td></tr>'].join('')))
        }
      });
    });

  }

});
