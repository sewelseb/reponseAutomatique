
function creerReponse()
	{
		var titre= document.getElementById('titre').value;
		var nom= document.getElementById('nom').value;
		var prenom= document.getElementById('prenom').value;
		var sexe= document.getElementById('sexe').selected;
		var reponse="";


		var determinant="";
		if (titre=="Monsieur" OR titre=="monsieur" OR titre=="Mademoiselle" OR titre=="mademoiselle" OR titre=="madame" OR titre=="Madame") 
			{
				determinant ="";
			}
		else if (sexe=="H") 
			{
				determinant ="Le";
			}
		else if (sexe=="F") 
			{
				determinant ="La";
			}

		reponse+=determinant+" ";

		document.getElementById('reponse').InnerHTML=reponse;

		//mise en place des cookies pour la prochaine conexion:
		//mettreEnPlaceLesCookies(titre, nom, prenom, sexe);

	}