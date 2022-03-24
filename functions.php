<?php 

// Retourne l'adresse relative de chaque fichier d'un répertoire donné
function galeries($directory){
	$urlDirectory = "images/galeries/".ucfirst($directory);
	return scanDirectory($urlDirectory);
}

// Liste tout le contenu d'un dossier
// et rassemble le nom de chaque fichier trouvé dans un tableau
function scanDirectory($directory){
	$fichiersArray = [];
	$scandir = scandir($directory);
	foreach($scandir as $fichier){
		if($fichier !== '.' && $fichier !== '..'){
	    	$fichiersArray[] = $fichier;
		}
	}
	return $fichiersArray;
}
?>