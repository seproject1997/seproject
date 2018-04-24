<!DOCTYPE html>
<html>
<head>
    <?php include('session.php'); 
        
     if(!$rowsec['role']=="USER")
     {
         header("location:index.html"); 
     }?>
    <meta name="description" content="An online tool to calculate CGPA, GPA and Even get a hint of what your CGPA would be after few semesters. It is 100% accurate and very easy to use. More than 19.5k users have been using it to compute their GPAs and CGPA.">
    <meta name="keywords" content="CGPA calculator VIT, VIT CGPA CALCULATOR, VIT gpa calculator, gpa calculator VIT, devil-coder cgpa calculator, Raj Chandra vit cgpa calculator, VIT marks calculator">
    <meta name="author" content="Raj Chandra">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1b567e">
    <title> CGPA Calculator</title>
    <link rel="icon" type="image/png" href="http://www.fetchlogos.com/wp-content/uploads/2015/10/VIT-University-Logo.png">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="animate.css">
    <!-- Bootstrap -->
    <!--<link href="bootstrap/css/bootstrap.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- This is for smartlook -->
    <script type="text/javascript">
        window.smartlook||(function(d) {
        var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
        var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
        c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
        })(document);
        smartlook('init', '2522f0e7a204e4f47008022e9c9070d428d19164');
    </script>
    <!-- Google adsense -->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-8598751574376549",
        enable_page_level_ads: true
      });
    </script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99147431-4', 'auto');
  ga('send', 'pageview');

</script>

    <!--Custom CSS-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- for likes -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- for comments -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<center>
<div class="main-container">
    <div class="header-container">
         <header> CGPA CALCULATOR</header>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color : #1b567e;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item link2 active" onclick="changeActiveLink(2)">
                <a class="nav-link" href="#emc">EXPECTED GRADE CALCULATOR</a>
            </li>
            <li class="nav-item link1" onclick="changeActiveLink(1)">
                <a class="nav-link" href="dash.php">Back</a>
            </li>
        </ul>
    </div>
