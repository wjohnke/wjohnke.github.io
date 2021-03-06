<!DOCTYPE html>

<html lang="en">


<head>
<meta charset="UTF-8">
<title>Bootstrap Example</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.panel-default > .panel-heading {
  background: #7cb6cc;
}

body {
      position: relative;
	  height:2000px;
}
.affix {
      top: 20px;
      z-index: 9999 !important;
}

</style>

<script>


$(document).ready(function () {
    $('div.collapse').on("show.bs.collapse || hide.bs.collapse", function () {
      let glyph = $(this).siblings("div.panel-heading").find('span.glyphicon');
      glyph.hasClass("glyphicon-menu-right") ?   glyph.toggleClass("glyphicon-menu-down") :   glyph.toggleClass("glyphicon-menu-right");
    });
	$('div.collapse').on("hide.bs.collapse", function(e) {
		var top = $(e.target).offset().top;
        if ($(window).scrollTop() > top)
            $(window).scrollTop(top);
	});
	/*
	$('.navlinks').on('hide.bs.collapse', function(e) {
		e.stopPropogation();
	});
	*/
	$("#navSummary").click(function () {
		$('#summary').collapse('show');
	});
	$("#navProjects").click(function () {
		$('#projects').collapse('show');
	});
	$("#navEducation").click(function () {
		$('#education').collapse('show');
	});
	$("#navExperience").click(function () {
		$('#experience').collapse('show');
	});
	$("#navQualifications").click(function () {
		$('#qualifications').collapse('show');
	});
	
});




function expand() {
            $('.collapse').collapse('show');
        }
function collapse() { 
            $('.collapse').collapse('hide');
        }
		
		

