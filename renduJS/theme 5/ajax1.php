<?php
$etudiants = ['Bastien' => ['Math' => 19, 'Francais' =>7], 'Martin' => ['Math' => 16, 'Francais' =>9], 'Clement' => ['Math' => 16, 'Francais' =>10], 'Paul' => ['Math' => 16.5, 'Francais' =>9], 'Victor' => ['Math' => 10, 'Francais' =>8]];

$laMoy = [['prenom' => 'Bastien', 'note' => 13],
		  ['prenom' => 'Martin', 'note' => 12]];

echo json_encode($etudiants[$_GET["etudiant"]]);
?>
