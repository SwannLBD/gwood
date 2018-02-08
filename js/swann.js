$(document).ready(function () {

	//************************PERSONNALISATION**************************

	$('.block-center1 .texte_box').mouseover(function(){ //au passage de la souris, la taille de l'image de fond passe a 110% au lieu de 100%
		$(this).css({
			'background-size': 'auto 110%',
			'border-radius': '15px'
		});
	});


	$('.block-center1 .texte_box').mouseout(function(){ //au passage de la souris, la taille de l'image de fond passe a 100px au lieu de 110%
		$(this).css({
			'background-size': 'auto 100%',
			'border-radius': '10px'
		});
	});


	$('.block-center1 .mini_box_2 .texte_box').mouseover(function(){ //au passage de la souris, la taille de l'image de fond passe a 110% au lieu de 100%
		$(this).css({
			'background-size': 'auto 110%',
			'border-radius': '15px'
		});
	});

	$('.block-center1 .mini_box_2 .texte_box').mouseout(function(){ //au passage de la souris, la taille de l'image de fond passe a 100px au lieu de 110%
		$(this).css({
			'background-size': 'auto 100%',
			'border-radius': '10px'
		});
	});

	$('.block-center1 .mini_box_3 .texte_box').mouseover(function(){ //au passage de la souris, la taille de l'image de fond passe a 110% au lieu de 100%
		$(this).css({
			'background-size': 'auto 110%',
			'border-radius': '15px'
		});
	});

	$('.block-center1 .mini_box_3 .texte_box').mouseout(function(){ //au passage de la souris, la taille de l'image de fond passe a 100px au lieu de 110%
		$(this).css({
			'background-size': 'auto 100%',
			'border-radius': '10px'
		});
	});


	function adjust_textarea(h) {
	    h.style.height = "20px";
	    h.style.height = (h.scrollHeight)+"px";
	}







});
