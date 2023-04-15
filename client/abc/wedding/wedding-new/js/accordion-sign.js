// JavaScript Document

	jQuery(function ($) {
		  "use strict";
    var $active = $('#accordion .panel-collapse.in').prev().addClass('active');
    $active.find('a').prepend('<i class="fa fa-angle-double-up sign"></i>');
    $('#accordion .panel-heading').not($active).find('a').prepend('<i class="fa fa-angle-double-down sign"></i>');
    $('#accordion').on('show.bs.collapse', function (e) {
        $('#accordion .panel-heading.active').removeClass('active').find('.fa').toggleClass('fa-angle-double-down fa-angle-double-up');
        $(e.target).prev().addClass('active').find('.fa').toggleClass('fa-angle-double-down fa-angle-double-up');
    })
});