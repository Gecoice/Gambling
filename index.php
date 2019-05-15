<?php
	session_start();
 ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sl" lang="sl">
<head>
	<title>Gambling room</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js%22%3E"></script>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="copyright" content="" />
	<meta name="author" content="" />
	<meta name="rating" content="general" />
	<meta name="expires" content="Never" />
	<meta name="revisit-after" content="30 Days" />

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
	<?php
		$_SESSION['points1'] = 0;
		$_SESSION['points2'] = 0;
		$_SESSION['points3'] = 0;
		$_SESSION['roll'] = 0;
		$_SESSION['currentP1']=0;
		$_SESSION['currentP2']=0;
		$_SESSION['currentP3']=0;
	 ?>
<div id="res">
		<div id="top">
			<h4 class="Title">GAMBLING ROOM</h4>
		</div>
		<form action="game.php" method="post">
		<div id="container">
		<div id="Players">
				<div class="playersIn">
					<h4 class="first">Player</h4>
					<h4 class="second">one</h4>
						<p class="PlayerName">ENTER PLAYER NAME</p>
					<input type="text" name="name1" class="playerText" maxlength="8" required/>
				</div>
				<div class="playersIn">
					<h4 class="first">Player</h4>
					<h4 class="second">two</h4>
						<p class="PlayerName">ENTER PLAYER NAME</p>
					<input type="text" name="name2" class="playerText" maxlength="8" required/>
				</div>
				<div class="playersIn">
					<h4 class="first">Player</h4>
					<h4 class="second">three</h4>
						<p class="PlayerName">ENTER PLAYER NAME</p>
					<input type="text" name="name3" class="playerText" maxlength="8" required/>
				</div>
		</div>
		<div id="TurnsDice">
				<div id="Turns">
					<h4 class="Tu/Di">Throws</h4>
					<select name="Turns">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div>
				<div id="Dice">
					<h4 class="Tu/Di">Dices</h4>
					<select name="Dices">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div>
	</div>
	<div id="button">
			<input type="submit" name="Start" value="Start the game"/>
	</div>
	</div>
</div>
</form>
</body>
</html>
