<?php

$db = new PDO('mysql:host=localhost;dbname=borne_arcade', 'root', 'root');

$q = $db->query('SELECT * FROM votes')
$q->execute();

while ($vote = $q->fetch(PDO::FETCH_ASSOC)){
    echo $vote ['slug_game'] . "<br>" 
    echo $vote ['nb_votes'] . "Votes <br>"
    echo "<a>"
}
