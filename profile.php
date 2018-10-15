<?php
		  require 'includes/config.inc.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>User Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Consultancy Profile Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- js -->
<script src="web_profile/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="web_profile/js/sliding.form.js"></script>
<!-- //js -->
<link href="web_profile/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="web_profile/css/font-awesome.min.css" />
<link rel="stylesheet" href="web_profile/css/smoothbox.css" type='text/css' media="all" />
<link href="//fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="main">
		<h1>Profile Page</h1>
		<div id="navigation" style="display:none;" class="w3_agile">
			<ul>
				<li class="selected">
					<a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Info</span></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-folder" aria-hidden="true"></i><span>Hostel</span></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span>Contact</span></a>
				</li>
			</ul>
		</div>
		<div id="wrapper" class="w3ls_wrapper w3layouts_wrapper">
			<div id="steps" style="margin:0 auto;" class="agileits w3_steps">
				<form id="formElem" name="formElem" action="#" method="post" class="w3_form w3l_form_fancy">
					<fieldset class="step agileinfo w3ls_fancy_step">
						<legend>Personal Info</legend>
						<div class="abt-agile">
							<div class="abt-agile-left">
							</div>
							<div class="abt-agile-right">

								<h3><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></h3>
								<h5>Student</h5>
								<ul class="address">
									<li>
										<ul class="address-text">
											<li><b>Roll No </b></li>
											<li>: <?php echo $_SESSION['roll']; ?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>PHONE </b></li>
											<li>: <?php echo $_SESSION['mob_no']; ?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>DEPT </b></li>
											<li>: <?php echo $_SESSION['department']; ?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>YEAR OF STUDY </b></li>
											<li>: <?php echo $_SESSION['year_of_study']; ?></li>
										</ul>
									</li>
								</ul>
							</div>
								<div class="clear"></div>
						</div>
				</fieldset>
				<fieldset class="step agileinfo w3ls_fancy_step">
					<legend>Hostel Info</legend>
					<div class="abt-agile">
						<div class="abt-agile-left-hostel">
						</div>
						<div class="abt-agile-right">

							<h3><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></h3>
							<h5>Student</h5>
							<ul class="address">
								<li>
									<ul class="address-text">
										<li><b>HOSTEL </b></li>
										<?php
											$hostelId = $_SESSION['hostel_id'];
											if($hostelId == NULL){
												$hostelName = 'None';
											}
											else {
												$sql = "SELECT * FROM Hostel WHERE Hostel_id = '$hostelId'";
												$result = mysqli_query($conn, $sql);
												if($row = mysqli_fetch_assoc($result)){
													$hostelName = $row['Hostel_name'];
												}
												else {
													echo "<script type='text/javascript'>alert('Foreign Key Error-hostenName!!')</script>";
												}
											}
										 ?>


										<li>: <?php echo $hostelName; ?></li>
									</ul>
								</li>
								<li>
									<ul class="address-text">
										<li><b>ROOM NO </b></li>
										<?php
											$roomId = $_SESSION['room_id'];
											if($hostelId == NULL || $roomId == NULL){
												$roomNo = 'None';
											}
											else {
												$sql = "SELECT * FROM Room WHERE Room_id = '$roomId'";
												$result = mysqli_query($conn, $sql);
												if($row = mysqli_fetch_assoc($result)){
													$roomNo = $row['Room_No'];
												}
												else {
													echo "<script type='text/javascript'>alert('Foreign Key Error-roomNo!!')</script>";
												}
											}
										 ?>
										<li>: <?php echo $roomNo; ?></li>
									</ul>
								</li>
							</ul>
						</div>
							<div class="clear"></div>
					</div>
			</fieldset>
					<!--	<fieldset class="step wthree">
						<legend>Work</legend>
						<div class="work-w3agile">
							<div class="work-w3agile-top">
								<div class="agileits_w3layouts_work_grid1 w3layouts_work_grid1 hover14 column">
									<div class="w3_agile_work_effect">
										<ul>
											<li>
												<a href="web_profile/images/c1.jpg" class="sb" title="Quis Nostrud Exercitation Ullamco Laboris Quis Autem Vel Eum Iure Reprehenderit">
													<figure>
														<img src="web_profile/images/c1.jpg" alt=" " class="img-responsive" />
													</figure>
												</a>
											</li>
											<li>
												<a href="web_profile/images/c2.jpg" class="sb" title="Quis Nostrud Exercitation Ullamco Laboris Quis Autem Vel Eum Iure Reprehenderit">
													<figure>
														<img src="web_profile/images/c2.jpg" alt=" " class="img-responsive" />
													</figure>
												</a>
											</li>
											<li>
												<a href="web_profile/images/c3.jpg" class="sb" title="Quis Nostrud Exercitation Ullamco Laboris Quis Autem Vel Eum Iure Reprehenderit">
													<figure>
														<img src="web_profile/images/c3.jpg" alt=" " class="img-responsive" />
													</figure>
												</a>
											</li>
											<li>
												<a href="web_profile/images/c4.jpg" class="sb" title="Quis Nostrud Exercitation Ullamco Laboris Quis Autem Vel Eum Iure Reprehenderit">
													<figure>
														<img src="web_profile/images/c4.jpg" alt=" " class="img-responsive" />
													</figure>
												</a>
											</li>
											<li>
												<a href="web_profile/images/c5.jpg" class="sb" title="Quis Nostrud Exercitation Ullamco Laboris Quis Autem Vel Eum Iure Reprehenderit">
													<figure>
														<img src="web_profile/images/c5.jpg" alt=" " class="img-responsive" />
													</figure>
												</a>
											</li>
											<li>
												<a href="web_profile/images/c6.jpg" class="sb" title="Quis Nostrud Exercitation Ullamco Laboris Quis Autem Vel Eum Iure Reprehenderit">
													<figure>
														<img src="web_profile/images/c6.jpg" alt=" " class="img-responsive" />
													</figure>
												</a>
											</li>
												<div class="clear"></div>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</fieldset>-->
					<fieldset class="step w3_agileits">
						<legend>Hostel Manager Info</legend>
							<div class="agilecontactw3ls-grid">
								<div class="agile-con-left">
									<form action="#" method="post">
										<input type="text" name="First Name" placeholder="FIRST NAME" required="">
										<input type="email" name="Email" placeholder="EMAIL" required="">
										<textarea name="Message" placeholder="MESSAGE" required=""></textarea>
										<div class="send-button">
											<input type="submit" value="SEND">
										</div>
									</form>
								</div>
								<div class="agile-con-right">
									<h6>Address :-</h6>
									<p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>22 Russell Street, Victoria ,Melbourne AUSTRALIA </p>
									<p><span><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">E: info [at] domain.com</a> </p>
									<p><span><i class="fa fa-mobile" aria-hidden="true"></i></span>P: +254 2564584 / +542 8245658 </p>
									<p><span><i class="fa fa-globe" aria-hidden="true"></i></span><a href="#">W: www.w3layouts.com</a></p>
								</div>
								<div class="clear"></div>
							</div>
					</fieldset>
				</form>
			</div>
		</div>
		<div class="agileits_copyright">
			<p>© 2017 Consultancy Profile Widget. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
	<script type="text/javascript" src="web_profile/js/smoothbox.jquery2.js"></script>
</body>
</html>