</nav>

    <!--<div class="container">-->
        <!--<div class="card-container card-outline-success mb-3 text-center" style="solid;background-color: #ffffff;"><br>-->
            <!--<button id="about-btn" class="btn btn-primary">How to use?</button><br><br>-->
            <!--<div class="card-block">-->
                <!--<blockquote class="info" id="about" style="display: none;">-->
                <!--<p>VIT CGPA Calculator is a great tool that will help you calculate the CGPA for the present semester. Moreover, VIT CGPA calculator also gives you the power to predict the CGPA for the coming Semesters. VIT CGPA Calculator has been helping hundreds of students predict their CGPA. Hope it helps you :)</p>-->
                  <!--<section class="how_to" ><br>-->
                      <!--To begin with select the credits and the grades of the courses for which the results are out in the section 'Your details'.<br>-->
                      <!--<img src="images/fill-details_gpa.jpeg" alt="vit cgpa calculator" height="300" width="200"> <br><hr>-->
                      <!--If results are out for 5 courses the details should look like this(Note: Selecting all the courses in not binding.) <br>-->
                      <!--<img src="images/filled-details.jpeg" alt="vit cgpa calculator" height="180" width="200"> <br><hr>-->
                      <!--Now press the 'Get GPA' button. <br>-->
                      <!--<img src="images/press_gpa.jpeg" alt="vit cgpa calculator" height="300" width="200"> <br><hr>-->
                      <!--Your GPA will be displayed. <br>-->
                      <!--<img src="images/press-cgpa-btn.jpeg" alt="vit cgpa calculator" height="300" width="200"> <br><hr>-->
                      <!--Press the Calculate CGPA button to get the CGPA and fill the details. <br>-->
                      <!--<img src="images/fill_det_cgpa.jpeg" alt="vit cgpa calculator" height="200" width="200"> <br><hr>-->
                      <!--The filled details looks as below , if you had campleted 102 credits with a cgpa of 8.8 last semester and this semester you had 24 credits and your GPA is 9.6. Press the 'Done' button to get the CGPA.<br>-->
                      <!--<img src="images/filled-det-cgpa.jpeg" alt="vit cgpa calculator" height="300" width="200"> <br><hr>-->
                      <!--The CGPA will be displayed as shown.<br>-->
                      <!--<img src="images/press-done.jpeg" alt="vit cgpa calculator" height="250" width="200"> <br><hr>-->
                      <!--You can get your CSE 1002 grades by pressing the 'Get CSE grade' button. <br>-->
                      <!--<img src="images/cse-grades.jpeg" alt="vit cgpa calculator" height="300" width="200"> <br><hr>-->
                      <!--<h3><b>For any number of Semester</b></h3><br>-->
                      <!--<b>Begin by entering the cgpa and credits till the present semester. For example if you are in 4th semester your input should look like this </b><br>-->
                      <!--<img src="images/new_fill_basic.png" alt="vit cgpa calculator" height="100%" width="200"> <br><hr>-->
                      <!--Then enter the cgpa and credits(you intend to get) for future semesters and click the check cgpa button<br>-->
                      <!--<img src="images/new_fill_rest.png" alt="vit cgpa calculator" height="100%" width="200"> <br><hr>-->
                      <!--The CGPA will be displayed as shown.<br>-->
                      <!--<img src="images/new_get_cgpa.png" alt="vit cgpa calculator" height="100%" width="200"> <br><hr>-->
                  <!--</section>-->
                  <!--<footer id="attrib">Team <i class="fas fa-times float-right" id="close-btn"></i></footer>-->
                <!--</blockquote>-->
            <!--</div>-->
          <!--</div>-->
        <!--</div>-->
    <!--</div>-->
    <div class="container-fluid">
        <div class="row">
    <!-- Ads for CodePark comes here -->
          <!-- <div class="col-sm-12 col-md-12 col-lg-12 ads">
            <div class="jumbotron jumbotron-fluid">
              <div class="container ads-container">
                <div align="right">
                  <span class="badge-pill badge-light">Ads</span>
                </div>
                <h1 class="display-3 tada animated">
                  <img src="images/codepark.png" class="animated" alt="CodePark" height="100" width="150"> CodePark.in</h1>
                <p class="lead">Codes worth sharing.</p>
                <hr class="my-4">
                <p class="lead">
                  <a class="btn btn-primary btn-lg badge-pill badge-primary" href="http://www.CodePark.in" target="_blank" role="button">Learn more</a>
                </p>
              </div>
            </div>
          </div> -->

            <!--Marks Predictor-->
            <div class="col-sm-12 col-md-12 col-lg-6 marks-predictor" id="emc" align="left">
                <div class="card-container">
                
                    <h1>Compute Expected GRADES</h1>
                    <hr>
                    <form>
                        <div class="form-group row">
                            <label for="cat1" class="col-sm-6 col-form-label">Marks in Test 1 : </label>
                            <div class="input-group col">
                                <input type="text"  class="form-control" id="cat1" placeholder="Your score in Test 1" aria-label="Marks Input" aria-describedby="basic-addon">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon">&nbsp; max 40 </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cat2" class="col-sm-6 col-form-label">Marks in Test 2 : </label>
                            <div class="input-group col">
                                <input type="text"  class="form-control" id="cat2" placeholder="Your score in Test 2" aria-label="Marks Input" aria-describedby="basic-addon">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon">&nbsp; max 40 </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="da" class="col-sm-6 col-form-label">Marks in Assignment/Quiz/Project : </label>
                            <div class="input-group col">
                                <input type="text"  class="form-control" id="da" placeholder="Your score in Assignment, Quiz or Project" aria-label="Marks Input" aria-describedby="basic-addon">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon">&nbsp; max 40 </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lab" class="col-sm-6 col-form-label">Marks in Comprehensive : </label>
                            <div class="input-group col">
                                <input type="text"  class="form-control" id="lab" placeholder="Your score in Final Exam" aria-label="Marks Input" aria-describedby="basic-addon">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon"> max 80 </span>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-primary text-center text-uppercase alert-marks" role="alert">
                          <b><span id="marks"></span></b>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="button" onclick="getMarks()" class="btn btn-primary float-right">Submit</button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- This semester cgpa calculator -->
            <div class="col-sm-12 col-md-12 col-lg-6 quick-cgpa-calculator" id="qcc">
                <div class="card-container">
                    <section class="cgpa-box" id="cgpa-box"><center>
                        <h1>Quick Cgpa Calculator</h1>
                        <hr>
                        <div>
                            <div class="input-group col-sm-8">
                                <input type="text" id='tc' class="form-control cgpa-input" maxlength="3" placeholder="Credits till last Sem?" aria-label="Marks Input" aria-describedby="basic-addon">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon">max 160 </span>
                                </div>
                            </div>
                            <br>
                            <div class="input-group col-sm-8">
                                <input type="text" id='cgpa' class="form-control cgpa-input" maxlength="4" placeholder="CGPA till last Sem?" aria-label="Marks Input" aria-describedby="basic-addon">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon">&nbsp; max 10 </span>
                                </div>
                            </div>
                            <br>
                            <div class="input-group col-sm-8">
                                <input type="text" id='c' class="form-control cgpa-input" maxlength="2" placeholder="Credits in this Sem?" aria-label="Marks Input" aria-describedby="basic-addon">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon">max &nbsp; 28 </span>
                                </div>
                            </div>
                            <br>
                            <div class="input-group col-sm-8">
                                <input type="text" id='gpa' class="form-control cgpa-input" maxlength="4" placeholder="GPA this semester?" aria-label="Marks Input" aria-describedby="basic-addon">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon">max &nbsp; 10 </span>
                                </div>
                            </div><br>
                            <div class="alert alert-primary text-center text-uppercase alert-cgpa-msg" role="alert">
                                <b><span class="cgpa-msg" id="cgpa-msg"></span></b>
                            </div>
                            <button class="btn btn-primary float-right" id="submit">Submit</button>
                        </div>
                    </center>
                    </section><br><br>
                </div>
            </div>
        
          <!--All semester CGPA calculator-->
            <div class="col-sm-12 col-md-6 col-lg-6 n-sem-cgpa-calculator" id="ascc">
            <div class="card-container">
                <h1 class="card-title">Calculate your CGPA for any number of Semesters</h1><hr>
                <div class="input-group col-sm-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon">1st Sem</span>
                    </div>
                    <input type="text" id="gpa1" class="form-control fgpa" name="fgpa1" placeholder="GPA"  aria-describedby="basic-addon">
                    <input type="text" id="fc1" class="form-control fcredits" name="fcredit1" placeholder="CREDITS">
                </div><br>
                <div class="input-group col-sm-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon">2nd Sem</span>
                    </div>
                    <input type="text" id="gpa2" class="form-control fgpa" name="fgpa2" placeholder="GPA"  aria-describedby="basic-addon">
                    <input type="text" id="fc2" class="form-control fcredits" name="fcredit2" placeholder="CREDITS">
                </div><br>
                <div class="input-group col-sm-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon">3rd Sem</span>
                    </div>
                    <input type="text" id="gpa3" class="form-control fgpa" name="fgpa3" placeholder="GPA"  aria-describedby="basic-addon">
                    <input type="text" id="fc3" class="form-control fcredits" name="fcredit3" placeholder="CREDITS">
                </div><br>
                <div class="input-group col-sm-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon">4th Sem</span>
                    </div>
                    <input type="text" id="gpa4" class="form-control fgpa" name="fgpa4" placeholder="GPA"  aria-describedby="basic-addon">
                    <input type="text" id="fc4" class="form-control fcredits" name="fcredit4" placeholder="CREDITS">
                </div><br>
                <div class="input-group col-sm-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon">5th Sem</span>
                    </div>
                    <input type="text" id="gpa5" class="form-control fgpa" name="fgpa5" placeholder="GPA"  aria-describedby="basic-addon">
                    <input type="text" id="fc5" class="form-control fcredits" name="fcredit5" placeholder="CREDITS">
                </div><br>
                <div class="input-group col-sm-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon">6th Sem</span>
                    </div>
                    <input type="text" id="gpa6" class="form-control fgpa" name="fgpa6" placeholder="GPA"  aria-describedby="basic-addon">
                    <input type="text" id="fc6" class="form-control fcredits" name="fcredit6" placeholder="CREDITS">
                </div><br>
                <div class="input-group col-sm-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon">7th Sem</span>
                    </div>
                    <input type="text" id="gpa7" class="form-control fgpa" name="fgpa7" placeholder="GPA"  aria-describedby="basic-addon">
                    <input type="text" id="fc7" class="form-control fcredits" name="fcredit7" placeholder="CREDITS">
                </div><br>
                <div class="input-group col-sm-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon">8th Sem</span>
                    </div>
                    <input type="text" id="gpa8" class="form-control fgpa" name="fgpa8" placeholder="GPA"  aria-describedby="basic-addon">
                    <input type="text" id="fc8" class="form-control fcredits" name="fcredit8" placeholder="CREDITS">
                </div><br>
                <div class="alert alert-primary text-center text-uppercase alert-fcgpa" role="alert">
                    <b><span class="text-info" id="fcgpa"></span></b>
                </div>
                <button class="btn btn-primary float-right" id="sem-cgpa-btn">Submit</button>
                <br><br>
            </div>
          </div>
      
        <!-- This semseter GPA calculator -->
        <div class="col-sm-12 col-md-12 col-lg-6 gpa-calculator" id="gc">
            <div class="card-container">
                <h1 class="card-title">Calculate GPA</h1><hr>
                  <h6 id="projHelp" class="form-text text-danger">*Select your current semester.</h6>