</script>


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="container-fluid">
	<div class="page-header">
		<h1>William Johnke</h1>
	</div>

	<div class="row">
		<div class="col-sm-3">
			
			
			<nav class="navbar">
			
			<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="100">
				<li>
				<div>
					<img width="80" height="80" src="meProfile.png" class="img-circle" alt="profilePhoto">
				</div>
				</li>
				
				<li><a id="navSummary" data-target="#summary" href="#summaryPanel">Summary</a></li>
				<li><a id="navEducation" data-target="#education" href="#educationPanel">Education</a></li>
				<li><a id="navQualifications" data-target="#qualifications" href="#qualificationsPanel">Qualifications</a></li>
				<li><a id="navExperience" data-target="#experience" href="#experiencePanel">Experience</a></li>
				<li><a id="navProjects" data-target="#projects" href="#projectsPanel">Projects</a></li>
				
				<div>
				<a href="resumewjCSCurrent.pdf" role="button" class="btn btn-primary">View Resume PDF</a>
				</div>
			</ul>
			</nav>
		</div>
		<div class="col-sm-9">
			<div>
			<button type="button" onclick="expand()" class="btn btn-primary">Expand All</button>
			<button type="button" onclick="collapse()" class="btn btn-primary">Collapse All</button>
			</div>
			 
			 <div class="panel-group" id="summaryPanel">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h1 class="panel-title">
						<span class="glyphicon glyphicon-menu-right"></span>
						<a data-toggle="collapse" href="#summary">Summary</a>
						</h1>
					</div>
					
					<div id="summary" class="panel-collapse collapse">
						<ul class="list-group">
							<li class="list-group-item">
							<p>
							Passionate about web development and database structuring. Enjoy data analysis and statistical applications of software. Enthusiastic about producing quality software and threading creativity into every aspect of a project.
							</p>
							</li>
							<li class="list-group-item list-group-item-info">
							<p>
							Comfortable with constantly learning new things and put a strong focus on persistent improvement. Eager about working in teams, asking for help, and teaching others.
							</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="panel-group" id="educationPanel">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h1 class="panel-title">
						<span class="glyphicon glyphicon-menu-right"></span>
						<a data-toggle="collapse" href="#education">Education</a>
						</h1>
					</div>
					
					<div id="education" class="panel-collapse collapse">
						<ul class="list-group">
							<li class="list-group-item">
							<div>
							 <h2><i>Bachelor of Science in Computer Science</i></h2>
							 <p>Anticipated Graduation Date: December 2018</p>
							 <p>GPA: 3.3</p>
							 
							 <div>
							 <img style="display:inline-block;" class="img-responsive" width="15" height="15" src="../bootstrap/MULogo.png" alt="MULogo">
							 <p style="display:inline-block;">University of Missouri</p>
							 </div>
							 <p><i>Columbia, Missouri</i></p>
							</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			 
			 <div class="panel-group" id="qualificationsPanel">
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<span class="glyphicon glyphicon-menu-right"></span>
						<a data-toggle="collapse" href="#qualifications"> Qualifications </a>
					  </h4>
					</div>
					<div id="qualifications" class="panel-collapse collapse">
					  <ul class="list-group">
						<li class="list-group-item">
							<p>Programming Languages:
								<br> &nbsp &nbsp 3+ years of experience with Java and C
								<br> &nbsp &nbsp 1-2 years of experience with: Haskell, Visual Basic & C#, PHP, Python, JavaFX, Kotlin
								<br> &nbsp &nbsp Familiarity with relational databases, data structuring (XML, JSON), security, MySQL, PostgreSQL
							</p>
							<div>
							<img  style="display:inline-block;" class="img-responsive" width="30" height="30" src="javaLogo.png" alt="JavaLogo">
							<img style="display:inline-block;" class="img-responsive" width="30" height="30" src="haskellLogo.png" alt="HaskellLogo">
							<img style="display:inline-block;" class="img-responsive" width="45" height="20" src="csharpnetLogo.jpg" alt="CSharpNetLogos">
							<img  style="display:inline-block;" class="img-responsive" width="30" height="30" src="pythonLogo.png" alt="PythonLogo">
							<img style="display:inline-block;" class="img-responsive" width="30" height="30" src="phpLogo.png" alt="PhpLogo">
							<img style="display:inline-block;" class="img-responsive" width="30" height="30" src="c-logo.png" alt="CLogo">
							</div>
						</li>
						<li class="list-group-item list-group-item-info">
							<p>
							Broad Experience with Front-End and Back-End Web Development
							<br>
							2+ years of experience with JavaScript, jQuery, HTML5, & CSS3
							</p>
							<div>
							<img  style="display:inline-block;" class="img-responsive" width="30" height="30" src="javascriptLogo.png" alt="JSLogo">
							<img style="display:inline-block;" class="img-responsive" width="30" height="30" src="JQuerylogo512.png" alt="JQueryLogo">
							<img style="display:inline-block;" class="img-responsive" width="45" height="15" src="CSS3_and_HTML5logos.png" alt="CSS3_and_HTML5Logos">
							</div>
						</li>
						<li class="list-group-item">
						<p>
						Familiarity and experience with MVC and other architectural considerations
						</p>
						</li>
						<li class="list-group-item list-group-item-info">
						<p>
						Strong background with theoretical computing aspects, time and space Complexity, algorithmic efficiency, advanced data structures, OO Design Patterns, functional and OO programming paradigms
						</p>
						</li>
					  </ul>
					</div>
				  </div>
			</div>
			
			<div class="panel-group" id="experiencePanel">
				<div class="panel panel-default">
				  <div class="panel-heading">
					<h4 class="panel-title">
					  <span class="glyphicon glyphicon-menu-right"></span>
					  <a data-toggle="collapse" href="#experience">Experience</a>
					</h4>
				  </div>
				  <div id="experience" class="panel-collapse collapse">
					<ul class="list-group">
					  <li class="list-group-item">
						<div class="panel-group">
							<div class="panel">
							  <div class="panel-heading">
								<h4 class="panel-title">
								  <span class="glyphicon glyphicon-menu-right"></span>
								  <a data-toggle="collapse" href="#softwareDev">Software Developer Intern - Sandhills Publishing</a>
								</h4>
							  </div>
							  <div id="softwareDev" class="panel-collapse collapse">
								<ul class="list-group">
								  <li class="list-group-item">
								  <p>
								  Internship program from June 2018 - August 2018
								  </p>
								  </li>
								  <li class="list-group-item  list-group-item-info">
								  <p>
								  Developed applications under a WISA stack with a heavy focus on MVC architecture. A strong focus of this internship was self-reliant software. Experience spanning across REST Web APIs to front and back-end web development with heavy jQuery and ASP.net, and internal applications and analytics
								  </p>
								  </li>
								  <li class="list-group-item">
								  <p>Constant communication and coordination with employees in offices throughout U.S.   Experience using essential development techniques such as code reviews, version control (TFS), and unit testing
								  </p>
								  </li>
								</ul>
								<div class="panel-footer">Reference:<br>
								<p>Ben Reis - Department Manager
								<br><a href="tel:+1-402-613-5888">(402) 613-5888<br>
								<a href="mailto:ben-reis@sandhills.com">ben-reis@sandhills.com</a>
								</div>
							  </div>
							</div>
						  </div>
					  </li>
					  <li class="list-group-item">
							<div class="panel-group">
							<div class="panel">
							  <div class="panel-heading">
								<h4 class="panel-title">
								  <span class="glyphicon glyphicon-menu-right"></span>
								  <a data-toggle="collapse" href="#noodles">Manager - Noodles & Company</a>
								</h4>
							  </div>
							  <div id="noodles" class="panel-collapse collapse">
								<ul class="list-group">
								  <li class="list-group-item">
								  <p>
								  Employed from September 2015 - May 2018
								  </p>
								  </li>
								  <li class="list-group-item">
								  <p>
								  Managed a staff of 18-20 employees, in a fast-paced environment accommodating about 250 customers and generating $3000-$4000 a day. 
								  </p>
								  </li>
								  <li class="list-group-item">
								  <p>
								  Responsibilities included conflict resolution with guests and employees, efficient teamwork and cooperation, proper delegation of resources and time, organization, inventory, and basic restaurant duties encompassing cleanliness and quality.
								  </p>
								  </li>
								</ul>
								<div class="panel-footer">Reference:<br>
								<p>Nick Dunn - General Manager
								<br><a href="tel:+1-314-330-1101">(314) 330-1101<br>
								</div>
							  </div>
							</div>
						  </div>
					  </li>
					  <li class="list-group-item">
					    <div class="panel-group">
							<div class="panel">
							  <div class="panel-heading">
								<h4 class="panel-title">
								  <span class="glyphicon glyphicon-menu-right"></span>
								  <a data-toggle="collapse" href="#senorManuels">Host - Senor Manuels</a>
								</h4>
							  </div>
							  <div id="senorManuels" class="panel-collapse collapse">
								<ul class="list-group">
								  <li class="list-group-item">
								  <p>
								  Employed from August 2014 - August 2015
								  </p>
								  </li>
								  <li class="list-group-item  list-group-item-info">
								  <p>
								  Colorado Springs, Colorado
								  </p>
								  </li>
								</ul>
								<div class="panel-footer">Reference:<br>
								<p>Mika Hernandez - General Manager & Owner
								<br><a href="tel:+1-719-339-0923">(719) 339-0923<br>
								</div>
							  </div>
							</div>
						  </div>
					  </li>
					  <li class="list-group-item">
					    <div class="panel-group">
							<div class="panel">
							  <div class="panel-heading">
								<h4 class="panel-title">
								  <span class="glyphicon glyphicon-menu-right"></span>
								  <a data-toggle="collapse" href="#skybox">Cook - Skybox Bar & Grill</a>
								</h4>
							  </div>
							  <div id="skybox" class="panel-collapse collapse">
								<ul class="list-group">
								  <li class="list-group-item">
								  <p>
								  Employed from May 2013 - August 2015
								  </p>
								  </li>
								  <li class="list-group-item  list-group-item-info">
								  <p>
								  Centennial, Colorado
								  </p>
								  </li>
								</ul>
							  </div>
							</div>
						  </div>
					  </li> 
					</ul>
				  </div>
				</div>
		  </div>
			 
		<div class="panel-group" id="projectsPanel">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h1 class="panel-title">
						<span class="glyphicon glyphicon-menu-right"></span>
						<a data-toggle="collapse" href="#projects">Projects</a>
						</h1>
					</div>
					
					<div id="projects" class="panel-collapse collapse">
						<ul class="list-group">
							<li class="list-group-item">
							<div>
							 <h2><i>"BayesBall" - Capstone Project</i></h2>
							 <p>December 2018</p>
							 <p>
							 Predictive analytic application to decide outcome of any given baseball game. Uses various statistical machine learning algorithms such as the Naïve <i>Bayes</i> classifier algorithm to predict performances of teams based on historical data.
							 </p>
							 
							 <div>
							 <p style="display:inline-block;">Developed at the <img style="display:inline-block;" class="img-responsive" width="15" height="15" src="../bootstrap/MULogo.png" alt="MULogo"> University of Missouri in <i>Columbia, Missouri</i></p>
							 </div>
							</div>
							</li>
		
							<div class="panel-footer">Links:<br>
								&nbsp &nbsp <a href="https://github.com/rjy7wb/BayesBall/tree/Develop">GitHub</a>
								<br>
								&nbsp &nbsp <a href="http://ec2-52-6-86-207.compute-1.amazonaws.com/">Currently running EC2 Instance</a>
							</div>
							
						</ul>
					</div>
				</div>
		</div>
			 
		</div>
			 
	</div>


</div>



</body>

</html>