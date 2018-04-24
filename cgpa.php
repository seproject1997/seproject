

<html>
    <head><title>Pre</title>
        <?php include('session.php'); 
        
     if(!$rowsec['role']=="USER")
     {
         header("location:index.html"); 
     }
         
         ?>
        
        
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">

        <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
        <style>
    div#center{
        margin-left: 30%;
            margin-top: -20%;
    }
    </style>
    </head>
    
<div class="container">
<header>
       <ul class="main_nav">
            <li class="main_nav_l"><a href="dash.php">DASHBOARD</a></li>
          <li><a  href="#">Predict CGPA</a></li>
            <li><a  href="myindex.php">GPA calculater</a></li>
            <li><a  href="suggestion.php">Suggesting Elective</a></li>
            <a href="logout.php"><button  style="background-color :#4CAF50"  class="btnUpdate"> LOGOUT</button></a>
            <button id="btnremove"><?php echo $_SESSION['id']; ?></button>
        </ul>
    
</header>

    
<article>
	
            
        <div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="predict.php">
					<span class="login100-form-title p-b-26">
						Select semester you want to find your CGPA
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div id="center">
                        <h2> 4th <input  type="radio" name="predict" value='4'></h2>
					
                    
                        <h2>5th <input  type="radio" name="predict" value='5'></h2>
					
                    
                        <h2>6th <input  type="radio" name="predict" value="6"></h2>  
					
                    </div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input type="submit" class="login100-form-btn" style="background-color :#4CAF50" value="Predict">
								
							
						</div>
					</div>

				</form>
			</div>
		</div>
	
	
        
       

	
</article>
</div>

<script src="js/jquery.js"></script>
<script type="text/javascript" src="predict.js"></script>
<script src="js/common.js"></script>




</html>