<button class="gbtn btn btn-primary float-right" id="gbtn6" >Semester6</button> 
<button class="gbtn btn btn-primary float-right" id="gbtn5" >Semester5</button> 
<button class="gbtn btn btn-primary float-right" id="gbtn4" >Semester4</button>  
<button class="gbtn btn btn-primary float-right" id="gbtn3" >Semester3</button> 
<button class="gbtn btn btn-primary float-right" id="gbtn2" >Semester2</button>              
<button class="gbtn btn btn-primary float-right" id="gbtn1" >Semester1</button>






</br>       
</br>       
 <div class="container">   
 <div class="input-group col-sm-8">
 <div class="input-group-prepend">
                        

<div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="grades1" class="text-info"></span></b>
                

                    <select class="form-control" name="Grades" id="g1">
                        <option value="0" >Grade</option>
                        <option value="10">O</option>
                        <option value="9">A+</option>
                        <option value="8">A</option>
                        <option value="7">B+</option>
                        <option value="6">C</option>
                        <option value="5">D</option>
                        <option value="0">F</option>
                        <option value="0">N</option>
                    </select></div></div>
                   <div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="c1" class="text-info"></span></b>
                </div>
                </div><br>
                 <div class="input-group col-sm-8">
 <div class="input-group-prepend">
                        

