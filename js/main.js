/* jshint browser: true, devel: true, indent: 2, curly: true, eqeqeq: true, futurehostile: true, latedef: true, undef: true, unused: true */
/* global $, jQuery, document, Modernizr */

jQuery(document).ready(function () {
  'use strict';

  $('#mobile-toggle').on('click', function(event) {
    event.preventDefault();
    $('#mobile-menu ul').toggleClass('on');
  });
});
