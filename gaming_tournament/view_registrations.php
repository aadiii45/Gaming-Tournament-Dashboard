<?php include 'db.php'; ?>

<h2>Tournament Participants</h2>

<table border="1">

<tr>
<th>Player</th>
<th>Game</th>
<th>Tournament</th>
</tr>

<?php

$sql="SELECT players.player_name,
games.game_name,
tournaments.tournament_name

FROM registrations

JOIN players ON registrations.player_id = players.player_id
JOIN tournaments ON registrations.tournament_id = tournaments.tournament_id
JOIN games ON tournaments.game_id = games.game_id";

$result=$conn->query($sql);

while($row=$result->fetch_assoc()){

echo "<tr>";
echo "<td>".$row['player_name']."</td>";
echo "<td>".$row['game_name']."</td>";
echo "<td>".$row['tournament_name']."</td>";
echo "</tr>";

}

?>

</table>