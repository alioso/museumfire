/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - http://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {

  'use strict';

  //Use the sample behavior pattern below

  Drupal.behaviors.bearCoat = {
   attach: function (context, settings) {
     context = context || document;
     settings = settings || Drupal.settings;


      var lastScrollTop = 0,
          delta = 5,
          hBar = $('.wrapper--header'),
          hBarHeight = hBar.outerHeight(),
          nbar = $('.wrapper--navigation');

      var throttledSticky = $.throttle(100, function() {stickyHeader()});
      $(window).on('scroll', throttledSticky);

      function stickyHeader() {
        var st = $(window).scrollTop();
        if (Math.abs(lastScrollTop - st) <= delta)
        return;
        if (st > lastScrollTop && st > hBarHeight){
          hBar
            .removeClass('down top')
            .addClass('up');
        } else if (st + $(window).height() < $(document).height() && st > hBarHeight) {
          hBar
            .removeClass('up')
            .addClass('down');
        }
        else if (st <= 10) {
          hBar
            .removeClass('down up')
            .addClass('top');
        }
        lastScrollTop = st;
      };

   }
  };

})(jQuery, Drupal, window, document);
