$(function () {	
	
	$('.cpp').click(function(e){
		console.log('ça marche !'); // pour la vérification
		e.preventDefault(); //pas de lien pour le a, l'event ne fonctionne pas normalement
		$('.info').toggle();
		if ($('.interrog').attr('src') == 'images/logos/icon.png') { //vérifier l'origine de la source
			$('.interrog').attr('src', 'images/logos/cross.png') //changer la source
		} else {
			$('.interrog').attr('src', 'images/logos/icon.png'); //changer la source
		}
	});
	
	
});