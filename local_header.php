<?php  
	$base = "../"; 
    $unit_directory = basename(getcwd());
	if (!file_exists ('../course_header.php')) {
		$base = "../../"; 
		$unit_directory = basename(dirname(getcwd())) .'/'.$unit_directory ;
	}
    $app_directory = $unit_directory . "/" . basename($_SERVER['PHP_SELF'], ".php");
	
    $unit_name ="click and Uber"; 
    $lessons = array(
        ["1.", "Intro, décomposition, computational thinking", $unit_directory."/clickAndUber1.php"],
        ["2.", "Environnement de développement", $unit_directory."/clickAndUber2.php"],
        ["3.", "Données : représentation et abstraction", $unit_directory."/clickAndUber3.php"],
        ["4.", "Partager et synchroniser des données sur Internet", $unit_directory."/clickAndUber4.php"],
        ["5.", "Accéder aux données d'un restaurant, depuis le ctalogue", $unit_directory."/clickAndUber5.php"],
        ["6.", "Organiser l’application en écrans séparés", $unit_directory."/clickAndUber6.php"],
        ["7.", "Décrire l’utilisateur avec dictionnaire", $unit_directory."/clickAndUber7.php"],
        ["8.", "Modéliser un restaurant, décoder, afficher, commander", $unit_directory."/clickAndUber8.php"],
        ["9.", "Aller plus loin", $unit_directory."/clickAndUber9.php"],
        );
	require($base.'course_header.php');
?>

