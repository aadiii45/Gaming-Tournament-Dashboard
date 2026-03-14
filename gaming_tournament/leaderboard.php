<?php include 'db.php'; ?>

<h2>Leaderboard</h2>

<table border="1">

<tr>
<th>Player</th>
<th>Rank</th>
</tr>

<?php

$result=$conn->query("SELECT player_name, rank_level FROM players ORDER BY rank_level DESC");

while($row=$result->fetch_assoc()){

echo "<tr>";
echo "<td>".$row['player_name']."</td>";
echo "<td>".$row['rank_level']."</td>";
echo "</tr>";

}

?>

</table>