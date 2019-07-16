<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Control Panel | Edit</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-form.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src='js/modal.js'></script>
    <script src='js/TMForm.js'></script>
    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
                 height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
<style>
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
.form-style-6{
	font: 95% Arial, Helvetica, sans-serif;
	max-width: 400px;
	margin: 10px auto;
	padding: 16px;
	background: #F7F7F7;
}
.form-style-6 h1{
	background: #43D1AF;
	padding: 20px 0;
	font-size: 140%;
	font-weight: 300;
	text-align: center;
	color: #fff;
	margin: -16px -16px 16px -16px;
}
.form-style-6 input[type="text"],
.form-style-6 input[type="number"],
.form-style-6 textarea,
.form-style-6 select 
{
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;
	outline: none;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	background: #fff;
	margin-bottom: 4%;
	border: 1px solid #ccc;
	padding: 3%;
	color: #555;
	font: 95% Arial, Helvetica, sans-serif;
}

.form-style-6 input[type="text"]:focus,
.form-style-6 input[type="number"]:focus,
.form-style-6 textarea:focus,
.form-style-6 select:focus
{
	box-shadow: 0 0 5px #43D1AF;
	padding: 3%;
	border: 1px solid #43D1AF;
}
.form-style-6 input[type="submit"],
.form-style-6 input[type="button"]{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	padding: 3%;
	background: #43D1AF;
	border-bottom: 2px solid #30C29E;
	border-top-style: none;
	border-right-style: none;
	border-left-style: none;	
	color: #fff;
}
.form-style-6 input[type="submit"]:hover,
.form-style-6 input[type="button"]:hover{
	background: #2EBC99;
}
.center{
	text-align:center;
	 font-size: 30px;
}

.button {
  background-color: #555555;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.container {
  position: relative;
  text-align: center;

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
                                        <li><a href="disted.php">DISTED</a></li>
                                    <li><a href="segi.php">Segi</a>
                                    <li><a href="kdu.php">KDU</a>
                                    <li><a href="tarc.php">TARC</a>
									<li><a href="msu.php">MSU</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="Review.php">Review</a></li>
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
	$ID = $_POST['id'];
	$Name = $_POST['name'];
	$Address = $_POST['address'];
	$Desc = $_POST['desc'];
	$Info = $_POST['info'];
	$Course = $_POST['course'];
	$Link = $_POST['link'];
	$Image = $_POST['image'];
	
	
if(!empty($ID) && !empty($Name) && !empty($Address) && !empty($Desc) && !empty($Info) && !empty($Course) && !empty($Image) )
	{
	
        $sql = "UPDATE college_info SET College_Name='$Name', College_Location='$Address' , College_Desc='$Desc' , College_Info='$Info', College_Courses='$Course', link='$Link', image='$Image' WHERE College_ID='$ID'";

       if (mysqli_query($conn, $sql)) {
           echo "Record updated successfully";
        } else {
             echo "Error updating record: " . mysqli_error($conn);
               }
	

       mysqli_close($conn);
    
	}
	else
	{
       echo '<p style="color:red;"> Please submit all the fields. </p>'; 	
	}
}
else{
	$view = "SELECT College_ID FROM college_info";
	$result = mysqli_query($conn, $view);
    $queryResult = mysqli_num_rows($result);
	
	if($queryResult >0 ){
		echo'	
         <div class="form-style-6">
		 <h1> Edit / Update College </h1>
	     <form action="Edit.php" method="post">
		 <select name = "id">
        <option value ="" disabled selected> Select College ID </option>';
		while($row = mysqli_fetch_assoc($result)){
        echo"
           <option value = \"".$row['College_ID']."\">" .$row['College_ID']. "</option>";
		}
	   echo'
         </select>
          
         <textarea name="name" placeholder="Enter New College Name"cols="40" rows="5"></textarea>
	     <br>
		 <textarea name="address" placeholder="Enter New College Address"cols="40" rows="5"></textarea>
	     <br>
	     <textarea name="desc" placeholder="Enter New College Description" cols="40" rows="5"></textarea>
	     <br>
	     <textarea name="info" placeholder="Enter New College Info" cols="40" rows="5"></textarea>
	     <br>
	     <textarea name="course" placeholder="Enter New College Courses" cols="40" rows="5"></textarea>
	     <br>
		 <textarea name="link" placeholder="Enter New College Link" cols="40" rows="5"></textarea>
	     <br>
		 <textarea name="image" placeholder="Enter New College Image URL" cols="40" rows="5"></textarea>
	     <br>
	     <input type ="submit" value="Update College"/>
	     <input type ="hidden" name="Submitted" value="true"/>
	     </div>
         </form>';
		
	
     }     
}
		  
?>




<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer" class="color_9">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <p class="info text_4 color_4">
                    © <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <br/>
                    Website designed by PHP Team 12
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>