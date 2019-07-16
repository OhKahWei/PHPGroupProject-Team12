<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/camera.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.equalheights.js"></script>

    <script src="js/jquery.mobile.customized.min.js"></script>

    <script src="js/camera.js"></script>
    <script src="js/owl.carousel.js"></script>
	
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
                            <li class="current"><a href="index.php">Home</a></li>
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
<div class="camera-wrapper">
    <div id="camera" class="camera-wrap">
        <div data-src="images/index_slide01.jpg">
            <div class="fadeIn camera_caption">
                <h2 class="text_1 color_1">About More College!</h2>
                <a class="btn_1" href="college.php">More info</a>
            </div>
        </div>
        <div data-src="images/index_slide02.jpg">
            <div class="fadeIn camera_caption">
                <h2 class="text_1 color_1">Rate / Review Us!</h2>
                <a class="btn_1" href="review.php">More info</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row wrap_1 wrap_5">
        <div class="grid_3">
            <div class="box_1">
                <div class="icon_1"></div>
                <h3 class="text_2 color_2 maxheight1"><a href="about.html"><font color = "red-violet">Budget Planning</font></a></h3>
                <p class="text_3 color_2 maxheight"><font color = "navy">
                    Finding a college which is not expensive? Check the colleges we have here for more info!
                </font></p>
                <a class="btn_2" href="college.php">Read More</a></div>
        </div>

        <div class="grid_3">
            <div class="box_1">
                <div class="icon_3"></div>
                <h3 class="text_2 color_2 maxheight1"><a href="#"><font color = "red-violet">About Us</font></a></h3>
                <p class="text_3 color_2 maxheight"><font color = "navy">
                    This is a website to help user who don't know which college is suitable for them.
                </font></p>
                <a class="btn_2" href="#">Read More</a></div>
        </div>
        <div class="grid_3">
            <div class="box_1">
                <div class="icon_4"></div>
                <h3 class="text_2 color_2 maxheight1"><a href="review.php"><font color = "red-violet">Rate / Review of the Colleges</font></a></h3>
                <p class="text_3 color_2 maxheight"><font color = "navy">
                    Rate or Review the college here!
                </font></p>
                <a class="btn_2" href="review.php">Read More</a></div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row wrap_1">
        <div class="grid_6">
            <div class="wrap_6">
                <div class="box_2 maxheight2">
                    <div class="put-left"><img src="images/index_img01.png" alt="Image 1"/></div>
                    <div class="caption">
                        <h3 class="text_2 color_2">
                            Save Your Time <br/>
                            with Us
                        </h3>
                        <p class="text_3">
                            Why does we say save more time? This is because user can straight searching the college information here and even
							compare the college here. Which save a lot of time for you to search it one by one on the website.
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="grid_6">
                <div class="wrap_6">
                    <div class="box_2 maxheight2">
                        <div class="put-left"><img src="images/index_img02.png" alt="Image 2"/></div>
                        <div class="caption">
                            <h3 class="text_2 color_2">
                                The Highest <br/>
                                Quality Services
                            </h3>
                            <p class="text_3">
                                Everything you need is all about here, the best services to help you go through
								all the trouble finding and compare other Colleges.
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
           
        </div>
    </div>
</div>
<div class="bg_1 wrap_7 wrap_5">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <h2 class="header_1 wrap_8 color_3">
                    What Users Say
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="grid_12">
                <div id="owl">
                    <div class="item">
                        <p class="text_3">
                            It's a good website, well-designed, and easy to let us search through the colleges we wanted to compare
							and even save us a lots of time. Easy to use and services are not too bad. Provided good information on all
							colleges. Completely save us lots of trouble and save more of our time.
                        </p>
                    </div>
                    <div class="item">
                        <p class="text_3">
                            There might be some error but it still work perfectly. One of the best website of colleges portal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                    <li><a class="fa fa-google-plus" href="ohkahwei@gmail.com"></a></li>
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
                    Website designed by PHP Team 12
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>