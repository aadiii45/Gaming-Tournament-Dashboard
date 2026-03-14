<!DOCTYPE html>
<?php include 'db.php'; 

$players = $conn->query("SELECT COUNT(*) as total FROM players")->fetch_assoc()['total'];
$tournaments = $conn->query("SELECT COUNT(*) as total FROM tournaments")->fetch_assoc()['total'];
$registrations = $conn->query("SELECT COUNT(*) as total FROM registrations")->fetch_assoc()['total'];

?>

<html>
<head>

<title>Gaming Tournament Dashboard</title>

<style>

body{
font-family:Arial;
background-image:url("https://i.ytimg.com/vi/AAil5NibNww/maxresdefault.jpg");
background-size:cover;
background-position:center;
background-attachment:fixed;
margin:0;
color:white;
text-align:center;
}

.overlay{
background:rgba(0,0,0,0.75);
min-height:100vh;
padding-bottom:40px;
}

h1{
color:#22c55e;
padding-top:20px;
font-size:38px;
}

.marquee{
background:#111827;
padding:10px;
color:#22c55e;
font-weight:bold;
}

.games img{
margin:10px;
border-radius:12px;
box-shadow:0 0 15px #22c55e;
transition:0.3s;
}

.games img:hover{
transform:scale(1.1);
}

#clock{
margin-top:15px;
color:#38bdf8;
}

.stats{
display:flex;
justify-content:center;
gap:25px;
margin-top:30px;
flex-wrap:wrap;
}

.card{
background:#111827;
padding:20px;
border-radius:12px;
width:200px;
box-shadow:0 0 20px rgba(34,197,94,0.6);
}

.card h2{
color:#22c55e;
}

.menu{
margin-top:40px;
}

.menu a{
display:block;
margin:15px auto;
padding:14px;
background:#111827;
color:#22c55e;
text-decoration:none;
width:240px;
border-radius:10px;
font-weight:bold;
border:2px solid #22c55e;
transition:0.3s;
}

.menu a:hover{
background:#22c55e;
color:black;
transform:scale(1.07);
box-shadow:0 0 20px #22c55e;
}

</style>

</head>

<body>

<div class="overlay">

<h1>🎮 Gaming Tournament Dashboard</h1>

<div class="marquee">
<marquee>🔴 LIVE MATCH: Team Alpha vs Team Bravo | BGMI Championship</marquee>
</div>

<h2>Featured Games</h2>

<div class="games">

<img src="https://wallpapers.com/images/hd/bgmi-purple-lady-character-f9i05ywyw3jaapkf.jpg" width="100">

<img src="https://i.pinimg.com/736x/79/aa/f7/79aaf76e647b1eac1329b41a661ab60d.jpg" width="125">

<img src="https://upload.wikimedia.org/wikipedia/en/a/a6/FIFA_23_Cover.jpg" width="140">

</div>

<h2 id="clock"></h2>

<div class="stats">

<div class="card">
<h2><?php echo $players; ?></h2>
<p>Total Players</p>
</div>

<div class="card">
<h2><?php echo $tournaments; ?></h2>
<p>Total Tournaments</p>
</div>

<div class="card">
<h2><?php echo $registrations; ?></h2>
<p>Total Registrations</p>
</div>

</div>

<div class="menu">

<a href="add_player.php">➕ Add Player</a>

<a href="view_players.php">👥 View Players</a>

<a href="tournaments.php">🏆 View Tournaments</a>

<a href="register_player.php">🎮 Register Player</a>

<a href="view_registrations.php">📋 Tournament Participants</a>

<a href="leaderboard.php">🥇 Leaderboard</a>

</div>

<script>

function updateClock(){
let now = new Date();
document.getElementById("clock").innerHTML = now.toLocaleString();
}

setInterval(updateClock,1000);
updateClock();

</script>

</div>

</body>
</html>