<div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="grades2" class="text-info"></span></b>
               

                    <select class="form-control" name="grades" id="g2">
                        <option value="0" >Grade</option>
                        <option value="10">O</option>
                        <option value="9">A+</option>
                        <option value="8">A</option>
                        <option value="7">B+</option>
                        <option value="6">C</option>
                        <option value="5">D</option>
                        <option value="0">F</option>
                        <option value="0">N</option>
                    </select> </div></div>
                   <div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="c2" class="text-info"></span></b>
                </div>
                </div><br>
                <div class="input-group col-sm-8">
 <div class="input-group-prepend">
                        

<div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="grades3" class="text-info"></span></b>
               

                    <select class="form-control" name="grades" id="g3">
                         <option value="0" >Grade</option>
                        <option value="10">O</option>
                        <option value="9">A+</option>
                        <option value="8">A</option>
                        <option value="7">B+</option>
                        <option value="6">C</option>
                        <option value="5">D</option>
                        <option value="0">F</option>
                        <option value="0">N</option>
                    </select>  </div></div>
                   <div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="c3" class="text-info"></span></b>
                </div>
                </div><br>
                 <div class="input-group col-sm-8">
 <div class="input-group-prepend">
                        

<div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="grades4" class="text-info"></span></b>
                

                    <select class="form-control" name="Grades" id="g4">
                        <option value="0" >Grade</option>
                        <option value="10">O</option>
                        <option value="9">A+</option>
                        <option value="8">A</option>
                        <option value="7">B+</option>
                        <option value="6">C</option>
                        <option value="5">D</option>
                        <option value="0">F</option>
                        <option value="0">N</option>
                    </select></div></div>
                    <div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="c4" class="text-info"></span></b>
                </div>
                </div><br>
                 <div class="input-group col-sm-8">
 <div class="input-group-prepend">
                        

