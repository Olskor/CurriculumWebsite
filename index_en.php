<!DOCTYPE html>
<html lang="en">
  <head>
	<title>web programming student</title>
	
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="scripts/animation.js"></script>
	<?php include 'scripts/contact.php';?>
	
	<div class="top">
		<div class="bar" id="Navbar">
			<a href="#home" class="button"><i class="fa fa-home"></i>HOME</a>
			<a href="#about" class="button"><i class="fa fa-info"></i>ABOUT</a>
			<a href="#github" class="button"><i class="fa fa-github"></i>GITHUB</a>
			<a href="#contact" class="button"><i class="fa fa-envelope"></i>CONTACT</a>
			<a href="index.php" class="language">switch to french</a>
		</div>
	</div>
	
  </head>
  <body>
	<div class="topPicture" id="home">
		<div>
			<h1>Jean-Baptiste Auffret</h1>
			<h2>computer science and physics student</h2>
			<h3>astronomer</h3>
		</div>
	</div>
	<div class="about" id="about">
		<h2>ABOUT ME</h2>
		<div class="bio">
			<img class="animated-left" src="images/profil.png"></img>
			<div>
				<p>Young programming student passionate about science, I recently decided to reorient myself towards web development by applying to school 42 at Perpignan.</p>
				<br>
				<p>I'm passionate about programming since I was 14 years old, having developed my first website, video game mods and hosted a server with a dozen players per day. When I started my further studies in physics I decided to leave programming aside to dedicate myself to science. My different trainings in DUT and in licence helped me to deepen my knowledge in programming and finally gave me back this passion in 2021. In June 2022 I finally decided to reorient myself in programming and I decided to apply to MyDigitalSchool and I am currently looking for a work-study program.</p>
			</div>
		</div>
		<div class="separator">
			<div class="news">
				<h3>Applying to 42</h3>
				<p>My application to MyDigitalSchool was not successful, so I decided to try my luck at 42.</p>
				<br>
				<p>My first admissions test was very successful, I'm now waiting for the pool to start so I can prove myself.</p>
				<br>
				<p>My applying pool at Perpignan have been marvelous, i've got 11 lvl to 95% ! I'm now waiting for results.</p>
				<br>
				<p>The results came on November 30th, i'm officially a student of 42 ! i can't wait to start my study in February 2023</p>
				<div class="atouts">
					<h3>Strengths</h3>
					<h4>Front-end:</h4>
					<div style = "display: flex;">
						<p>HTML, CSS, Javascript, Angular</p>
						<button class="button-details" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFront" aria-expanded="false" aria-controls="collapseFront">Details</button>	
					</div>
					<div class="progress-bar-exp"><div class="progress-bar-exp-frontend animated">53%</div></div>
					
					<div class="collapse" id="collapseFront">
						<div style = "display: flex; margin-top: 10px;">
						<div style="margin-right:10px;">
								HTML<br>
								CSS<br>
								Javascript<br>
								Angular<br>
							</div>
							<div style="width:100%;">
								<div class="progress-bar-ext"><div class="progress-bar-ext-value" style="width: 75%;">75%</div></div>
								<div class="progress-bar-ext"><div class="progress-bar-ext-value" style="width: 70%;">70%</div></div>
								<div class="progress-bar-ext"><div class="progress-bar-ext-value" style="width: 40%;">40%</div></div>
								<div class="progress-bar-ext"><div class="progress-bar-ext-value" style="width: 30%;">30%</div></div>
							</div>
						</div>
					</div>
					<br>
					<h4>Back-end:</h4>
					<div style = "display: flex;">
						<p>C#, php, C, C++, python</p>
						<button class="button-details" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBack" aria-expanded="false" aria-controls="collapseBack">Details</button>	
					</div>
					<div class="progress-bar-exp"><div class="progress-bar-exp-backend animated">50%</div></div>
					
					<div class="collapse" id="collapseBack">
						<div style = "display: flex; margin-top: 10px;">
							<div style="margin-right:10px;">
								C#<br>
								C/C++<br>
								PHP<br>
								Python<br>
							</div>
							<div style="width:100%;">
								<div class="progress-bar-ext"><div class="progress-bar-ext-value" style="width: 40%;">50%</div></div>
								<div class="progress-bar-ext"><div class="progress-bar-ext-value" style="width: 60%;">60%</div></div>
								<div class="progress-bar-ext"><div class="progress-bar-ext-value" style="width: 20%;">20%</div></div>
								<div class="progress-bar-ext"><div class="progress-bar-ext-value" style="width: 80%;">80%</div></div>
							</div>
						</div>
					</div>
					<br>
					<h4>English:</h4>
					<p>C1 Level</p>
					<div class="progress-bar-exp"><div class="progress-bar-exp-english animated">85%</div></div>
					<br>
					<h4>Frameworks/Software:</h4>
					<p>Eclipse, IntelliJ, Visual studio, Photoshop, Blender, Unity 3D.</p>
					<br>
				</div>
			</div>
			<div class="vline"></div>
			<div class="cv">
				<h3>Experiences</h3>
				<div class="experience animated-right">
					<div class="titre">
						<h4>GoStudent tutor</h4>
						<p class="lieu">At home</p>
					</div>
					<div class="description">
						<p class="periode"></p>
						<p>Private tutoring in mathematics and physics for students from elementary to high school</p>
					</div>
				</div>
				<div class="hline"></div>
				<h3>Study</h3>
				<div class="experience animated-right">
					<div class="titre">
						<h4>DUT Physical Measurement</h4>
						<p class="lieu">IUT de Montpellier/Sêtes, France</p>
					</div>
					<div class="description">
						<p class="periode">from 2017 to 2018</p>
						<p>Application of physics to measurements and setting up of measurement systems. 1st year acquired</p>
					</div>
				</div>
				<div class="experience animated-right">
					<div class="titre">
						<h4>Licence</h4>
						<p class="lieu">Valrose université Nice, France</p>
					</div>
					<div class="description">
						<p class="periode">from 2018 to 2022</p>
						<p>Year 1 and 2 in science and technology 240 ects validated including 24 in computer science</p>
					</div>
				</div>
				<div class="experience animated-right">
					<div class="titre">
						<h4>42 piscine</h4>
						<p class="lieu">Dames de france, Perpignan, France</p>
					</div>
					<div class="description">
						<p class="periode">from oct 31 2022 to nov 25 2022</p>
						<p>1 month of study to become a 42 student. Ended with 11 lvl 95%</p>
					</div>
				</div>
				<div class="hline"></div>
				<h3>Degrees</h3>
				<div class="experience animated-right">
					<div class="titre">
						<h4>Baccalauréat général S,</h4>
						<p class="lieu">Charlemagne Carcassonne, France</p>
					</div>
					<div class="description">
						<p class="periode">2017</p>
						<p>Speciality in ecology, agronomy and territory without mention</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="githubPicture" id="github"><h2>GitHub:</h2></div>
	<div class="github">
		<h3>Mandelbrot set</h3>
		<div class="github-post">
			<div class="animated-left">
				<p>This program allows you to generate an image of the Mandelbrot set. The code was done during my free time while studying for my licence.</p>
				<p>The program can generate a 1000x1000 picture of the Mandelbrot set in less than 2 seconds.</p>
				<p>I also created a shader version on ShaderToy which you can see on the right.</p>
				<a style="text-decoration: none; color:var(--link-color);" href="https://github.com/Olskor/MandelbrotSet">GitHub page of the Mandelbrot set</a>
			</div>
			<iframe class="animated-right zoom" frameborder="0" src="https://www.shadertoy.com/embed/Ds2SRD?gui=true&t=10&paused=true&muted=false" allowfullscreen></iframe>
		</div>
		<div class="hline"></div>
		<br>
		<h3>Genetic algorithm</h3>
		<div class="github-post">
			<div class="animated-left">
				<p>This program allows you to solve mathematical or physical problems more quickly than with a traditional algorithm.</p>
				<p>The problem that my program solves is the problem of the maximum of a function. It is sometimes difficult to find quickly the maximum of a function especially if it is complex, thanks to the genetic algorithm this problem is solved in a fraction of seconds!</p>
				<p>This program was my mid-semester project for my 3rd degree in physics.</p>
				<a style="text-decoration: none; color:var(--link-color);" href="https://github.com/AJean-Baptiste/genetic-algorithm" target="_blank">GitHub page of the genetic algorithm</a>
			</div>
			<img class="animated-right zoom" src="images/genetic.gif"></img>
		</div>
		<div class="hline"></div>
		<br>
		<h3>UI mod for Trackmania</h3>
		<div class="github-post">
			<div class="animated-left">
				<p>This mod was made in AngelScript, a cousin of Javascript, it aims to simulate a tournament in order to train and see the average time that we make on a given map</p>
				<p>This program allowed me to learn how an UI works and how to pay attention to each detail of the code so that the program runs as fast as possible to avoid having image losses on the game, indeed this game is often played at 140 FPS or 240.</p>
				<a style="text-decoration: none; color:var(--link-color);" href="https://github.com/AJean-Baptiste/MatchSimulator-Trackmania" target="_blank">GitHub page of the Trackmania mod</a>
				<br><a style="text-decoration: none; color:var(--link-color);" href="https://openplanet.dev/plugin/matchsimulator" target="_blank">Download page of the Trackmania mod</a>
			</div>
			<img class="animated-right zoom" src="images/match.jpg"></img>
		</div>
		<div class="hline"></div>
		<br>
		<h3>Ray-marching python script</h3>
		<div class="github-post">
			<div class="animated-left">
				<p>As part of my final year project in 3rd year of physics licence, I needed to simulate in a realistic way the ray tracing of light between the air and the water surface.</p>
				<p>This program allowed me to learn a lot about the functioning of rendering engines for video games and animated films. My program uses a method called Ray marching, this method to draw the rays is very efficient on surfaces governed by mathematical functions.</p>
				<a style="text-decoration: none; color:var(--link-color);" href="https://github.com/AJean-Baptiste/Ray-marching-in-python" target="_blank">GitHub page of the ray-marching script</a>
			</div>
			<img class="animated-right zoom" src="images/parabole.png"></img>
		</div>
		<div class="hline"></div>
		<br>
		<h3>Julia set dynamic shader</h3>
		<div class="github-post">
			<div class="animated-left">
				<p>This is a glsl shader i made while waiting to go to 42 piscine.</p>
				<p>It's available on ShaderToy and is completely dynamic, you can select a julia set by clicking anywhere on the screen, it will change dynamicly and the resolution depend on your screen, thanks to gpu calculation the precision is greater and the coputing time is way faster.</p>
				<a style="text-decoration: none; color:var(--link-color);" href="https://www.shadertoy.com/view/DsjSRD" target="_blank">ShaderToy page of the julia set</a>
			</div>
			<iframe class="animated-right zoom" frameborder="0" src="https://www.shadertoy.com/embed/DsjSRD?gui=true&t=10&paused=true&muted=false" allowfullscreen></iframe>
		</div>
	</div>
	<div class="contact" id="contact">
		<h2 class="contact-title">Contact:</h2>
		<div>
			<div class="part"><i class="fa fa-phone"></i><p>Phone: +33 (0)7 81 31 65 17</p></div>
			<div class="part"><i class="fa fa-map-marker"></i><p>Montpellier, France</p></div>
			<div class="part"><i class="fa fa-envelope"></i><p>Email: prosper.auffret@gmail.com</p></div>
		</div>
		<form method="post" id="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

			<?php 
				if(!empty($erreur)){          
					echo $errorMessage;
				}
			?>
			<input type="text" id="name" name="name" placeholder="Name">
			<br>
			<input type="text" id="mail" name="mail" placeholder="Email">
			<br>
			<textarea id="message" name="message" placeholder="Message" style="height:200px"></textarea>
			<br>
			<input type="submit" value="Submit">

		</form>
	</div>
  </body>
</html>