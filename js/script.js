$(function () {

/***********************************PAIEMENT**************************************/


	$('.cpp').click(function(e){
		console.log('ça marche !'); // pour la vérification
		e.preventDefault(); //pas de lien pour le a, l'event ne fonctionne pas normalement
		$('.info').toggle();
		if ($('.interrog').attr('src') === 'images/logos/icon.png') { //vérifier l'origine de la source
			$('.interrog').attr('src', 'images/logos/cross.png'); //changer la source
		} else {
			$('.interrog').attr('src', 'images/logos/icon.png'); //changer la source
		}
	});

	//************************PERSONNALISATION**************************

	$('.block-center1 .texte_box').mouseover(function(){ //au passage de la souris, la taille de l'image de fond passe a 110% au lieu de 100%
		$(this).css({
			'background-size': 'auto 110%',
			'border-radius': '15px';
		});
	});


	$('.block-center1 .texte_box').mouseout(function(){ //au passage de la souris, la taille de l'image de fond passe a 100px au lieu de 110%
		$(this).css({
			'background-size': 'auto 100%',
			'border-radius': '1px';
		});
	});


	$('.block-center1 .mini_box_2 .texte_box').mouseover(function(){ //au passage de la souris, la taille de l'image de fond passe a 110% au lieu de 100%
		$(this).css({
			'background-size': 'auto 110%',
			'border-radius': '15px';
		});
	});

	$('.block-center1 .mini_box_2 .texte_box').mouseout(function(){ //au passage de la souris, la taille de l'image de fond passe a 100px au lieu de 110%
		$(this).css({
			'background-size': 'auto 100%',
			'border-radius': '1px';
		});
	});

	$('.block-center1 .mini_box_3 .texte_box').mouseover(function(){ //au passage de la souris, la taille de l'image de fond passe a 110% au lieu de 100%
		$(this).css({
			'background-size': 'auto 110%',
			'border-radius': '15px';
		});
	});

	$('.block-center1 .mini_box_3 .texte_box').mouseout(function(){ //au passage de la souris, la taille de l'image de fond passe a 100px au lieu de 110%
		$(this).css({
			'background-size': 'auto 100%',
			'border-radius': '1px';
		});
	});
});

//N'est pas approprié pour le code actuel !

function GestionHover(idListe, indice, nbEtoile){
		for (i=1; i<= nbEtoile; i++)
		{
			var idoff = "staroff-" + idListe + "-" + i;
			var idon = "staron-" + idListe + "-" + i;

			if(indice == -1)
			{
				// Sortie du survol de la liste des etoiles
				if (ArrListeEtoile[idListe] >= i){
					document.getElementById(idoff).style.display ="none";
					document.getElementById(idon).style.display ="block";
				}
				else{
					document.getElementById(idoff).style.display ="block";
					document.getElementById(idon).style.display ="none";
				}
			}
			else
			{
				// Survol de la liste des etoiles
				if(i <= indice){
					document.getElementById(idoff).style.display ="none";
					document.getElementById(idon).style.display ="block";
				}
				else{
					document.getElementById(idoff).style.display ="block";
					document.getElementById(idon).style.display ="none";
				}
			}
		}
	}
