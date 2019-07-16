<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Control Panel</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-form.css"/>
    
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
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

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

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

.center{
	text-align:center;
	 font-size: 30px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
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
                                <li><a href="review.php">Review</a></li>
                                <li class="current"><a href="Log.php">Admin Control Panel</a></li>
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
	
<div class="center">Login Form</div>

<?php
  if(isset($_POST['Submitted']))
  {
	  $Name = strtolower($_POST['uname']);
	  $Pass = strtolower($_POST['psw']);
	  
	  if(!empty($Name) && !empty($Pass)){
	     
		 if($Name == "admin" && $Pass == "admin")
		 {
			 
			$URL="http://localhost:8080/primex/View.php";
            echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
            echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
		 }
		 else
		 { 	
       		echo "Login Failed";
		 }
	  }
	  else
	  {
		  echo "Please Fill All The Required Field";
	  }  
  }
else
{
?>
<form action="Log.php" method="post">
  <div class="imgcontainer">
    <img src="images/avatar.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
	<input type="hidden" name="Submitted" value="true">
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
</form>
<?php
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
</body>
</html>