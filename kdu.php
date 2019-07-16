<html>
<head>
    <title>KDU College</title>
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
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script src="js/camera.js"></script>
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
	</head>
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

p{
    line-height: 1.6;
}

h2{
    padding: 10px;
	background: linear-gradient(to bottom right, #808080 0%, #808080 100%);
}


#wrapper {
    margin: 10px;
    width: 100%
    border: 2px solid blue;
	overflow: hidden; /* add this to contain floated children */
}
#first {
    float:left; /* add this */
    width: 50%;
	height: 400px;
    background: linear-gradient(to bottom left, #5e0808 0%, #ff0000 100%);
	color: white;
	font-size: 50px;
	text-align: center;
    vertical-align: middle;
    line-height: 400px;
}
#second {
    float: left; /* add this */
	width: 50%;
	height: 400px;
    background: #f5f5f0;
}


table {
	border-collapse: collapse;
	width: 100%;
}

td, th {
	text-align: left;
	padding: 8px;
}

tr:nth-child(even) {
	background-color: #D0CFCF;
}

div.gallery {
	margin: 15px;
	border: 1px solid #ccc;
	float: center;
	width: 180px;
	transition: 0.2s;
}

div.gallery:hover {
	background: linear-gradient(center, #5e0808 0%, #ff0000 100%);
	color: white;
	border: 2px solid black;
}

div.gallery img {
	width: 100%;
	height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

#customers {
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #808080;
  padding: 8px;
}

#customers tr:nth-child(even){
	background-color: #f;
}

#customers tr:hover {
	background-color: #808080;
}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #808080;
  color: white;
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

</style>
</head>
<body>
<div class="page">
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
    <div class="image">
        <img src="images/logo1.jpg" alt="KDU College">
    </div>
		<div id="wrapper">
	


        <div id="second">
	            <table>
                    <tbody><tr>
                        <td><b>Campus setting</b></td>
                        <td>Urban</td>
                    </tr>
                    <tr>
                        <td><b>Living cost</b></td>
                        <td>RM1,200 per month</td>
                    </tr>
                    <tr>
                        <td><b>Student population</b></td>
                        <td>Medium(1,001 to 10000)</td>
                    </tr>
                    <tr>
                        <td><b>International students</b></td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td><b>Instituition type</b></td>
                        <td>Private</td>
                    </tr>
                </tbody></table>  
				
				<b>&nbsp;&nbsp;Brances:</b>
				<p>&nbsp;&nbsp;Shah Alam | Kota Bharu | Penang |</p>
				<p>&nbsp;&nbsp;Sabah | Sarawak | Seremban |</p>
				<p>&nbsp;&nbsp;Sungai Petani | Terengganu | Ipoh | Johor Bahru</p>
				
        </div>
		
	</div>
		<div class="aboutMSU">
	    <h2>About KDU University College - Penang Campus</h2>

		<article>
		    KDU College Penang is an integral part of Paramount Education, a pioneer in private tertiary education in Malaysia since 1983. Paramount Education offers the full spectrum of education services and today, is recognised for its high-quality, good-value education with an ethos of letting every student shine.

KDU College Penang offers various internationally recognised industry-driven academic programmes, from Certificate to Diploma and Degree levels. All the programmes are affiliated with top universities from around the world including Keele University and Northumbria University from United Kingdom and Swiss IMI, Switzerland.

Since its establishment in 1991, KDU College Penang has produced more than 18,000 alumni from 64 countries around the world. 
		</article>
	</div>
	<br>

<h2>Campus information</h2>
<article>KDU College Penang was established in 1991 in the historic Old Town Hall. In 1997, it moved to a RM20-million purpose-built campus in Jalan Anson because of the growth in the student's population. It is equipped with the best facilities, which includes industry-standard kitchens, recording studio, art gallery, design studios, engineering laboratories, computing design laboratories, boardroom and lounge, mock-up hotel suite and restaurants. The campus is also Wi-Fi enabled. There are also spaces for relaxing and casual discussions. There is also a gym, pool table and cafeteria serving hot food, snacks and beverages.

KDU College Penang is located strategically in the heart of George Town that is easily accessible. It is only a walking distance to various conveniences such as dining outlets, hypermarket and hospitals.</article>

<h2>Accommodation</h2>
KDU College Penang students have various choices of accommodation that is located nearby the college. Most double-storey houses and apartments are fully furnished and are within walking distance to the college. The Student Service Department (SSD) wilol help to assist students who prefer alternative arrangements by sourcing for suitable housing options.

