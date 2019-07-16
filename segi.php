<!DOCTYPE html>
<html lang="en">
<head>
    <title>SEGI College</title>
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
		
		
		
		
		
			* {
				box-sizing: border-box;
			}
			
			body {
				margin: 0;
				font-family: Arial, Helvetica, sans-serif;
			}
			
			.bg-img {
				/* The image used */
				background-image: url("Images/Segi_Image.png");
				
				min-height: 850px;
				width: 100%;
				
				/* Center and scale the image nicely */
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				position: relative;
			}
			
			.background-color {
				background-color: #f2f2f2;
			}
			
			.topnav1 {
				overflow: hidden;
				background-color: #e9e9e9;
			}
			
			div.facility {
				width: 250px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				text-align: center;
				float: left;
				margin: 5px 64px;
			}
			
			div.content {
				padding: 10px;
			}
			
			p.main {
				text-align: justify;
				margin: 20px 100px;
			}
			
			p.main1 {
				text-align: center;
				margin: 20px 100px;
			}
			
			.box {
				float: left;
				width: 33.33%;
				padding: 50px;
			}
			
			.clearfix::after {
				content: "";
				clear: both;
				display: table;
			}
			
			.card {
				width: 300px;
				border: 1px solid lightgrey;
				text-align: center;
				float: left;
				margin: 20px 0px 20px 150px;
				background-color: white;
			}
			
			.card1 {
				width: 300px;
				border: 1px solid lightgrey;
				text-align: center;
				float: left;
				margin: 20px 0px 20px 150px;
				background-color: white;
			}
			

			.header0 {
				background-color: #e60000;
				color: white;
				padding: 5px;
			}
			
			.header1 {
				background-color: #e68a00;
				color: white;
				padding: 5px;
			}
			
			.header2 {
				background-color: #000080;
				color: white;
				padding: 5px;
			}

			.container1 {
				padding: 10px;
				margin: 5px 15px;
				text-align: justify;
				color: black;
			}
			
			.button:hover {
				border: none;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
				cursor: pointer;
				display: inline-block;
				transition-duration: 0.4s;
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
		
		<div class="topnav1">
			<br>
			<img src="Images/Segi_Logo.png" height="130" width="270">
			<br><br>
		</div>
		
		<div class="background-color">
		<div class="bg-img">
		</div>
		
		<br><br>
		<center><font color="#336699"><h1>SEGi College<h1></font></center>
		<p class="main">SEGi College serves as SEGi’s education hub for the northern region of Peninsular Malaysia. The campus is situated along Jalan Green Hall and comprises 
		modern facilities and a conducive environment, providing students with a complete learning experience.</p>
		
		<p class="main">The campus also provides students with recreational facilities such as students’ lounge, rooftop garden, fitness centre & aerobics area. Amenities are also 
		convenient and readily available with eateries, banks, shopping malls and public transport located nearby the college in the Georgetown heritage zone.</p>
		
		<p class="main">SEGi College offers programmes in American Degree, Information Technology, Engineering, Allied Health Sciences, Business & Accountancy, Hospitality & 
		Tourism, Early Childhood Education, as well as postgraduate programmes. There are also a variety of activities organised by student clubs and societies in the college.</p>
		<br><br>
		
		<center><font color="#336699"><h1>Other SEGi College Locations<h1></font></center>
		<center><p>SEGi College Kuala Lumpur | SEGi College Subang Jaya | SEGi College Penang | SEGi College Sarawak</p></center>
		<br><br>
		
		<center><font color="#336699"><h1>SEGi College Facility<h1></font></center>
		<div class="facility">
			<img src="Images/Segi_Facility.png" style="width:100%">
			<div class="content">
				<p>Lecture Room</p>
			</div>
		</div>
		
		<div class="facility">
			<img src="Images/Segi_Facility1.png" style="width:100%">
			<div class="content">
				<p>Lecture Hall</p>
			</div>
		</div>
		
		<div class="facility">
			<img src="Images/Segi_Facility2.png" style="width:100%">
			<div class="content">
				<p>IT Lab</p>
			</div>
		</div>
		
		<div class="facility">
			<img src="Images/Segi_Facility3.png" style="width:100%">
			<div class="content">
				<p>Library</p>
			</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		
		<center><font color="#336699"><h1>SEGi SCHOLARSHIP<h1></font></center>
		<center><p>SEGi has a wide range of scholarships to reward you for your achievements. Pursuing further studies and achieving your dreams are now made possible.</p></center>
		<div class="clearfix">
			<div class="box" style="background-color:#bbb">
				<font color="#336699"><h3>HIGH ACHIEVER’S SCHOLARSHIP</h3></font>
				<p>*High Achiever’s Scholarship (HAS) rewards young people with excellent academic results, with up to full scholarship on tuition fees available.</p>
			</div>
			<div class="box" style="background-color:#ccc">
				<font color="#336699"><h3>SPORTS SCHOLARSHIP</h3></font>
				<p>Especially tailored for the talented Malaysian athletes who are represent the State or the Nation at sporting events.</p>
			</div>
			<div class="box" style="background-color:#ddd">
				<font color="#336699"><h3>ACE SCHOLARSHIP</h3></font>
				<p>*The SEGi ACE Scholarship rewards applicants with RM500 rebate for every distinction earned for SPM / O Levels / SPTM / A-Levels / UEC.</p>
			</div>
		</div>
		<br><br>
		
		<center><font color="#336699"><h1>SEGi PROGRAMMES</h1></font></center>
		<p class="main1">SEGi offers a wide range of programmes to bring out the best qualities in our students. We strive to enrich the minds of our students by providing top-notch 
		education and ensuring we provide a holistic experience to cherish for life.</p>
		
		<a href="Review.php">
		<div class="card">
			<div class="button">
				<div class="header0">
					<h4>BA (Hons) Accounting and Finance (3+0) in collaboration with University of Hertfordshire, UK</h4>
				</div>
				<div class="container1">
					<p>This BA Accounting programme provides students with in depth coverage of accounting and finance knowledge and skills to prepare them to be professional 
					accountants.</p>
					<p>Degree | Full Time | 3 Years | RM39,322</p>
				</div>
			</div>
		</div>
		</a>
		
		<a href="Review.php">
		<div class="card">
			<div class="button">
				<div class="header1">
					<h4>3+0 Bachelor of Science (Hons) in Computer Science in collaboration with Coventry University</h4>
				</div>
				<div class="container1">
					<p>Computer science exposes the heart and soul of almost all technology we rely on the modern world. It introduces many of the most powerful problem-solving 
					strategies known to mankind.</p>
					<p>Degree | Full Time | 3 Years | RM48,940</p>
				</div>
			</div>
		</div>
		</a>
		
		<a href="Review.php">
		<div class="card">
			<div class="button">
				<div class="header2">
					<h4>Bachelor of Business (Hons) Business Management – Learning Simplified</h4>
				</div>
				<div class="container1">
					<p>The Business Management Learning provides students with practical and applied knowledge and skills required to manage organizational development 
					functions within workplace.</p>
					<p>Degree | Full Time | 3 Years | RM38,994</p>
				</div>
			</div>
		</div>
		</a>
		
		<a href="Review.php">
		<div class="card1">
			<div class="button">
				<div class="header0">
					<h4>Bachelor of Commerce (Accountancy) in Collaboration with University of Wollongong, Australia</h4>
				</div>
				<div class="container1">
					<p>This degree covers the basic principles of business theory and practice. Students may complete the Bachelor of Commerce with a single major, a double major 
					or a major + minor.</p>
					<p>Degree | Full Time | 3 Years | RM46,460</p>
				</div>
			</div>
		</div>
		</a>
		
		<a href="Review.php">
		<div class="card1">
			<div class="button">
				<div class="header1">
					<h4>3+0 Bachelor of Science (Hons) in Computing in collaboration with Coventry University</h4>
				</div>
				<div class="container1">
					<p>The course has been designed to provide you with the key knowledge and skills required to find employment in a wide range of technology related areas - from 
					systems analysis.</p>
					<p>Degree | Full Time | 3 Years | RM48,940</p>
				</div>
			</div>
		</div>
		</a>
		
		<a href="Review.php">
		<div class="card1">
			<div class="button">
				<div class="header2">
					<h4>BA (Hons) Business Administration (3+0) in Collaboration with University of Hertfordshire, UK</h4>
				</div>
				<div class="container1">
					<p>Behavioral and quantitative sciences are studied, with a foundation in Business. This degree offers a sound foundation in business and the disciplines which 
					underpin it.</p>
					<p>Degree | Full Time | 3 Years | RM49,335</p>
				</div>
			</div>
		</div>
		</a>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
                    Website designed by PHP Team 12
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>