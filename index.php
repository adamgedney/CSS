<?php require_once 'controllers/mailer.php'; ?>
<!DOCTYPE html>
<html lang="en">
<!-- Thanks for checking out my code!!


	Copyright Adam Gedney 11/8/13
	contact: adam.gedney@gmail.com
	http://adamgedney.com

"Good UI design is humble.” – Jono DiCarlo -->
<head>
	<title>The Mob Band | The MOB Band is the #1 cover band in the Orlando, Florida area!</title>

	<!-- meta -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- favicon & humans.txt -->
	<link type="text/plain" rel="author" href="/humans.txt" />
	<link rel="shortcut icon" href="http://adamshields.com/favicon.ico" />

	<!-- Googel fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/responsive-gs-12col.css" /><!-- resopnsive.gs grid system -->
	<link rel="stylesheet" href="css/ie.css" /><!-- resopnsive.gs grid system -->

	<link href="fancyBox/jquery.fancybox.css?v=2.0.5" rel="stylesheet" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/jquery.picasagallery.css">
	<link href="./fancyBox/helpers/jquery.fancybox-thumbs.css?v=2.0.5" rel="stylesheet" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/main.css" />



	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->
</head>
	<body>

		<header>
			<h1 class="hide-text">The Mob Band. The #1 cover band in the Orlando, Florida area!</h1>

			<nav>
				<ul>
					<li><a class="slow-jump" href="#about">ABOUT THE MOB</a></li>
					<li><a class="slow-jump" href="#calendar">CALENDAR</a></li>
					<li><a class="slow-jump" href="#setlist">SETLIST</a></li>
					<li><a class="slow-jump" href="#gallery">GALLERY</a></li>
				</ul>
			</nav>
		</header>

			<div class="container">
				<div class="page landing">
					<div class="page-inner">
						<img class="mob-logo" src="images/mobbadge.png" alt="The Mob Band Logo" width="538" height="485"/>
						
						<h3 class="red">The Mob Band. The #1 cover band in the Orlando, Florida area!</h3>
					</div><!-- /.page-inner-->
				</div><!-- /.page-->


				<div class="page live">
					<div class="page-inner">

						<div class="signup">
							<form action="?action=subscribe" method="post">
								<input type="text" name="email"/>
								<input type="submit" value="submit"/> 
							</form>
							<!-- <img class="signup-img" src="images/signup.png" alt="The Mob Band Email List Signup Form" /> -->
						</div><!-- /.signup-->

						<p id="about" ><span class="bold">This group is comprised of four lead singing musicians</span> who entertain to a level far greater than the mere sum of their parts.  The depth of our talent covers all genres of music with decades of experience that we utilize to produce a consistently seamless performance.  

						<p>Our strong vocals, together with instrumental prowess, enable us to play nonstop music that commands attention and captures the senses.  We will transport our listeners from their seat to the dance floor with the music that makes you want to dance.</p>  

						<p>The best dance music from the 60’s, 70’s & 80’s and more, all presented with an intensity and energy that is always contagious and captivating.  Attendees at your function will enjoy themselves and remember this group as one of the Best Live Bands they have ever experienced.</p>  

						<p>We are versatile, flexible, and professional.  After all, we are The MOB.  Welcome to the world of organized rhyme.</p>

						<h2 class="red snap">HERE'S HOW WE SOUND LIVE</h2>

						<div class="live-video">
							<p><iframe src="http://www.youtube.com/embed/Gs3SbLlL3Po?rel=0" frameborder="0" allowfullscreen></iframe></p>
						</div><!-- /.live-video-->

					</div><!-- /.page-inner-->
				</div><!-- /.page-->

				<div class="page calendar">
					<div class="page-inner">
						<h2 class="red snap">THIS IS WHERE WE'LL BE</h2>

						<div class="cal" id="calendar">
							<p><iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=480&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=themobband.com%40gmail.com&amp;color=%23333333&amp;ctz=America%2FNew_York" style=" border-width:0 " max-width="100%" max-height="100%" frameborder="0" scrolling="no"></iframe></p>
						</div><!-- /.cal-->
					</div><!-- /.page-inner-->
				</div><!-- /.page-->

				<div class="page setlist slow-jump">
					<div class="page-inner">
						<h2 class="red snap">THIS IS WHAT WE PLAY</h2>

							<div class="column" id="setlist">
								<ul>
									<li>Aerosmith - Sweet Emotion</li>
									<li>Aerosmith - Walk This Way</li>
									<li>Alan Jackson – 5 O’clock Somewhere</li>
									<li>Allman Bros. - One Way Out</li> 
									<li>B 52s – Love Shack</li>
									<li>B.T.O. - Taking Care of Business</li> 
									<li>Bad Company - Youngblood</li> 
									<li>Bad Company -Can’t Get Enough</li> 
									<li>Beasty Boys – Fight for your right</li>
									<li>Black Crowes - Hard To Handle</li>
									<li>Bob Seger – Old time RnR</li>
									<li>Bob Seger – Ramblin Man</li> 
									<li>Bruce Springsteen – Pink Cadillac</li>
									<li>Bruce Springsteen- Hungry Heart</li>
									<li>Chubby Checker - Let’s Twist Again</li>
									<li>Chubby Checker - The Twist</li>
									<li>Bob Marley – Stir it Up</li>
									<li>Credence Clearwater - Suzy Q</li> 
									<li>Credence Clearwater – Born on a Bayou</li>
									<li>Credence Clearwater - Bad Moon Rising</li>
									<li>Credence Clearwater – Green River</li>
									<li>Credence Clearwater - Proud Mary</li> 
									<li>Dave Edmunds - I Hear You Knocking</li>
									<li>Deep Purple - Smoke On the Water</li> 
									<li>Deep Purple- Hush</li>
									<li>Del Shannon - Runaway</li>
									<li>Dire Straights- Sultans of Swing</li>
									<li>Don McLean – American Pie</li>
									<li>Donovan - Mellow Yellow</li> 
									<li>Doobie Bros - Listen To the Music</li>
									<li>Doobie Bros. - Long Train Running</li>
									<li>Doobie Bros.- China Grove</li>
									<li>Eagles - Hotel California</li>
									<li>Eagles – Already Gone</li>
									<li>Eagles- Tequila Sunrise</li>
									<li>Eddie Floyd – Knock on wood</li>
									<li>Eric Clapton - Before You Accuse Me</li>
									<li>Eric Clapton - Further On Up the Road</li> 
									<li>Eric Clapton - Lay Down Sally</li> 
									<li>Eric Clapton - Wonderful tonight</li> 
									<li>Foundations- Build me up Buttercup</li>
									<li>Free - Alright Now</li> 
									<li>Georgia Satellites - Keep Your Hands to Yourself</li> 
									<li>Grand Funk - Some Kind of Wonderful</li>
									<li>Grand Funk – American Band</li> 
									<li>Grass Roots – Midnight Confessions</li>
									<li>Grass Roots – Temptation eyes</li>
									<li>Huey Lewis - Working’ For a Living</li> 
									<li>Jackson Browne - Doctor My Eyes</li>
									<li>James Brown – I feel good</li>
									<li>Jimmy Buffet - Margaritaville</li> 
									<li>Joe Walsh - Rocky Mt Way</li> 
								</ul>
							</div><!-- /.column-->

							<div class="column">
								<ul>
									<li>Joey Dee – Peppermint twist</li>
									<li>John Mellencamp - Hurts So Good</li> 
									<li>John Lennon – Imagine</li>
									<li>Journey – Don’t Stop Believin’</li> 
									<li>K.C. and the Sunshine band – Shake Shake</li>
									<li>K.C. and the Sunshine band – Get Down tonight</li>
									<li>Kenny Chesney - Beer in Mexico</li> 
									<li>Kenny Chesney - How Forever Feels</li> 
									<li>Kenny Chesney - Tractor’s Sexy</li> 
									<li>Kenny Chesney - When the Sun Goes Down</li>
									<li>Kid Rock- All Summer Long</li>
									<li>Kinks -You Really Got Me</li> 
									<li>Kinks – All the Day and All the night</li>
									<li>Kiss – Rock and Roll All night</li>
									<li>Kool and the Gang – Get Down on it</li>
									<li>Kool and the Gang – Celebration</li>
									<li>Lionel Richie- My Love</li>
									<li>Little Feat - Dixie Chicken</li> 
									<li>Little Feat - Spanish Moon</li> 
									<li>Little Feat - Willing’</li> 
									<li>Los Lonely Boys- Heaven</li>
									<li>Lynyrd Skynyrd - Give me Three Steps</li> 
									<li>Lynyrd Skynyrd - Sweet Home Alabama</li> 
									<li>Lynyrd Skynyrd -Call Me the Breeze</li> 
									<li>Lynyrd Skynyrd -Free Bird</li> 
									<li>Marshal Tucker Band – Can’t you see</li>
									<li>MC Hammer - U Can't Touch This</li> 
									<li>Michael Jackson – Billie Jean</li>
									<li>Moody Blues- Story in your eyes</li>
									<li>Molly Hatchet -  Dreams</li>
									<li>Neil Diamond- Sweet Caroline</li>
									<li>Neil Diamond – I’m a believer</li>
									<li>Ohio Players - Fire</li>
									<li>Pat Ramsey & Disciples - Georgia Swing</li> 
									<li>Peter Frampton - Do You Feel Like We Do</li> 
									<li>Peter Frampton - Show Me the Way</li> 
									<li>Pink Floyd - Another Brick in the Wall</li>
									<li>Pure Prairie League - Aimee</li> 
									<li>Queen – Crazy little thing called Love</li>
									<li>Ritchie Valens – La Bamba</li>
									<li>Robert Palmer – Bad Case of Lovin You</li>
									<li>Rolling Stones - Brown Sugar</li> 
									<li>Rolling Stones - Honky Tonk Woman</li> 
									<li>Rolling Stones - Let It Bleed</li> 
									<li>Rolling Stones - Satisfaction</li> 
									<li>Roy Orbison - Pretty Woman</li> 
									<li>Santana – Smooth</li>
									<li>Santana – Evil ways</li> 
									<li>Steve Miller – Keep on Rockin Me</li>
									<li>Stevie Ray Vaughn - House Is Rocking</li> 
									<li>Stevie Ray Vaughn - Pride & Joy</li> 
									<li>Stevie Ray Vaughn- Leave My Little Girl Alone</li>
								</ul>
							</div><!-- /.column-->

							<div class="column">
								<ul>
									<li>Stevie Wonder - Superstition</li> 
									<li>T Rex - Bang a Gong</li>
									<li>Temptations - Ain’t Too Proud To Beg</li> 
									<li>Temptations - Heard It through the Grapevine</li> 
									<li>Temptations - My Girl</li> 
									<li>The Animals - House of the Rising Sun</li> 
									<li>The Animals - We Got to Get Out of This Place</li> 
									<li>The Band - The Weight</li> 
									<li>The Beach Boys- Barbara Ann</li>
									<li>The Beach Boys- Surfin USA</li>
									<li>The Beach Boys- T- Bird</li>
									<li>The Beach Boys- California Girls</li>
									<li>The Beatles - All My Loving’</li> 
									<li>The Beatles - Back In the USSR</li> 
									<li>The Beatles –Yesterday/ Maybe I’m Amazed/ Hey Jude</li>
									<li>The Beatles - Twist and Shout</li> 
									<li>The Beatles -We Can Work It Out</li>
									<li>The Box tops - The Letter</li> 
									<li>The Box tops – Cry like a baby</li>
									<li>The CARS- Lets Go</li>
									<li>The Champs - Tequila</li>
									<li>The Commitments - Mustang Sally</li> 
									<li>The Commodores - Brick House</li> 
									<li>The Doors - Roadhouse Blues</li> 
									<li>The Doors – Love Her Madly</li>
									<li>The Drifters - Under the Boardwalk</li>
									<li>The Drifters – Up on a Roof</li>
									<li>The Escape Club – Wild Wild West</li>
									<li>The Hollies - Long Cool Woman</li> 
									<li>The Ides of March - Vehicle</li>
									<li>The Knack – My Sharona</li>
									<li>The Monkeys - I’m Not Your Stepping’ Stone</li> 
									<li>The Ramones - Sedated</li>
									<li>The Romantics – What I like about you</li>
									<li>The Turtles- Happy Together</li>
									<li>The WHO - Squeeze Box</li> 
									<li>Three Dog Night- One</li>
									<li>Tom Petty - American Girl</li> 
									<li>Tom Petty - Last Dance with Mary Jane</li> 
									<li>Tom Petty – Breakdown</li>
									<li>Tom Petty – Wreck me/ Runnin down a dream</li>
									<li>Tommy James and the Shondells- Mony Mony</li>
									<li>Tommy Tutone - 867-5309 (Jenny)</li> 
									<li>Van Morrison - Brown Eyed Girl</li> 
									<li>Van Morrison – Gloria</li>
									<li>Van Morrison – Moondance</li>
									<li>Warren Zevon- Werewolves of London</li>
									<li>Wild Cherry - Play That Funky Music</li>
									<li>Zack Brown – Chicken Fried</li> 
									<li>ZZ Top - La Grange</li> 
									<li>ZZ Top – Sharp Dressed Man</li>
								<ul>
							</div><!-- /.column-->

					</div><!-- /.page-inner-->
				</div><!-- /.page-->

				<div class="page gallery snap">
					<div class="page-inner">
						<h2 class="red">HERE'S WHAT WE LOOK LIKE</h2>

						        <div class="picasa" id="gallery">
						        	<embed type="application/x-shockwave-flash" src="https://static.googleusercontent.com/external_content/picasaweb.googleusercontent.com/slideshow.swf" width="100%" height="100%" flashvars="host=picasaweb.google.com&hl=en_US&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F112323008573640601447%2Falbumid%2F5943929266358395361%3Falt%3Drss%26kind%3Dphoto%26hl%3Den_US" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
						        </div>


					</div><!-- /.page-inner-->
				</div><!-- /.page-->	
			</div><!-- /.container-->	

		<footer class="snap">
		<p><span class="red">&copy;2013</span> TheMobBand.com  |  <a href="mailto:info@themobband.com?subject:themobband.com contact inquiry">Contact the Mob Band</a></p>
		</footer>
		<!-- Scripts -->

		<script src="js/jquery-1.7.1.js"></script>
		<!-- // <script src="js/jquery-1.10.2.min.js"></script> -->
		<script src="js/jquery.event.special.js"></script>
  		<script src="js/jquery.easing.min.js"></script>
  		<script src="js/jquery.scrollsnap.js"></script>

		<script src="js/main-ck.js"></script>
		
	</body>
</html>
