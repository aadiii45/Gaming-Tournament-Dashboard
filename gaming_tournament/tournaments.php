<?php
include "db.php";

$sql = "SELECT * FROM tournaments";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Tournament List</title>

<style>
body{
font-family: Arial;
background:#0f172a;
color:white;
text-align:center;
}

table{
margin:auto;
border-collapse:collapse;
width:70%;
background:#1e293b;
}

th,td{
padding:12px;
border:1px solid #334155;
}

th{
background:#22c55e;
color:black;
}

tr:hover{
background:#334155;
}
</style>

</head>
<body>

<h2>🎮 Tournament List</h2>

<table>
<tr>
<th>ID</th>
<th>Tournament Name</th>
<th>Date</th>
<th>Status</th>
</tr>

<?php
if($result && mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)){

$id = $row['tournament_id'] ?? '';
$name = $row['tournament_name'] ?? '';
$date = $row['tournament_date'] ?? '';
$status = $row['tournament_status'] ?? '';

echo "<tr>";
echo "<td>$id</td>";
echo "<td>$name</td>";
echo "<td>$date</td>";
echo "<td>$status</td>";
echo "</tr>";

}

}else{
echo "<tr><td colspan='4'>No tournaments found</td></tr>";
}
?>

</table>

</body>
</html>