<?php include('session.php'); 
        
     if(!$rowsec['role']=="USER")
     {
         header("location:index.html"); 
     }
         
         
$predict=$_SESSION['predict'];
    
    $a=$_POST['1'];
    $b=$_POST['2'];
    $c=$_POST['3'];
    $d=$_POST['4'];
    $e=$_POST['5'];
    $f=$_POST['6'];
            
if($a=='A'){$A=9.8;}
elseif($a=='B'){$A=8.5;}
elseif($a=='C'){$A=8.2;}
elseif($a=='D'){$A=6.4;}
elseif($a=='E'){$A=5.6;}
elseif($a=='F'){$A=0;}

if($b=='A'){$B=9.8;}
elseif($b=='B'){$B=8.5;}
elseif($b=='C'){$B=8.2;}
elseif($b=='D'){$B=6.4;}
elseif($b=='E'){$B=5.6;}
elseif($b=='F'){$B=0;}

if($c=='A'){$C=9.8;}
elseif($c=='B'){$C=8.5;}
elseif($c=='C'){$C=8.2;}
elseif($c=='D'){$C=6.4;}
elseif($c=='E'){$C=5.6;}
elseif($c=='F'){$C=0;}

if($d=='A'){$D=9.8;}
elseif($d=='B'){$D=8.5;}
elseif($d=='C'){$D=8.2;}
elseif($d=='D'){$D=6.4;}
elseif($d=='E'){$D=5.6;}
elseif($d=='F'){$D=0;}

if($e=='A'){$E=9.8;}
elseif($e=='B'){$E=8.5;}
elseif($e=='C'){$E=8.2;}
elseif($e=='D'){$E=6.4;}
elseif($e=='E'){$E=5.6;}
elseif($e=='F'){$E=0;}

if($f=='A'){$F=9.8;}
elseif($f=='B'){$F=8.5;}
elseif($f=='C'){$F=8.2;}
elseif($f=='D'){$F=6.4;}
elseif($f=='E'){$F=5.6;}
elseif($f=='F'){$F=0;}


?>

<html>
    <head><title>Pre</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,400" rel="stylesheet">
    </head>
    <body>
<div class="container">
<header>
       <ul class="main_nav">
            <li class="main_nav_l"><a href="dash.php">DASHBOARD</a></li>
            <li><a  href="cgpa.php">Predict CGPA</a></li>
            <li><a  href="myindex.php">GPA calculater</a></li>
            <li><a  href="suggestion.php">Suggesting Elective</a></li>
            <a href="logout.php"><button  style="background-color :#4CAF50"  class="btnUpdate"> LOGOUT</button></a>
            <button id="btnremove"><?php echo $_SESSION['id']; ?></button>
        </ul>
    
</header>

<article>
	

  	<h1>Predicted</h1>
	<div id="table-wrapper">
	  <div id="form_content">
          
		<?php 
                 echo "<h2>$predict th Semester Predicted marks </h2>";
              $sql = "SELECT * FROM subject  WHERE semester = '$predict' ";
              $result = mysqli_query($con,$sql) or die ('Sorry');
              $row = mysqli_fetch_array($result);?>
              <form class='form-signin'  role='form'>
		<div>
         <?php 
            $credit=$row[2];
            
            echo $row[1]; 
			echo "<input id='eng'  class='inp-text' value='$a'   type='text' size='50' disabled>";?>
		</div>
        <div>
         <?php
            
            
            $row1 = mysqli_fetch_array($result);
            $credit1=$row1[2];
            echo $row1[1]; 
			echo "<input id='eng'  class='inp-text' value='$b'   type='text' size='50' disabled>";?>
		</div>
        <div>
         <?php
            
            
            $row2 = mysqli_fetch_array($result);
            $credit2=$row2[2];
            echo $row2[1]; 
			echo "<input id='eng'  class='inp-text' value='$c'   type='text' size='50' disabled>";?>
		</div>
        <div>
         <?php
            
            
            $row3 = mysqli_fetch_array($result);
            $credit3=$row3[2];
            echo $row3[1]; 
			echo "<input id='eng'  class='inp-text' value='$d'   type='text' size='50' disabled>";?>
		</div>
        <div>
         <?php
            
            
            $row4 = mysqli_fetch_array($result);
            $credit4=$row4[2];
            echo $row4[1]; 
			echo "<input id='eng'  class='inp-text' value='$e'   type='text' size='50' disabled>";?>
		</div>
        <div>
         <?php
            
            
            $row5 = mysqli_fetch_array($result);
            $credit5=$row5[2];
            echo $row5[1]; 
			echo "<input id='eng'  class='inp-text' value='$f'   type='text' size='50' disabled>";?>
		</div>
	</form>
          <?php $credits=$credit+$credit1+$credit2+$credit3+$credit4+$credit5;
                $gpa=$A*$credit+$B*$credit1+$C*$credit2+$D*$credit3+$E*$credit4+$F*$credit5;
          
                    $score=$gpa/$credits;
          
          
           echo "<h2>Your Gpa of Next semester Might be:-</h2>";var_dump($score) ?>
	   </div>
	  
	</div>
</article>
    
    
    


<script src="js/jquery.js"></script>
<script type="text/javascript" src="predict.js"></script>
<script src="js/common.js"></script>

</div>


</body>
</html>