(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$('#show-menu').on('click', function() {
			$('.menu_background,.sidebar-menu').addClass('shown');
		});

		$('.close-menu').on('click', function() {
			$('.menu_background,.sidebar-menu').removeClass('shown');
		});
		
	});
	
})(jQuery, this);
