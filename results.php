<?php
	session_start();
 ?>
 <html>
  <head>
    <link rel="stylesheet" href="css/styleGG.css" type="text/css" media="all" />
    <title>Results</title>
  </head>
  <body>
    <?php
    $ses1=$_SESSION['sestevek1'];
    $ses2=$_SESSION['sestevek2'];
    $ses3=$_SESSION['sestevek3'];

    $s1=0;
    $s2=0;
    $s3=0;
    if($ses1>$ses2&&$ses1>$ses3){
        $prvi1=$_SESSION["name1"];
        $s1=$ses1;
        if($ses2>$ses3){
            $drugi1=$_SESSION["name2"];
            $tretji1=$_SESSION["name3"];
            $s2=$ses2;
            $s3=$ses3;
        }else if($ses2<$ses3){
            $drugi1=$_SESSION["name3"];
            $tretji1=$_SESSION["name2"];
            $s2=$ses3;
            $s3=$ses2;
        }
    }
    if($ses2>$ses1&&$ses2>$ses3){
        $prvi1=$_SESSION["name2"];
        $s1=$ses2;
        if($ses1>$ses3){
            $drugi1=$_SESSION["name1"];
            $tretji1=$_SESSION["name3"];
            $s2=$ses1;
            $s3=$ses3;
        }else if($ses1<$ses3){
            $drugi1=$_SESSION["name3"];
            $tretji1=$_SESSION["name1"];
            $s2=$ses3;
            $s3=$ses1;
        }
    }
if($ses3>$ses1&&$ses3>$ses2){
        $prvi1=$_SESSION["name3"];
        $s1=$ses3;
        if($ses2>$ses1){
            $drugi1=$_SESSION["name2"];
            $tretji1=$_SESSION["name1"];
            $s2=$ses2;
            $s3=$ses1;
        }else if($ses2<$ses1){
            $drugi1=$_SESSION["name1"];
            $tretji1=$_SESSION["name2"];
            $s2=$ses1;
            $s3=$ses2;
        }
    }
    if($ses1==$ses2){
        $prvi1=$_SESSION["name1"];
        $drugi1=$_SESSION["name2"];
        $tretji1=$_SESSION["name3"];
        $s1=$ses1;
        $s2=$ses2;
        $s3=$ses3;
    }
    if($ses1==$ses3){
        $prvi1=$_SESSION["name1"];
        $drugi1=$_SESSION["name3"];
        $tretji1=$_SESSION["name2"];
        $s1=$ses1;
        $s1=$ses3;
        $s1=$ses2;
    }
    if($ses2==$ses3){
        $prvi1=$_SESSION["name2"];
        $drugi1=$_SESSION["name3"];
        $tretji1=$_SESSION["name1"];
        $s1=$ses2;
        $s2=$ses3;
        $s3=$ses1;
    }
    if($ses2==$ses3&&$ses2==$ses1){
        $prvi1=$_SESSION["name1"];
        $drugi1=$_SESSION["name2"];
        $tretji1=$_SESSION["name3"];
        $s1=$ses1;
        $s2=$ses2;
        $s3=$ses3;
    }



    ?>
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="jquery.fireworks.js"></script>
		<script>
		$('body').fireworks({
				sound: false,
				opacity: 0.9,
				width: '100%',
				height: '100%'
});
		</script>
    <div class="container">
      <div id="scores">
        <div class="places">
            <h4>1st</h4>
        </div>
        <div class="places">
        <h4>2nd</h4>
        </div>
        <div class="places">
        <h4>3rd</h4>
      </div>
      </div>
      <div class="winners">
      <div class="center">
      <div class="players">
        <div class="ime">
          <p class="pointsTurns">
    				<?php
                echo "1st place: "  . $prvi1?>
    			</p>
        </div>
        <div class="tocke">
					<p class="pointsTurns">
        <?php echo "Score: " . $s1 ?>
			</p>
        </div>
      </div>
    </div>
    <div class="center">
      <div class="players">
        <div class="ime">
          <p class="pointsTurns">
            <?php
                echo "2st place: " . $drugi1
              ?>
          </p>
        </div>
        <div class="tocke">
          <p class="pointsTurns">
          <?php echo "Score: " . $s2 ?>
        </p>
          </div>
      </div>
    </div>
    <div class="center">
      <div class="players">
        <div class="ime">
          <p class="pointsTurns">
            <?php
                echo "3st place: " . $tretji1
              ?>
    			</p>
        </div>
        <div class="tocke">
          <p class="pointsTurns">
            <?php echo "Score: " . $s3 ?>
    	</p>
        </div>
      </div>
    </div>
    </div>
    </div>
  </div>
	<?php
		header( "refresh:10;url=index.php" );
	 session_destroy();
	 ?>
  </body>
 </html>
