<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	 	<title>Welcome to Mathsjee - A premier institute for maths preparations</title>
	 	<?php echo Asset::styles(); ?>
	 	<?php echo Asset::scripts(); ?>
	 	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	 	<link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="navribbon">
			<div class="container_12">
				<div id="mainnavcont">
					<div class="grid_3">
						<a href="{{ URL::base() }}" id="logo">mathsjee</a>
					</div>
					<ul class="navigation">
						<li><a href="{{ URL::base() }}">Home</a></li>
						<li><a href="#">Student's corner</a></li>
						<li><a href="#">Courses</a></li>
						<li><a href="#">Online help</a></li>
						<li><a href="#">Contact me</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="mainbodyribbon">
			<div class="container_12">
				<div class="grid_9">
					@section('Mainpane')
					{{ HTML::image('img/banner-mainpage.png','Image') }}
					<div id="intro" class="mathsblock">
						<h1>About Maths-jee Tutorials</h1>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
					</div>
					<div id="courses" class="mathsblock">
						<h1>Courses Offered</h1>
						<p>
							<ul id="courses_list">
								<li>1 year IIT-JEE maths preparation</li>
								<li>2 years IIT-JEE maths preparation</li>
								<li>1 year AIEEE maths preparation</li>
								<li>2 years AIEEE maths preparation</li>
								<li>10th/12th Board exams maths preparation</li>
							</ul>
							<div class="clear"></div>
						</p>
					</div>
					<div id="stars" class="mathsblock">
						<h1>Star performers of Maths-jee Tutorials</h1>
						<div class="stars_gallery">
							<div class="star">
								{{ HTML::image('img/star-placeholder.png') }}
								<p class="star_name">Rajat Saxena</p>
								<p class="star_position">IIT-JEE - Rank 23</p>
							</div>
							<div class="star">
								{{ HTML::image('img/star-placeholder.png') }}
								<p class="star_name">Rajat Saxena</p>
								<p class="star_position">IIT-JEE - Rank 23</p>
							</div>
							<div class="star">
								{{ HTML::image('img/star-placeholder.png') }}
								<p class="star_name">Rajat Saxena</p>
								<p class="star_position">IIT-JEE - Rank 23</p>
							</div>
							<div class="star">
								{{ HTML::image('img/star-placeholder.png') }}
								<p class="star_name">Rajat Saxena</p>
								<p class="star_position">IIT-JEE - Rank 23</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div id="contact" class="mathsblock">
						<h1>Contact Maths-jee Tutorials</h1>
						<p><span id="phone" class="mathsspan grid_4 alpha">+91-9999900000</span><span id="email" class="mathsspan grid_4">contact@mathsjee.in</span></p>
					</div>
					@yield_section
				</div>
				<div class="grid_3">
					@section('Sidepane')
					<p>Testing side pane</p>
					@yield_section
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="mainfooterribbon">
			<div class="container_12">
				<div class="grid_12" id="footer_menu">
					<a href="#">Terms and conditions</a> / 
					<a href="#">Privacy policy</a> /
					&copy; 2013 - Mathsjee classes
				</div>
				<div class="clear"></div>
				<div class="grid_12" id="agency">
					<p>Designed and developed by Rajat Saxena</p>
				</div>
			</div>
		</div>
	</body>
</html>