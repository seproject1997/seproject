<?php include('session.php'); 
        
     if(!$rowsec['role']=="USER")
     {
         header("location:index.html"); 
     }
         
         
$sem=$_SESSION['predict'];
    
    $a=$_POST['1'];
    $b=$_POST['2'];
    $c=$_POST['3'];
    
            
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
          
		
		</div>
        <div>
        <?php if($sem==6){
if(($A>$B)&&($A>$C))
{
    echo " <h1> The best elective is Prallel Computing </h1>";
}
elseif(($B>$A)&&($B>$C))
{
    echo " <h1>The best elective is Data minning</h1>";
}
elseif(($B>$A)&&($B>$C))
{
    echo " <h1>The best elective is Mobile Commuction</h1>";
}
elseif(($A==$B)&&($A==$C))
{
        echo " <h1>Any elective would work.</h1>";
}
elseif($A==$B)
{
        echo " <h1>Any elective Prallel Computing or  Data minning</h1>";
}
elseif($A==$C)
{
        echo " <h1>Any elective Prallel Computing or  Mobile Commuction</h1>";
}
elseif($B==$C)
{
        echo " <h1>Any elective Data minning or  Mobile Commuction</h1>";
}
}
elseif($sem==5){
    if(($A>$B)&&($A>$C))
{
    echo " <h1>The best elective is LAMP</h1>";
}
elseif(($B>$A)&&($B>$C))
{
    echo " <h1>The best elective is C#</h1>";
}
elseif(($B>$A)&&($B>$C))
{
    echo " <h1>The best elective is Java</h1>";
}
elseif(($A==$B)&&($A==$C))
{
        echo " <h1>Any elective would work.</h1>";
}
elseif($A==$B)
{
        echo " <h1>Any elective LAMP or C#</h1>";
}
elseif($A==$C)
{
        echo " <h1>Any elective LAMP or  JAVA</h1>";
}
elseif($B==$C)
{
        echo " <h1>Any elective C# or  JAVA</h1>";
}
}?>
	   </div>
	  
	</div>
</article>
    
    
    


<script src="js/jquery.js"></script>
<script type="text/javascript" src="predict.js"></script>
<script src="js/common.js"></script>

</div>


</body>
</html> 