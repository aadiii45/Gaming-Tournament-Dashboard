<?php include 'db.php'; ?>

<h2>Register Player for Tournament</h2>

<form method="POST">

Player:<br>
<select name="player_id">

<?php
$result=$conn->query("SELECT * FROM players");

while($row=$result->fetch_assoc()){
echo "<option value='".$row['player_id']."'>".$row['player_name']."</option>";
}
?>

</select>

<br><br>

Tournament:<br>
<select name="tournament_id">

<?php
$result=$conn->query("SELECT * FROM tournaments");

while($row=$result->fetch_assoc()){
echo "<option value='".$row['tournament_id']."'>".$row['tournament_name']."</option>";
}
?>

</select>

<br><br>

<input type="submit" name="submit" value="Register">

</form>

<?php

if(isset($_POST['submit'])){

$player=$_POST['player_id'];
$tournament=$_POST['tournament_id'];

$sql="INSERT INTO registrations(player_id,tournament_id)
VALUES('$player','$tournament')";

$conn->query($sql);

echo "<br>Player Registered Successfully!";

}

?>