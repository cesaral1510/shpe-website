<!DOCTYPE? html>
<html>
	<head>
		<title>NJIT SHPE</title>
		<link rel="shortcut icon" href="images/images/favicon.ico" >
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="jscript.js"></script>
		<script type="text/javascript" src="Scripts/updateText.php"></script>
		<script type="text/javascript">

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-35750639-1']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>
	<body>
		<div id="vid"><iframe width="640" height="480" name="action" frameborder="0" ></iframe></div>
		<div id="inactive"></div>
		<div id="container">
			<div class="bar" id="nav">
				<?php
					session_start();
					$_SESSION['curr'] = 0;
					$display = include "Scripts/navBar.php";
					echo $display;
				?>
			</div><div class="bar" id="content"><div id="middle">
					<h1>Gala Banquet</h1>
					<h2>You're invited!</h2>
					<p>Join us on April 10, 2014 at 6PM for the 22nd Annual Gala Banquet held at Iberia's Tavern & Restaurant. We will honor the achievements of this past academic year's Executive Board and the corporate companies that have helped us through sponsorship, mentorship, and leading workshops. Enjoy a night of networking, food, awards, and dance as we induct the new Executive Board for the next academic year. Purchase your tickets today!
<br><br>
Interested in helping out? Join the Gala Banquet Committee today! Email <a href="mailto:vg88@njit.edu" target="_blank">vg88@njit.edu</a> for more information.</p>
				<table width="100%">
				<caption><h2>Admission</h2></caption>
				<tr width="50%">
					<td width="50%" style="padding:10px"> <center>Faculty/Staff</center>
					Individual. . . . . . . . . . . . . .<span style="float:right">$60</span><br>
					Table. . . . . . . . . . . . . . . . .<span style="float:right">$600</span>
					</td>
					<td width="50%" style="padding:10px"><center>Professionals</center>
					Professionals. . . . . . . . . . . . <span style="float:right">$60</span><br>
					Corporate Table. . . . . . .<span style="float:right">$600</span>
					</td>
				</tr>
				<tr width="50%">
					<td width="50%" style="padding:10px"><center>Students/Guests</center>
					Early Bird(Ends 3/14). . . . .<span style="float:right">$20</span><br>
					Standard. . . . . . . . . . . . . . .<span style="float:right">$30</span>
					</td>
					<td width="50%" style="padding:10px"><center>SHPE Jr. </center>
					Students. . . . . . . . . . . . . . <span style="float:right">FREE</span>
					Parents. . . . . . . . . . . . . . . . . <span style="float:right">$30</span>
					</td>
				</tr>
				</table>
				<h2>About our Keynote Speaker</h2>
				<img src="http://stemconnector.org/sites/default/files/100women_profiles/Pilar%20Montoya_small.jpg" align="right">
				<p>Pilar Montoya is the Chief Executive Office (CEO) of the Society of Hispanic Professional Engineers (SHPE), the premier national organization aimed at increasing the number of Hispanics contributing to the nation’s innovation and technology future. SHPE aims to motivate Hispanics to study and pursue careers in Science, Technology, Engineering and Math.
<br><br>
As the SHPE CEO, Montoya guides the organization’s operations, programming, education, member benefits, fundraising, marketing and government relations efforts nationally. Ms. Montoya leads the membership and the Foundation organization, managing the two organizations $6 million budget.
<br><br>
Since joining SHPE in September 2009, she has helped raise over $2 million dollars, has guided the organization in its transition from an all-volunteer structure to a business model and is currently undertaking the development of a five-year strategic plan, organization-wide financial plan, and IT systems plan.
<br><br>
Ms. Montoya brings over 25 years of business and financial management for private companies and non-profits. Prior to joining SHPE, Ms. Montoya led expansion efforts for a $580 million granting foundation in California. Ms. Montoya was also the Founder and President of a nationally acclaimed Hispanic Marketing agency with corporate, governmental and non-profit clients.Â  She was in the forefront of Hispanic marketing efforts managing accounts for companies such as Del Monte Foods, US Postal Service and California Five-A-Day.
<br><br>
Outside of her professional achievements, Montoya has been recognized as both a community and business leader in the Latino and business community. For her civic contributions, she was recognized with a California Assembly resolution for efforts with Latino youth, American Cancer Society volunteer award, and Child Abuse Prevention Council Volunteer of the Year Recognition.Â  Additionally she has received five advertising awards from Hispanic Business Managazine’s “Se Habla Espanol”, andbeen honored as a Business Person of the Year Award from the Sacramento Metropolitan Chamber of Commerce. Her efforts have also garnered volunteer awards from the Urban League, Chicano Latino Youth Leadership Conference, to name a few.
<br><br>
Ms. Montoya is the mother of two children, a daughter currently studying at Santa Monica College and her son, a producer at XX1090 in San Diego.</p>
				
				</div></div><div class="bar" id="sidebar">
				<div id="social">
					<ul>
						<li><a href="https://twitter.com/NJIT_SHPE" target="_blank"><img class="grayscale" src="Images/Twitter.png"></a></li><li><a href="https://www.facebook.com/groups/njitshpe/" target="_blank"><img class="grayscale" src="Images/Facebook.png"></a></li><li><a href="http://instagram.com/njitshpe" target="_blank"><img class="grayscale" src="Images/Instagram.png"></a></li><li><a href="http://www.youtube.com/user/NJITSHPE" target="_blank"><img class="grayscale" src="Images/Youtube.png"></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="footer">
			<div id="fwrap">
				<table width = "100%">
					<tr>
						<td width="67%">
							<h3>Latest Updates</h3>
							<?php
							require('Scripts/displayUpdates.php');
							?>
						</td>
						<td width="33%">
							<h3>General Info</h3>
							Office: Campus Center B10</br>
							Office Hours: <a href="PDFs/SHPE_E-Board_Office_Hours.pdf">Find them here!</a></br>
							General Meeting: Fridays 11:30AM Kupfrian 118</br>
							<h3>Contact Us</h3>
							<a href="mailto:njitshpe@gmail.com" target="_blank">Contact Us Via Email</a>
							<a href="FAQ.php"><h3>FAQ</h3></a>
						</td>
					</tr>
			</div>
		</div>
	</body>
</html>