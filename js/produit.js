$(document).ready(function () {	
	

	$('.prix-prod' ).mouseover(function(){ 
		$(this).html(' <p> Commander </p> ');
		$(this).css({
			'background-color': '#47360b',
			'color': '#fefdf0',
			'text-transform' : 'uppercase',
			'text-align' : 'center',
			'font-size' : '2rem'
		});
		
	});
	
	$('.prix-prod').mouseout(function(){ 
		$(this).html('<p> 195€ </p>');
		$(this).css({
			'background-color': '#fefdf0',
			'color': '#47360b',
			'text-transform' : 'uppercase',
			'text-align' : 'center',
			'font-size' : '2rem'
		});
	});

});