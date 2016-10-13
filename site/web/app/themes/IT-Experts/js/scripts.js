(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		var totalItems = $('.puzzle.item').length;
		var currentIndex = $('.puzzle.item.active').index() + 1;
		$('.num').html(''+currentIndex+'/'+totalItems+'');


		$('#myPuzzle').on('slide.bs.carousel', function() {
			currentIndex = $('.puzzle.item.active').index() + 1;
			$('.num').html(''+currentIndex+'/'+totalItems+'');
		});
	});
	
	
})(jQuery, this);


