<!DOCTYPE html>
<html lang="en">
<head>
    <title>Review</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/isotope.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.equalheights.js"></script>
	<script src='js/isotope.min.js'></script>
	<style>
	h2 {
		text-align: center;
		color: navy;
		font-weight: bold;
		background-color: #D0CFCF;
	}
	img {
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
	body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
	</style>

</head>
<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header id="header">
        <div id="stuck_container">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <div class="brand put-left">
                            <h1>
                                <a href="index.php">
                                    <img src="images/logo.png" width="150" height="100" alt="Logo"/>
                                </a>
                            </h1>
                        </div>
                        <nav class="nav put-right">
                            <ul class="sf-menu">
							<li>
						<form class="example" action="search.php" style="margin:auto;max-width:300px" method="post">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
  <input type="hidden" name="Submitted" value="true">
  </form>
						</li>
                                <li><a href="index.php">Home</a></li>
                                <li>
                                    <a href="college.php">College</a>
                                    <ul>
                                    <li><a href="disted.php">Disted</a></li>
                                    <li><a href="segi.php">Segi</a>
                                    <li><a href="kdu.php">KDU</a>
                                    <li><a href="tarc.php">TARC</a>
									<li><a href="msu.php">MSU</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class = "current"><a href="review.php">Review</a></li>
                                <li><a href="Log.php">Admin Control Panel</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
   <!--========================================================
                              CONTENT
    =========================================================-->
	<br><h2>
	<img src = "images/rate.png" alt = "rate" style = "width:500; height: 600"><br></h2>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegeportal";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['Submitted'])){
	
   $Name = $_POST['name'];
   $Score = $_POST['score'];
   $Positive = $_POST['content_pros'];
   $Feedback = $_POST['content_cons'];
   $Email = $_POST['email'];
   
    $query = "INSERT INTO review(ID,Name,Rating,Positive,Feedback,Email) VALUES (0, '$Name' ,'$Score','$Positive', '$Feedback' , '$Email')"; 
   
   if(!empty($Name) && !empty($Score) && !empty($Positive) && !empty($Feedback) && !empty($Email) ){
	  mysqli_query($conn, $query);
	  echo "Thanks For The Reviews !!! " ;
	
   }
   else{
	   echo "Please Fill all the required field";
   }

mysqli_close($conn);
}else{
	?>
<form action="review.php" method="post">
<h2>Your Review of This College<h2>
<p>It only takes a minute! And your review will help future students</p>
<br>
<h2>College Name <h2>
<div style="width:110px; margin:0 auto; background-color: #D0CFCF">
<select name = "name">
<option value = "Disted College" > Disted College </option>
<option value = "Segi College"> Segi College </option>
<option value = "KDU College"> KDU College </option>
<option value = "TARC College"> TARC College </option>
<option value = "MSU College"> MSU College </option>
</select>
</div>
<br>
</h2>

      <h2>Overall rating<h2>
   
            <input type="radio" name="score"  value="1" >
            <span class="sr-only"> 1</span>

            <input type="radio" name="score"  value="2" >
            <span class="sr-only"> 2</span>

            <input type="radio" name="score"  value="3" >
           <span class="sr-only"> 3</span>
        
            <input type="radio" name="score"  value="4" >
           <span class="sr-only"> 4</span>

            <input type="radio" name="score"  value="5" >
            <span class="sr-only"> 5</span>
          
      <br><br>
      <p>Positive highlights</p>
      <textarea id="id_pros" name="content_pros" placeholder="Share some of the best reasons to study at this college" 
	  class="textarea form-control" cols="40" rows="4"  ></textarea><br>
	  <br>


      <p>Feedback for improvement</p>
      <textarea id="id_cons" name="content_cons" placeholder="Share some improvement suggestions for this college" 
	  class="textarea form-control" cols="40" rows="4"  ></textarea><br>
	  <br>

 
        <p>Your email</p>
        <input type="email" name="email">
		<br><br>
        <p>We only publish reviews with verified email addresses.<p>
    
      <input type="checkbox" required>
        I agree to the <a href="/terms-and-conditions/">Terms of Use</a>.
        This review of my experience at INTI International University is truthful.
		<br><br>
        <input type="submit" value="Submit Review">
		<input type="hidden" name="Submitted" value="true">
  
      <br>
       <p> After you submit, you'll receive an email to confirm that you're human and not a spam bot. 
	       We only publish reviews with verified email addresses.</p>
      

  </form>
  <?php
   }
   ?>
        <div class="container">
            <div class="row wrap_9 wrap_4 wrap_10">
                <div class="grid_12">
                    <div class="header_1 wrap_3 color_3">
                        Get in Touch
                    </div>
                    <div class="box_3">
                        <ul class="list_1">
                            <li><a class="fa fa-twitter" href="#"></a></li>
                            <li><a class="fa fa-facebook" href="https://www.facebook.com/ben.ohkahwei"></a></li>
                            <li><a class="fa fa-google-plus" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer" class="color_9">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <p class="info text_4 color_4">
                    © <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <br/>
                    Website designed by PHP Team 12</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>