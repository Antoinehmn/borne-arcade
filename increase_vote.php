<?php
// Connect to database
$db = new PDO('mysql:host=localhost;dbname=borne_arcade', 'root', 'root');

// Reques to to database (get nb_vote)
$q = $db->prepare("SELECT * FROM votes WHERE slug_game = :game");
$q->bindParam(":game", $_GET["game"]);
$q->execute();

$nb_vote = $q->fetch(PDO::FETCH_ASSOC);

$nb_votes = $nb_vote["nb_votes"] +1 ;

$q = $db->prepare("UPDATE votes SET nb_votes= :nb_votes WHERE slug_game = :game");
$q->bindParam(":nb_votes", $nb_votes);
$q->bindParam(":game", $_GET["game"]);
$q->execute();

header('Location: index.php');