<div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="grades5" class="text-info"></span></b>
                

                    <select class="form-control" name="Grades" id="g5">
                     <option value="0" >Grade</option>
                        <option value="10">O</option>
                        <option value="9">A+</option>
                        <option value="8">A</option>
                        <option value="7">B+</option>
                        <option value="6">C</option>
                        <option value="5">D</option>
                        <option value="0">F</option>
                        <option value="0">N</option>
                    </select></div></div>
                    <div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="c5" class="text-info"></span></b>
                </div>
                </div><br>
                <div class="input-group col-sm-8">
 <div class="input-group-prepend">
                        

<div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="grades6" class="text-info"></span></b>
              

                    <select class="form-control" name="Grades" id="g6">
                  <option value="0" >Grade</option>
                        <option value="10">O</option>
                        <option value="9">A+</option>
                        <option value="8">A</option>
                        <option value="7">B+</option>
                        <option value="6">C</option>
                        <option value="5">D</option>
                        <option value="0">F</option>
                        <option value="0">N</option>
                    </select>  </div></div>
                    <div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="c6" class="text-info"></span></b>
                </div>
                </div><br>
              <div class="input-group col-sm-8">
 <div class="input-group-prepend">
                        

<div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="grades7" class="text-info"></span></b>
               

                    <select class="form-control" name="Grades" id="g7">
                <option value="0" >Grade</option>
                        <option value="10">O</option>
                        <option value="9">A+</option>
                        <option value="8">A</option>
                        <option value="7">B+</option>
                        <option value="6">C</option>
                        <option value="5">D</option>
                        <option value="0">F</option>
                        <option value="0">N</option>
                    </select> </div></div>
                   <div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="c7" class="text-info"></span></b>
                </div>
                </div><br>
                 <div class="input-group col-sm-8">
 <div class="input-group-prepend">
                        

<div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="grades8" class="text-info"></span></b>
                

                    <select class="form-control" name="Grades" id="g8">
                       <option value="0" >Grade</option>
                        <option value="10">O</option>
                        <option value="9">A+</option>
                        <option value="8">A</option>
                        <option value="7">B+</option>
                        <option value="6">C</option>
                        <option value="5">D</option>
                        <option value="0">F</option>
                        <option value="0">N</option>
                    </select></div></div>
                    <div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="c8" class="text-info"></span></b>
                </div>
                </div><br>
                <div class="input-group col-sm-8">
 <div class="input-group-prepend">
                        

<div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="grades9" class="text-info"></span></b>
               

                    <select class="form-control" name="Grade" id="g9">
                       <option value="0" >Grade</option>
                        <option value="10">O</option>
                        <option value="9">A+</option>
                        <option value="8">A</option>
                        <option value="7">B+</option>
                        <option value="6">C</option>
                        <option value="5">D</option>
                        <option value="0">F</option>
                        <option value="0">N</option>
                    </select>  </div></div>
                    <div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="c9" class="text-info"></span></b>
                </div>
                </div><br>
                 <div class="input-group col-sm-8">
 <div class="input-group-prepend">
                        

<div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="grades10" class="text-info"></span></b>
               
         <select class="form-control" name="Grades" id="g10">
                      <option value="0" >Grade</option>
                        <option value="10">O</option>
                        <option value="9">A+</option>
                        <option value="8">A</option>
                        <option value="7">B+</option>
                        <option value="6">C</option>
                        <option value="5">D</option>
                        <option value="0">F</option>
                        <option value="0">N</option>
                    </select>  </div></div>
                    <div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="c10" class="text-info"></span></b>
                </div>
                    <section>
                </div><br><br>
                <div class="alert alert-primary alert-grades" role="alert">
                    <b><span id="grades" class="text-info"></span></b>
                </div>
</div>
                <button class="gbtn btn btn-primary float-right" id="gbtn" >Submit</button>
                </section>
                <br><br>
            </div>
        </div>
    </div>
</div>

<!-- main script file  -->
<script language="javascript" type="text/javascript" src="mycalculator.js"></script>
</body>
</html>
