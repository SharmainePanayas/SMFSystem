<!DOCTYPE html>
<?php 
	require 'validator.php';
	require_once 'conn.php'
?>
<html lang = "en">
	<head>
		<title>Student File Management System</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
		    <!--Linking the css file to html-->
			<link rel="stylesheet" href="style/style.css">
	</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#ffd700;">
		<div class="container-fluid">
			<label class="navbar-brand" id="title" style="color:black";>Student File Management System</label>
			<?php 
				$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
			?>
			<ul class = "nav navbar-right">	
				<li class = "dropdown">
					<a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#">
						<span class = "glyphicon glyphicon-user"></span>
						<?php 
							echo $fetch['firstname']." ".$fetch['lastname'];
						?>
						<b class = "caret"></b>
					</a>
				<ul class = "dropdown-menu">
					<li>
						<a href = "logout.php"><i class = "glyphicon glyphicon-log-out"></i> Logout</a>
					</li>
				</ul>
				</li>
			</ul>
		</div>
	</nav>
	<?php include 'sidebar.php'?>
	<div id = "content">
		<br /><br /><br />
		<div style="color:black"; class="alert alert-info text-center"><h3><b>"To enhance the way schools manage their students informations"</b></h3></div> 
     <div class="content-box-lg">
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                    <div class="about-item text-center">
                     <i class="fa fa-book"></i>
                     <h3>MISSION</h3>
                     <hr>
                     <p> Its main purpose is to enhance the way schools manage their students informations. The system will simply organize and compile all informations regarding the students that attended in a specific schools. We offer a simple yet reliable system that will surely help staffs and communities of schools.</p>
                     </div>
                 </div>
                 <div class="col-md-4">
                    <div class="about-item text-center">
                     <i class="fa fa-globe"></i>
                     <h3>VISSION</h3>
                     <hr>
                     <p>Our dream is to be the most known system in managing students files and most importantly its content. In the long run this will help a lot of schools in the philippines to manage every files that each and every student has. In the next 10 years the organizations. We are constantly focusing on innovating. </p>
                     </div>
                 </div>
                 <div class="col-md-4">
                    <div class="about-item text-center">
                     <i class="fa fa-pencil"></i>
                     <h3>ACHIEVEMENTS</h3>
                     <hr>
                     <p> The organization is performed code optimization on online customer dashboard, eliminating 2,000+ lines of code and reducing server resource usage by 19%. Managed and led 4-person development team building the company�s new mobile apps (iOS and Android).</p>
                     </div>
                  </div>
              </div>
            </div>
         </div>
      </div>   
    
<?php include 'script.php'?>	
</body>
</html>