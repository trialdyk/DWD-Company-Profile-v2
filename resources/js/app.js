import './bootstrap';


import $ from "jquery";


$(document).ready(function() {
    $('.faq').click(function() {
      $(this).next('.answer-faq').toggleClass('answer-faq-open');
      $(this).find('.faq-icon').toggleClass('faq-icon-open');
    });

    $('.submenu-link').click(function() {
      $(this).next().toggleClass('submenu-open')
    })
});