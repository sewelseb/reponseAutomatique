<?php
	$titre="";
	$nom="";
	$prenom="";
	$sexe="";

	if (isset($_COOKIE["titre"]))
	{
		$titre=$_COOKIE["titre"];
	}
	if (isset($_COOKIE["nom"]))
	{
		$nom=$_COOKIE["nom"];
	}
	if (isset($_COOKIE["prenom"]))
	{
		$prenom=$_COOKIE["prenom"];
	}
	if (isset($_COOKIE["sexe"]))
	{
		$sexe=$_COOKIE["sexe"];
	}


?>