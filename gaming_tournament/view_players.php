<?php include 'db.php'; ?>

<h2>Players List</h2>

<table border="1">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Rank</th>
</tr>

<?php

$result=$conn->query("SELECT * FROM players");

while($row=$result->fetch_assoc()){

echo "<tr>";
echo "<td>".$row['player_id']."</td>";
echo "<td>".$row['player_name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['rank_level']."</td>";
echo "</tr>";

}

?>

</table>