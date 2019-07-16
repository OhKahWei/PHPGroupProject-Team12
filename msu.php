<!DOCTYPE html>
<html lang="en">
<head>
    <title>MSU College</title>
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
p{
    line-height: 1.6;
}
h2{
    padding: 10px;
	background: linear-gradient(to bottom right, #f5f5f0 0%, #d6d6c2 100%);
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
	border-collapse: collapse;
	width: 100%;
}

td, th {
	text-align: left;
	padding: 8px;
}

tr:nth-child(even) {
	background-color: #dddddd;
}

div.gallery {
	margin: 15px;
	border: 1px solid #ccc;
	float: left;
	width: 180px;
	transition: 0.2s;
}

div.gallery:hover {
	background: linear-gradient(to bottom left, #5e0808 0%, #ff0000 100%);
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
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){
	background-color: #f2f2f2;
}

#customers tr:hover {
	background-color: #ddd;
}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #D0CFCF;
  color: white;
}

button.review{
	background-color: #0099ff;
	color: white;
	font-size: 12px;
	text-align: center;
	padding: 15px;
	border: none;
}

button.review:hover{
	background: linear-gradient(to bottom left, #5e0808 0%, #ff0000 100%);
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
    <div class = "image">
        <img src = "images/msu.jpg" alt = "MSU College" width = "100%">
    </div>   
	
	<div id = "wrapper">
	
	    <div id = "first">
            <b>OVERVIEW</b>
        </div>

        <div id = "second">
	            <table>
                    <tr>
                        <td><b>Campus setting</b></td>
                        <td>Urban</td>
                    </tr>
                    <tr>
                        <td><b>Living cost</b></td>
                        <td>RM1,500 per month</td>
                    </tr>
                    <tr>
                        <td><b>Student population</b></td>
                        <td>Medium(1,001 to 10000)</td>
                    </tr>
                    <tr>
                        <td><b>International students</b></td>
                        <td>20%</td>
                    </tr>
                    <tr>
                        <td><b>Instituition type</b></td>
                        <td>Private</td>
                    </tr>
                </table>  
				
				<br>
				<b>&nbsp;&nbsp;Brances:</b>
				<p>&nbsp;&nbsp;Shah Alam | Kota Bharu | Penang |</p>
				<p>&nbsp;&nbsp;Sabah | Sarawak | Seremban |</p>
				<p>&nbsp;&nbsp;Sungai Petani | Terengganu | Ipoh | Johor Bahru</p>
				
        </div>
		
	</div>
	
	<br>
	
	<div class = "aboutMSU">
	    <h2>About MSU (Management & Science University)</h2>
		<center><img src = "images/msuCollege.png" alt = "MSU college"></center>
		<article>
		    <p>Over three exciting decades have gone by and MSU is privileged to play its role in the development of human capital needs at the local and international levels. 
			   The challenges over the years have made us more resolute in our journey towards providing you with the best in higher education.</p>
			<p>The thirty years have also seen ourselves grew from just a college to a Tier 5 Excellence rated University. 
			   This rating, accorded twice to MSU by the Ministry of Higher Education of Malaysia has helped propelled MSU to be as one of Malaysia’s best. 
			   Our achievements are aligned to our objective of providing a quality driven education and learning experiences that will help shape your future.</p>
			<p>At MSU, we give priority to our graduates employability, as such our focus on the industry relevant courses and ensuring that these courses meet current trends dictate much of what we have to offer students. 
			   Specialisations in Medicine, Health and Life Science, Nursing, Pharmacy, Business, Management, Accounting, Hospitality, Law, Computer Technologies and Engineering have complemented the marketability and the employability of our graduates.</p>
		    <p>A complete learning experience goes beyond academic achievements. 
			   Relevant personal enhancement experiences are also equally important as we mould our graduates to be competent professionals.</p>
			<p>Be a part of our self­enhancement activities aimed towards nurturing your soft­skills attributes. 
			   From a range of community engagement efforts to activities aimed towards appreciating and preserving the environment, you will somehow find something to be engaged in while at MSU.</p>
		</article>
	</div>
	
	<div class = "campusInformation">
	    <br><br>
	    <h2>Campus Information</h2>
		<article>
		    <p>The first phase academic block and the second phase management tower completed respectively in 2010 and 2011. 
			   Both phrases provide over 1.4 million square feet of floor space making MSU as one of the largest private universities in Malaysia. 
			   Currently ongoing, is the completion of the campus third phase which coprise of the Medical Centre and the Students Village.</p>
		    <p>The campus promotes easy mobility among students / staff and it is designed to complement the University's vibrant life-style. 
			   At the hub, is the university's main thoroughfare - the U-Plaza - which is an area dedicated for myriad range of students activities. 
			   Flanking one side of the U-Plaza are the commercial outlets where students get to apply their entrepreneurial know-how on various commercial endeavours. </p>
		    <br>

			<p><b>FACULTIES IN MSU:</b></p>

			<br>
			<p><b>Faculty of Information Science & Engineering</b></p>
			<p>This faculty comprises of three departments which are the Departments of Information Science and Computing, the Department of Media Science and Graphic, and the Department of Engineering and Technology. 
			   Among some of the facilities available here are:</p>
		    <br>
			
			<div class="gallery">
				<a target="_blank" href="imacLab.jpg">
					<img src="images/imacLab.jpg" alt="iMac Lab" width="600" height="400">
				</a>
				<div class="desc">iMac Lab</div>
			</div>

			<div class="gallery">
				<a target="_blank" href="contolLab.jpg">
					<img src="images/contolLab.jpg" alt="Control Lab" width="600" height="400">
				</a>
				<div class="desc">Control Lab</div>
			</div>
			<div class="gallery">
				<a target="_blank" href="electriLab.jpg">
					<img src="images/electriLab.jpg" alt="Electrical Lab" width="600" height="400">
				</a>
				<div class="desc">Electrical Lab Lab</div>
			</div>

			<div class="gallery">
				<a target="_blank" href="serverRoom.jpg">
					<img src="images/serverRoom.jpg" alt="Server Room" width="600" height="400">
				</a>
				<div class="desc">Server Room</div>
			</div>
			<div class="gallery">
				<a target="_blank" href="multimediaStudio.jpg">
					<img src="images/multimediaStudio.jpg" alt="Multimedia Studio" width="600" height="400">
				</a>
				<div class="desc">Multimedia Studio</div>
			</div>
			
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<p><b>Faculty of Health & Life Sciences</b></p>
			<p>This faculty comprises of four departments - Department of Health Science, Department of Health Professional & Food Services, Department of Optometry & Visual Sciences and Department of Nursing - and host diverse range of research activities. 
			   All the programmes offered represent areas where most significant advances are taking place and provide graduates with the essential skills and knowledge for the professional career pathways in healthcare industry. 
			   Among some of the facilities available here are:</p>
			   
			<div class="gallery">
				<a target="_blank" href="bioChemistry.jpg">
					<img src="images/bioChemistry.jpg" alt="Biochemistry Lab" width="600" height="400">
				</a>
				<div class="desc">Biochemistry Lab</div>
			</div>

			<div class="gallery">
				<a target="_blank" href="chemistry.jpg">
					<img src="images/chemistry.jpg" alt="Chemistry Lab" width="600" height="400">
				</a>
				<div class="desc">Chemistry Lab</div>
			</div>
			<div class="gallery">
				<a target="_blank" href="phys.jpg">
					<img src="images/phys.jpg" alt="Physiology Lab" width="600" height="400">
				</a>
				<div class="desc">Physiology Lab</div>
			</div>

			<div class="gallery">
				<a target="_blank" href="serverRoom.jpg">
					<img src="images/serverRoom.jpg" alt="Server Room" width="600" height="400">
				</a>
				<div class="desc">Server Room</div>
			</div>
			<div class="gallery">
				<a target="_blank" href="longLab.jpg">
					<img src="images/longLab.jpg" alt="Haematology & Immunology Lab" width="600" height="400">
				</a>
				<div class="desc">Haematology & Immunology Lab</div>
			</div>

			<div class="gallery">
				<a target="_blank" href="pathology.jpg">
					<img src="images/pathology.jpg" alt="Pathology Lab" width="600" height="400">
				</a>
				<div class="desc">Pathology Lab</div>
			</div>
			   
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<p><b>Faculty of Business Management and Professional Studies</b></p>
			<p>The faculty comprises of two departments which are Department of Business Management and Department of Accounting and Finance. 
			   Our quality academic programmes and industry-based learning aim to provide the students with an excellent platform to master the skills needed in the volatile international and local business arena. </p>
			
            <br>			
			<p><b>School of Hospitality and Creative Arts</b></p>
			<p>This school offers programmes in hospitality and creative arts are offered with a strong practical and industry focus. 
			   SHCA boasts excellent training facilities such an on-campus professional kitchen, a fashion hallway, a travel agency, a spa, and a beauty outlet. </p>
			<p>The MSU  campus is lodge between the Damansara River and the Elite Highway in Section 13 Shah Alam is a manifestation of a progressive vision and iconic presence.</p>
		</article>
	</div>
	
	<div class = "accomodation">
	    <br>
	    <h2>Accomodation</h2>
		<p>Living in university accommodation is a fantastic way to start your student life and make new friends quickly.</p>
		<p>MSU offer a wide range of accommodation with something to suit everyone’s budget. 
		   We offer an excellent choice depending on your requirements - there are apartment style accommodations and as well as condominium style accommodations that will suite with your needs and requirements.</p>
		<p>Most of our accommodation is within walking distance of the campus but transportation will be arranged for accommodations that are slightly away from MSU.</p>
	</div>
	
	<div class = "additionalInfo">
	    <article>
		    <br>
		    <h2>Additional Information</h2>
	        <p><b>TOWARDS BEING CITIZENS AT MSU</b></p>
		    <p>Management and Science University is a global university that emphasizes the success of its graduates, both in academic excellence and soft skills in order to produce a holistic, balanced and well-rounded graduate.</p>
		    <p>The moment you step into the MSU campus, you will experience the dynamic cultural diversity that is felt all around. 
		       Our students bring life into the overall vibrancy on site, with their combination of personalities and lifestyles. 
		       Their different racial or academic backgrounds and experiences, add unique features of the university, where individual growth and communication are leveraged.</p>
	        <br>
		    <p><b>MOBILITY</b></p>
		    <p>Our international students from over 40 countries worldwide also add to this existing cultural diversity and you can anticipate the interesting campus life activities, where cultures and customs collide. 
			   Our students are given opportunities to gain international exposure while they study here. 
			   Similarly, international students planning for a shorter period of time can also come to experience the global mobility program we offer.</p>
		    <p>The Global Mobility Program (GMP), Global Leadership Program (GLP) and Global Internship Program (GIP) allow students to empower their global experience with MSU university partners around the world such as the UK, Australia, Japan, Korea, Hong Kong, China, Indonesia, Brunei, Sri Lanka, India, Pakistan and more as their hub for knowledge.</p>
		    <p>The participation of students in these programs strengthens their appreciation for social and cultural uniqueness, information sharing and skills, learning and teaching systems, collaborative networks, new partners, community service and as a 'small ambassador' of the State.</p>
		    <br>
			<p><b>STUDENT SUPPORT</b></p>
			<p>In MSU, the International Student Society supports all international students and activities such as:</p>
			<ul>
			    <li>Facilitates new students during registration</li>
				<li>Assists international students to get adjusted in the new environment</li>
				<li>Organizes activities that celebrate diversity and cultures across countries</li>
				<li>Supports students’ needs around the campus</li>
				<li>Disseminates relevant information where necessary</li>
			</ul>
			<p>There is a place for everyone at MSU, where education is offered through an entry system that facilitates admission from all walks of life, locally and internationally. 
			   We are committed to providing the journey that will help to transform lives and enriching the future for all.</p>
			<p>We look foward to having you at MSU!</p>
		</article>
	</div>
	
	<br>
	
	<h2>Courses Available</h2>
	
	<div class = "courses">
		
		<h3>Computer Science, Information Technology</h3>
		<table id="customers">
			<tr>
				<th>Courses</th>
				<th>Qualification</th>
				<th>Study mode</th>
				<th>Duration</th>
				<th>Fee</th>
			</tr>
			<tr>
				<td>Diploma in Information Technology</td>
				<td>Diploma</td>
				<td>Full Time</td>
				<td>2.5 years</td>
				<td>RM25000</td>
			</tr>
			<tr>
				<td>Diploma in Information Technology(Mobile and Wireless Technology)</td>
				<td>Diploma</td>
				<td>Full Time</td>
				<td>2.5 years</td>
				<td>RM25000</td>
			</tr>
			<tr>
				<td>Bachelor in Computer Science (Hons)</td>
				<td>Bachelor</td>
				<td>Full Time</td>
				<td>3 years</td>
				<td>RM45000</td>
			</tr>
		</table>

		<br><br><br>

		<h3>Accounting & Finance</h3>
		<table id="customers">
		  <tr>
			<th>Courses</th> 
			<th>Qualification</th> 
			<th>Study mode</th> 
			<th>Duration</th> 
			<th>Fee</th>
		  </tr>
		  <tr>
			<td>Diploma in Management</td>
			<td>Diploma</td>
			<td>Full Time</td>
			<td>2.5 years</td>
			<td>RM30000</td>
		  </tr>
		  <tr>
			<td>Bachelor in Marketing with Psychology (Hons)</td>
			<td>Bachelor</td>
			<td>Full Time</td>
			<td>3 years</td>
			<td>RM45000</td>
		  </tr>
		  <tr>
			<td>Diploma in Accounting</td>
			<td>Diploma</td>
			<td>Full Time</td>
			<td>2.5 years</td>
			<td>RM25000</td>
		  </tr>
		</table>

		<br><br><br>

		<h3>Business Management</h3>
		<table id="customers">
		  <tr>
			<th>Courses</th> 
			<th>Qualification</th> 
			<th>Study mode</th> 
			<th>Duration</th> 
			<th>Fee</th>
		  </tr>
		  <tr>
			<td>Diploma in Entrepreneurship</td>
			<td>Diploma</td>
			<td>Full Time</td>
			<td>2.5 years</td>
			<td>RM30000</td>
		  </tr>
		  <tr>
			<td>Bachelor in Entrepreneurship (Honours)</td>
			<td>Bachelor</td>
			<td>Full Time</td>
			<td>3.5 years</td>
			<td>RM55000</td>
		  </tr>
		  <tr>
			<td>Diploma in Business Computing</td>
			<td>Diploma</td>
			<td>Full Time</td>
			<td>2.5 years</td>
			<td>RM25000</td>
		  </tr>
		</table>

	</div>
	
	<br><br><br>
	
 <div class="w3-container">
 <a href="review.php" class="button">Review</a>
</div>
</div>

</body>
</html>