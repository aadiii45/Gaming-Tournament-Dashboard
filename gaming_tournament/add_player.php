<?php include 'db.php'; ?>

<html>
<head>
<title>Add Player</title>
</head>

<body>

<h2>Add Player</h2>

<form method="POST">

Name:<br>
<input type="text" name="name"><br><br>

Email:<br>
<input type="text" name="email"><br><br>

Rank:<br>
<input type="text" name="rank"><br><br>

<input type="submit" name="submit" value="Add Player">

</form>

</body>
</html>

<?php

if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$rank=$_POST['rank'];

$sql="INSERT INTO players(player_name,email,rank_level)
VALUES('$name','$email','$rank')";

$conn->query($sql);

echo "Player Added Successfully";

}

?>