<a href="increase_vote.php?game=macron">Voter</a>
<br>

<?php
$game = "macron";
// Connect to database
$db = new PDO('mysql:host=localhost;dbname=borne_arcade', 'root', 'root');

// Reques to to database (get nb_vote)
$q = $db->prepare("SELECT * FROM votes WHERE slug_game = :game");
$q->bindParam(":game", $game);
$q->execute();

$data = $q->fetch(PDO::FETCH_ASSOC);

echo $data["nb_votes"] . " Votes";


?>