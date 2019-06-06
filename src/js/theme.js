/**
 * Theme.js
 */

// Init Feather
feather.replace();

// Adds anchors to elements that have been assigned the class '.anchored'
anchors.add('.anchored');

// JQUERY
jQuery(function ($) {
"use strict";
/* You can safely use $ in this code block to reference jQuery */

$(window).on('load', function(){

  // Cards masonary layout
  $('.card-wrapper').isotope({
    itemSelector: '.card',
    masonry: {
      columnWidth: '.card'
    }
  });

});

/* You can safely use $ in this code block to reference jQuery */
});
