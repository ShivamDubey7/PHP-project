<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Solving Linear Equations</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
    <link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="style.responsive.css" media="all">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
</head>
<body>
<div id="art-main">
<header class="art-header clearfix">
    <div class="art-shapes">
<h1 class="art-headline" data-left="15.52%">
    <a href="#">Solving Linear Eqations in 2 variables!</a>
</h1>

<div class="art-object0" data-left="2.62%"></div>

            </div>

<nav class="art-nav clearfix">
    <div class="art-nav-inner">
    <ul class="art-hmenu">
    <li><a href="index.php" class="active">Home</a></li>
    <li><a href="User.php">How-To-Use</a></li>
    </ul> 
        </div>
    </nav>

                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                <h2 class="art-postheader">Solution - 
</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p><b> <?php if(isset($_POST['Attempt'])){
	$a1 =$_POST['a1'];
	$b1 =$_POST['b1'];
	$c1 =$_POST['c1'];
	$a2 =$_POST['a2'];
	$b2 =$_POST['b2'];
	$c2 =$_POST['c2'];
	echo "<font color='#FF0000'>Note :</font>"."<br/>";
	echo "We refer the equations as a1*x + b1*y = c1, likewise the equation 2 too.<br/>";
	echo "<font color='#FF0000'>Step One</font>"."<br/>";
	echo "Multiply by constants, such that the constant with some variable (x or y) is same in both the equations. <br/>";
	echo "We go with x, you cal choose any.<br/>";
	$a12 = $a1*$a2;
	$b12 = $b1*$a2;
	$c12 = $c1*$a2;
	$a21 = $a2*$a1;
	$b21 = $b2*$a1;
	$c21 = $c2*$a1;
	echo "Eqation 1 --  (".$a1."<i>x</i> + ".$b1."<i>y</i> = ".$c1.")*".$a2."<br/>";
	echo "Eqation 2 --  (".$a2."<i>x</i> + ".$b2."<i>y</i> = ".$c2.")*".$a1."<br/>";
	echo "Thus the equations become:- <br/>";
	echo "Eqation 1 --  ".$a12."<i>x</i> + ".$b12."<i>y</i> = ".$c12."<br/>";
	echo "Eqation 1 --  ".$a21."<i>x</i> + ".$b21."<i>y</i> = ".$c21."<br/>";
	echo "<font color='#FF0000'>Step Two</font><br/>";
	echo "Now, subtract both the equations.<br/>";
	echo "(".$a12." - ".$a21.")<i>x</i> + (".$b12." - ".$b21.")<i>y</i> = ".$c12." - ".$c21."<br/>";
	echo "We get :- <br/>";
	$a = $a12-$a21;
	$b = $b12- $b21;
	$c = $c12 - $c21;
	echo $a."<i>x</i> + ".$b."<i>y</i> = ".$c."<br/>";
	echo "<font color='#FF0000'>Now</font><br/>";
	if($b == 0 && $c == 0){
		echo "They are both same lines.<br/>";
	}
	elseif($b==0){
		echo "They are parallel lines, thus no solution possible.<br/>";
	}
	else{
		$y = $c/$b;
		echo "<i>y</i> = ".$y."<br/>";
		echo "Use this value of <i>y</i>, plug it into one of the equations and get the value of <i>x</i>.<br/>";
		if($a1 != 0){
			$x = ($c1-$b1*$y)/$a1;
			echo "Plugging <i>y</i> into <i>Equaitn 1</i>:<br/>";
			echo "<i>x</i> = (".$c1." - ".$b1."*<i>y</i>)/".$a1/"<br/>";
			echo "<i>x</i> = (".$c1." - ".$b1."*".$y.")/".$a1/"<br/>";
		}
		else{
			$x= ($c2-$b2*$y)/$a2;
			echo "Plugging <i>y</i> into <i>Equaitn 2</i>:<br/>";
			echo "<i>x</i> = (".$c2." - ".$b2."*<i>y</i>)/".$a2/"<br/>";
			echo "<i>x</i> = (".$c2." - ".$b2."*".$y.")/".$a2/"<br/>";
		}
		echo "Thus,<i>x</i> = ".$x."<br/>";
	}
	}?></b></p>

</div>
                                
                </article></div>
                    </div>
                </div>
            </div>
    </div>
<footer class="art-footer clearfix">
  <div class="art-footer-inner">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 50%">
        <p>© shivam_007 <i>on topcoder</i> </p>
    </div><div class="art-layout-cell layout-item-0" style="width: 50%">
     
    </div>
    </div>
</div>

    <p class="art-page-footer">
   
    </p>
  </div>
</footer>

</div>


</body></html>