KDU Standard Hostel (Wisma Duke, Desa Samudra, Tanjung Pura, Damai Villa & Bangunan Anson)
(Available for male & female)

Wisma Duke is located at Jalan Solok Larut. It is around 10 minutes walking distance to the campus. There are various choices of eateries and convenience stores that are located nearby Wisma Duke. The hostel is complete with basic amenities, cooking stove, water heater and washing machine.

Tanjung Pura is located at Jalan Logan. It is a 10 minutes walking distance from the hostel to the campus. Like most hostels, it is surrounded with various eateries and convenience stores. This hostel is complete with basic amenities, cooking stove, water heater and washing machine.

Located along Jalan Logan, Desa Samudra and Damai Villa, is also a 10 minutes walking distance to the campus. Like all the hostels at Jalan Logan,it is furnished with basic amenities, washing machine, cooking stove and water heater. 

 
<ul>
<br>

<h4>Single Room</h4>

<li>1 single bed with mattress</li>
<li>1 wardrobe</li>
<li>1 locker</li>
<li>1 set study table with chair</li>
<li>RM 1905 per term (air conditioned)</li>
<li>RM 1500 per term (non air conditioned)</li>
<br>
<h4>Double Deluxe Room</h4>

Each student will be provided with:
<li>1 single bed with mattress</li>
<li>1 wardrobe</li>
<li>1 shared locker</li>
<li>1 set study table with chair</li>
<li>RM 1950 per term (air conditioned)</li>
<li>RM 1575 per term (non air conditioned)</li>
<li>Attached bathroom</li>
<br>
<h4>Double Superior Room</h4>

Each student will be provided with:
<li>1 single bed with mattress</li>
<li>1 shared wardrobe</li>
<li>1 shared locker</li>
<li>1 set study table with chair</li>
<li>RM 1650 per term (air conditioned)</li>
<li>RM 1305 per term (non air conditioned)</li>
<br>
<h4>Double Standard Room</h4>

<li>Double decker bed with mattresses</li>
<li>1 shared wardrobe</li>
<li>1 shared locker</li>
<li>1 set study table with chair for each student</li>
<li>RM 1455 per term (air conditioned)</li>
<li>RM 1200 per term (non air conditioned)</li>
<br>
<h4>Triple Room</h4>

<li>1 single bed with mattress</li>
<li>1 double decker bed with mattress</li>
<li>1 shared locker</li>
<li>Foldable study table</li>
<li>RM 1305 per term (air conditioned)</li>
<li>RM 1050 per term (non air conditioned)</li>
<br>
<h4>Quad Room</h4>

<li>Double decker bed with mattress</li>
<li>Shared wardrobe</li>
<li>Shared locker</li>
<li>Foldable study table</li>
<li>RM 1200 per term (air conditioned)</li>
<li>RM 960 per term (non air conditioned)</li>
<h4>KDU Standard Hostel Medan Lumba Kuda
<br>
(Available for male & female)</h4>

<li>Quiet, clean and conductive environment for studying.</li>
<li>Shuttle van will ferry residents to shopping center on Saturdays.</li>
<li>Facilities provided includes:</li>
<li>WiFi</li>
<li>24 hours security guard</li>
<li>shuttle van service</li>
<li>washing machine</li>
<li>Common Area</li>
<li>Dining Area</li>
<li>Kitchen</li>
<br>
<h4>Double Superior Room</h4>

<li>2 single bed with mattress</li>
<li>2 wardrobes</li>
<li>2 sets of study tables with chairs</li>
<li>RM 1650 per term (air conditioned)</li>
<br>
<h4>Double Standard Room</h4>

<li>1 double decker bed with mattress</li>
<li>2 wardrobes</li>
<li>2 sets of study tables with chairs</li>
<li>RM 1455 per term (air conditioner)</li>
<li>RM 1200 per term (non air conditioned)</li>
<br>
<h4>KDU Premium Hostel </h4>
<h4>Female only</h4>

<li>Facilities includes:</li>
<li>laundry room</li>
<li>study room</li>
<li>24 hours security service</li>
<li>Wifi</li>
<li>dry & wet kitchen</li>
<li>vending machine</li>
<li>TV lounge</li>
<li>Located along Jalan Sim Bee, 10 minutes walking distance to campus.</li>
<li>Quiet and safe surrounding.</li>
<br>
<h4>Common Area:</h4>

