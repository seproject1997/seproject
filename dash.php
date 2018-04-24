

<html>
    <head><title>Pre</title>
<?php include('session.php'); 
        
     if(!$rowsec['role']=="USER")
     {
         header("location:index.html"); 
     }
         
         ?>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,400" rel="stylesheet">
    </head>
    <body>
<div class="container">
<header>
       <ul class="main_nav">
            <li class="main_nav_l"><a href="#">DASHBOARD</a></li>
            <li><a  href="cgpa.php">Predict CGPA</a></li>
            <li><a  href="myindex.php">GPA calculater</a></li>
            <li><a  href="suggestion.php">Suggesting Elective</a></li>
            <a href="logout.php"><button  style="background-color :#4CAF50"  class="btnUpdate"> LOGOUT</button></a>
            <button id="btnremove"><?php echo $_SESSION['id']; ?></button>
        </ul>
    
</header>

<article>
	<h1>About</h1>
            
    <font size="6" color="blue"><p> This system allows the students to calculate or predict their GPA and CGPA. It is an academic tool to calculate the student’s performance at University. This system is a new, self-contained product and the system have various applications like the students can put the expected grade example:students marks in test1 and test2 performance which is out 80 and comprehensive exam out of 80 and student should input all this details and the system will provide results with respect to the marks given by the students.Students also can find the quick cgpa calculations where students have to input their grades in the current and the last semester of their degree where the students can input the grades and credits of any semester from first to eight semester and once the student submits the accurate results will be found by the system and similarly students can give the grades and credits of the semester the system will calculate it and the other important aspects or the part of the system is to predict the cgpa of the students that is probability of the students getting grade based on their previous subjects and dependency of their subjects the system calculates or predicts the accurate cgpa that can be obtained by the students. </p></font>
  
        
       
	
</article>


<script src="js/jquery.js"></script>
<script type="text/javascript" src="predict.js"></script>
<script src="js/common.js"></script>

</div>


</body>
</html>



