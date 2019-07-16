<!DOCTYPE html>
<html lang="en">
<head>
    <title>Colleges</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/owl.carousel.js"></script>
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
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.container {
  position: relative;
  text-align: center;

}
.colour{
	background-color: #80ced6;
}
.colour1{
	background-color: #D0CFCF;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
.center{
	text-align:center;
	 font-size: 30px;
}
}
.colour1{
	background-color: #D0CFCF;
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
                            <a href="index.html">
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
                            <li><a href="index.html">Home</a></li>
                            <li class="current">
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
                            <li><a href="review.php">Review</a></li>
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
	
$sql = "SELECT College_ID, College_Name , College_Location, College_Desc, College_Info, College_Courses, link , image FROM college_info";
$result = mysqli_query($conn, $sql);
$queryResult = mysqli_num_rows($result);


		  
if ($queryResult > 0) {
    // output data of each row
	echo '<div class="center">
	      <h1> College Portal </h1>
		  </div>
		  <br>';
    while($row = mysqli_fetch_assoc($result)){
		echo "<table>
		       <tr>
			   <td> College ID :  </td>
			   <td>".$row['College_ID']."</td>
               </tr> 
			   
		       <tr>
			   <td> College Name :  </td>
			   <td> <a href =".$row['link'].">".$row['College_Name']."</a></td>
               </tr>
			   
			   <tr>
			   <td> College Location:    </td>
		       <td>".$row['College_Location']."</td>
			   </tr>
			   
			   <tr>
			   <td> College Description:  </td>
			   <td>".$row['College_Desc']. "</td>
			   </tr>
			   
			   <tr>
			   <td> College Info:    </td>
			   <td>".$row['College_Info']. "</td>
			   </tr>
			   
			   <tr>
			   <td> Courses Available: </td>
			   <td>".$row['College_Courses']. "</td>
			   </tr>
			   
			   <tr>
			   <td> College Image: </td>
			   <td> <img src=\"".$row['image']."\"/></td>
			   </tr>
			   
			   </table>
			   <br>";
	}
}
else{
	echo "No results found in database!!!";
}

mysqli_close($conn);
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
                    Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>