<li>Waiting area for parents/guardians to wait.</li>
<li>TV lounge & laundry room are located at the ground floor.</li>
<li>All hostel residents can use the air conditioned study room</li>
<li>Kitchen is on the ground floor. Refrigerators & microwaves are divided into for halal use and non-halal use. </li>
Unit Features:

<li>Each unit have a living room.</li>
<li>Intercom connected to the guard post and warden office.</li>
<li>Each unit have a dry kitchen. </li>
<li>2 bathrooms in each apartment unit. One for the master bedroom. One is the common toilet for the residents of the other rooms.  All bathrooms are equipped with water heater.</li>
<br>
<h4>Single Room</h4>

<li>1 single bed with mattress</li>
<li>1 wardrobe</li>
<li>1 locker</li>
<li>1 set of study table with chair</li>
<li>RM 2100 per term (air conditioned)</li>
<li>RM 1800 per term (non air conditioned)</li>
<br>
<h4>Double Deluxe Room</h4>

<li>Each student will be provided with:</li>
<li>1 single bed with mattress</li>
<li>1 wardrobe</li>
<li>1 shared locker</li>
<li>1 set study table with chair</li>
<li>RM 2055 per term (air conditioned)</li>
<li>RM 1650 per term (non air conditioned)</li>
<br>
<h4>Double Superior Room</h4>

<li>Each student will be provided with:</li>
<li>1 single bed with mattress</li>
<li>1 shared wardrobe</li>
<li>1 shared locker</li>
<li>1 set study table with chair</li>
<li>RM 1800 per term (air conditioned)</li>
<li>Rm 1455 per term (non air conditioned)</li>
<br>
<h4>Double Standard Room</h4>

<li>Double decker bed with mattresses</li>
<li>1 shared wardrobe</li>
<li>1 shared locker</li>
<li>1 set study table with chair for each students</li>
<li>Rm 1605 per term (air conditioned)</li>
<li>RM 1350 per term (non air conditioned)</li>
<br>
<h4>Triple Room</h4>

<li>1 single bed with mattress</li>
<li>1 double decker bed with mattresses</li>
<li>1 shared locker</li>
<li>Foldable study table</li>
<li>RM 1455 per term (air conditioned)</li>
<li>RM 1200 per term (non air conditioned)</li>
<br>
<h4>Quad Room</h4>

