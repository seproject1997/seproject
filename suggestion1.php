<?php include('session.php'); 
        
     if(!$rowsec['role']=="USER")
     {
         header("location:index.html"); 
     }
         
         
                     $predict=$_POST['predict'];
                     $_SESSION['predict']=$predict;
              $sql = "SELECT * FROM elective  WHERE semester = '$predict' ";
              $result = mysqli_query($con,$sql) or die ('Sorry');
             //$row = mysqli_fetch_array($result);
            $name=0;
                
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
	
	<button id="btnremove">RESET FORM</button>
	
  	<h1>prediction</h1>

  	Enter Grades From A-F in captial only<span style="color:red">*</span>
	<div id="table-wrapper">
	  <div id="form_content">
		<form class='form-signin'  role='form' method='POST' action='suggestion2.php'>
          <?php 
                 echo "<h2> For Predicting $predict th Semester CGPA Enter grade  </h2>"; 
           while($row = mysqli_fetch_array($result)) {
              
		echo "<div>";
         
		 
              $name=$name+1;
			echo "$row[3]";
			
				echo "<input id='eng'  class='inp-text' name='$name'   type='text' size='50' maxlength='1'required pattern='[A-F]'>";
		
		echo "</div>";}?>
               <input type='submit' id='btnPredict' style="background-color :#4CAF50" class='btnUpdate' value='GET PREDICTION'>
		</form> 

	   </div>
	  
	</div>
</article>


<script src="js/jquery.js"></script>
<script type="text/javascript" src="predict.js"></script>
<script src="js/common.js"></script>

</div>


</body>
</html>