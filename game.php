<?php
	session_start();
 ?>
<html>
	<head>
		<title>Game</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js%22%3E"></script>
		<link rel="stylesheet" href="css/styleG.css" type="text/css" media="all" />
	</head>
	<body>
		<script>
			function refreshPage(){
				window.location.reload();

			<?php
				if($_SESSION['roll']== $_SESSION['Turns']){
					$_SESSION['sestevek1']=$_SESSION['points1'];
					$_SESSION['sestevek2']=$_SESSION['points2'];
					$_SESSION['sestevek3']=$_SESSION['points3'];
					header("location:results.php");
				}
				$_SESSION['roll']=$_SESSION['roll']+1;
			?>
			}


		</script>
		<?php
		$name1 = $_POST['name1'];
		$name2 = $_POST['name2'];
		$name3 = $_POST['name3'];
		$Turns = $_POST['Turns'];

		$_SESSION['name1'] = $name1;
		$_SESSION['name2'] = $name2;
		$_SESSION['name3'] = $name3;
		$_SESSION['Turns']=$Turns;
		$_SESSION['Dices']=$_POST['Dices'];


		 ?>
		<form action="game.php">
		<div id="container">
			<div id="table">
			</div>
		<div id="players">
		<div class="playersIn">
			<div class="dWindow">
				<?php
				if($_SESSION['Dices']==1){
					$_SESSION['currentP1']=0;
					$a = rand(1,6);
					echo "<img style='width:40px; height:40px;' src='slike/dice{$a}.jpg'>" . "<br />";
					$_SESSION['currentP1']=$a;
					$_SESSION['points1'] =$_SESSION['points1']+$a;
				}
				else if($_SESSION['Dices']==2){
					$_SESSION['currentP1']=0;
					$a = rand(1,6);
					$b = rand(1,6);
					echo "<img style='width:40px; height:40px;' src='slike/dice{$a}.jpg'>" . "<br />";
					echo "<img style='width:40px; height:40px;' src='slike/dice{$b}.jpg'>" . "<br />";
					$_SESSION['currentP1']=$a+$b;
					$_SESSION['points1'] =$_SESSION['points1']+$a+$b;
				}
				else{
					$_SESSION['currentP1']=0;
					$a = rand(1,6);
					$b = rand(1,6);
					$c = rand(1,6);
					echo "<img style='width:40px; height:40px;' src='slike/dice{$a}.jpg'>" . "<br />";
					echo "<img style='width:40px; height:40px;' src='slike/dice{$b}.jpg'>" . "<br />";
					echo "<img style='width:40px; height:40px;' src='slike/dice{$c}.jpg'>" . "<br />";
					$_SESSION['currentP1']=$a+$b+$c;
					$_SESSION['points1'] =$_SESSION['points1']+$a+$b+$c;
				}
				 ?>
			</div>
			<h4 class="tip">
				<?php echo $_SESSION['name1'] ?>
			</h4>
			<h4 class="pointsP">Points</h4>
			<p class="pointsTurns">
				<?php echo $_SESSION['points1'] ?>
			</p>
			<h4 class="pointsP">Rolls</h4>
			<p class="pointsTurns">
				<?php echo $_SESSION['roll']."/".$_SESSION['Turns'] ?>
			</p>
			<h4 class="pointsP">Current Throw</h4>
			<p class="pointsTurns">
				<?php echo $_SESSION['currentP1']?>
			</p>
		</div>
		<div class="playersIn">
			<div class="dWindow">
				<?php
				if($_SESSION['Dices']==1){
					$_SESSION['currentP2']=0;
					$a = rand(1,6);
					echo "<img style='width:40px; height:40px;' src='slike/dice{$a}.jpg'>" . "<br />";
					$_SESSION['currentP2']=$a;
					$_SESSION['points2'] =$_SESSION['points2']+$a;
				}
				else if($_SESSION['Dices']==2){
					$_SESSION['currentP2']=0;
					$a = rand(1,6);
					$b = rand(1,6);
					echo "<img style='width:40px; height:40px;' src='slike/dice{$a}.jpg'>" . "<br />";
					echo "<img style='width:40px; height:40px;' src='slike/dice{$b}.jpg'>" . "<br />";
					$_SESSION['currentP2']=$a+$b;
					$_SESSION['points2'] =$_SESSION['points2']+$a+$b;
				}
				else{
					$_SESSION['currentP2']=0;
					$a = rand(1,6);
					$b = rand(1,6);
					$c = rand(1,6);
					echo "<img style='width:40px; height:40px;' src='slike/dice{$a}.jpg'>" . "<br />";
					echo "<img style='width:40px; height:40px;' src='slike/dice{$b}.jpg'>" . "<br />";
					echo "<img style='width:40px; height:40px;' src='slike/dice{$c}.jpg'>" . "<br />";
					$_SESSION['currentP2']=$a+$b+$c;
					$_SESSION['points2'] =$_SESSION['points2']+$a+$b+$c;
				}
				 ?>
			</div>
			<h4 class="tip">
				<?php echo $_SESSION['name2'] ?>
			</h4>
			<h4 class="pointsP">Points</h4>
			<p class="pointsTurns">
				<?php echo $_SESSION['points2'] ?>
			</p>
			<h4 class="pointsP">Rolls</h4>
			<p class="pointsTurns">
				<?php echo $_SESSION['roll']."/".$_SESSION['Turns'] ?>
			</p>
			<h4 class="pointsP">Current Throw</h4>
			<p class="pointsTurns">
				<?php echo $_SESSION['currentP2']?>
			</p>
		</div>
		<div class="playersIn">
			<div class="dWindow">
				<?php
                if($_SESSION['Dices']==1){
									$_SESSION['currentP3']=0;
									$a = rand(1,6);
									echo "<img style='width:40px; height:40px;' src='slike/dice{$a}.jpg'>" . "<br />";
									$_SESSION['currentP3']=$a;
									$_SESSION['points3'] =$_SESSION['points3']+$a;
								}
								else if($_SESSION['Dices']==2){
									$_SESSION['currentP3']=0;
									$a = rand(1,6);
									$b = rand(1,6);
									echo "<img style='width:40px; height:40px;' src='slike/dice{$a}.jpg'>" . "<br />";
									echo "<img style='width:40px; height:40px;' src='slike/dice{$b}.jpg'>" . "<br />";
									$_SESSION['currentP3']=$a+$b;
									$_SESSION['points3'] =$_SESSION['points3']+$a+$b;
								}
								else{
									$_SESSION['currentP3']=0;
									$a = rand(1,6);
									$b = rand(1,6);
									$c = rand(1,6);
									echo "<img style='width:40px; height:40px;' src='slike/dice{$a}.jpg'>" . "<br />";
									echo "<img style='width:40px; height:40px;' src='slike/dice{$b}.jpg'>" . "<br />";
									echo "<img style='width:40px; height:40px;' src='slike/dice{$c}.jpg'>" . "<br />";
									$_SESSION['currentP3']=$a+$b+$c;
									$_SESSION['points3'] =$_SESSION['points3']+$a+$b+$c;
								}
				 ?>
			</div>
			<h4 class="tip">
				<?php echo $_SESSION['name3'] ?>
			</h4>
			<h4 class="pointsP">Points</h4>
			<p class="pointsTurns">
				<?php echo $_SESSION['points3'] ?>
			</p>
			<h4 class="pointsP">Rolls</h4>
			<p class="pointsTurns">
				<?php echo $_SESSION['roll']."/".$_SESSION['Turns'] ?>
			</p>
			<h4 class="pointsP">Current Throw</h4>
			<p class="pointsTurns">
				<?php echo $_SESSION['currentP3']?>
			</p>
		</div>
	</div>
	<div id="button">
		<a class="button" onclick="refreshPage()">Throw</a>
	</div>
	</div>
</form>
	<body>
</html>