<li>Double decker bed with mattresses</li>
<li>Shared wardrobe</li>
<li>Shared locker</li>
<li>Foldable study table</li>
<li>RM 1350 per term (air conditioned)</li>
<li>RM 1110 per term (non air conditioned)</li>
</ul>
<div class="courses">
		
		<h2>Courses</h2>
		<h3>Computer Science, Information Technology</h3>
		<table id="customers">
			<tbody><tr>
				<th>Courses</th>
				<th>Qualification</th>
				<th>Study mode</th>
				<th>Duration</th>
				<th>Fee</th>
			</tr>
			<tr>
			    <td>Foundation In Science</td>
				<td>Foundation</td>
				<td>Full Time</td>
				<td>1 year</td>
				<td>RM 13290</td>
			</tr>
			<tr>
			    <td>Foundation In Arts</td>
				<td>Foundation</td>
				<td>Full Time</td>
				<td>1 year</td>
				<td>RM13290</td>
			</tr>
			<tr>
			    <td>Diploma In Digital Animation</td>
				<td>Diploma</td>
				<td>Full Time</td>
				<td>2.5 years</td>
				<td>RM47625</td>
			</tr>			
			<tr>
			    <td>Diploma In Computer Studies</td>
				<td>Diploma</td>
				<td>Full Time</td>
				<td>2 years 4 months</td>
				<td>RM34898</td>
			</tr>			
			<tr>
			    <td>Bachelor Of Computer Science</td>
				<td>Bachelor</td>
				<td>Full Time</td>
				<td>3 years</td>
				<td>Single Award- RM48010
				    Dual Award  - RM60468</td>
			</tr>			
			<tr>
			    <td>Bachelor Of Computer Science In Computer And Network Technology</td>
				<td>Bachelor</td>
				<td>Full Time</td>
				<td>3 years</td>
				<td>Single Award - RM49490
                    Dual Award   - RM61940</td>
			</tr>			
			<tr>
			    <td>Bachelor Of Information Systems</td>
				<td>Bachelor</td>
				<td>Full Time</td>
				<td>3 years</td>
				<td>Single Award - RM49122
                    Dual Award   - RM61572</td>
			</tr>
			<tr>
				<td>Master in Computer Science</td>
				<td>Master</td>
				<td>Full Time</td>
				<td>2 - 4 years (FT)
                    3 - 6 years (PT)</td>
				<td>RM19,700 (FT - Local)
                    RM24,100 (PT - Local)
                    RM25,950 (FT - International)</td>
			</tr>
			<tr>
				<td>Master of Business Administration Specialisation in Business Analytics</td>
				<td>Master</td>
				<td>Full Time</td>
				<td>1 year (FT)
                    2 years (PT)</td>
				<td>RM24,000 (FT & PT - Local)
                    RM32,000 (International)</td>
			</tr>
			<tr>
				<td>Doctor of Philosophy(Computer Science)</td>
				<td>PHD</td>
				<td>Full Time</td>
				<td>3 - 6 years (FT)
                    4 - 8 years (PT)</td>
				<td>RM29,300 (FT - Local)
                    RM33,100 (PT - Local)
                    RM35,550 (FT - International)</td>
			</tr>
		</tbody></table>

		<br><br><br>

		<h3>Accounting &amp; Finance</h3>
		<table id="customers">
		  <tbody><tr>
			<th>Courses</th> 
			<th>Qualification</th> 
			<th>Study mode</th> 
			<th>Duration</th> 
			<th>Fee</th>
		  </tr>
		  <tr>
			<td>Foundation in Arts</td>
			<td>Foundation</td>
			<td>Full Time</td>
			<td>1 year</td>
			<td>RM13290</td>
		  </tr>
		  <tr>
			<td>Diploma in Accounting</td>
			<td>Diploma</td>
			<td>Full Time</td>
			<td>2 years</td>
			<td>RM30600</td>
		  </tr>
		  <tr>
			<td>Bachelor Of Accountancy(HONS)</td>
			<td>Bachelor</td>
			<td>Full Time</td>
			<td>3.5 years</td>
			<td>Single Award - RM51860
                Dual Award   - RM64310</td>
		  </tr>
		</tbody></table>

		<br><br><br>

		<h3>Business Management</h3>
		<table id="customers">
		  <tbody><tr>
			<th>Courses</th> 
			<th>Qualification</th> 
			<th>Study mode</th> 
			<th>Duration</th> 
			<th>Fee</th>
		  </tr>
		  <tr>
			<td>Foundation in Arts</td>
			<td>Foundation</td>
			<td>Full Time</td>
			<td>1 year</td>
			<td>RM13290</td>
		  </tr>		  
		  <tr>
			<td>Diploma in Business</td>
			<td>Diploma</td>
			<td>Full Time</td>
			<td>2 years</td>
			<td>RM30300</td>
		  </tr>
		  <tr>
			<td>BA(HONS) Business Management</td>
			<td>Bachelor</td>
			<td>Full Time</td>
			<td>3 years</td>
			<td>Single Award - RM50350
                Dual Award   - RM62800</td>
		  </tr>
		  <tr>
			<td>Master of Business</td>
			<td>Master</td>
			<td>Full Time</td>
			<td>2 - 4 years (FT)
                3 - 8 years (PT)</td>
			<td>RM19,700 (FT - Local)
                RM24,100 (PT - Local)
                RM25,950 (FT - International)</td>
		  </tr>
		  <tr>
			<td>Master of Business Administration Specialisation In Business Analytics</td>
			<td>Master</td>
			<td>Full Time</td>
			<td>1 year (FT)
                2 years (PT)</td>
			<td>RM24,000 (FT & PT - Local)
                RM32,000 (International)</td>
		  </tr>
		  <tr>
			<td>Master of Business Administration Specialisation In Management</td>
			<td>Master</td>
			<td>Full Time</td>
			<td>1 year (FT)
                2 years (PT)</td>
			<td>RM24,000 (FT & PT - Local)
                RM32,000 (International)</td>
		  </tr>
		  <tr>
			<td>Doctor of Philosophy(Business)</td>
			<td>PHD</td>
			<td>Full Time</td>
			<td>3 - 6 years (FT)
                4 - 8 years (PT)</td>
			<td>RM29300 (FT - Local)
                RM33100 (PT - Local)
                RM35550 (FT - International)</td>
		  </tr>
		</tbody></table>
		<a href="review.php">Review</a></li>
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

	</body>
	</html>