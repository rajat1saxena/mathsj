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
					<div class="grid_9">
						<ul class="navigation">
							<li><a href="{{ URL::base() }}">Home</a></li>
							<li><a href="/student">Student's corner</a></li>
							<li><a href="/courses">Courses</a></li>
							<li><a href="/help">Online help</a></li>
							<li><a href="/contact">Contact me</a></li>
						</ul>
					</div>
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
						<h1>
							About Maths-jee Tutorials
						</h1>
						<p>
							{{ DB::table('basicinfo')->first()->fullinfo }}
						</p>
					</div>
					<div id="courses" class="mathsblock">
						<h1>Courses Offered</h1>
						<p>
							<ul id="courses_list">
								@foreach (Course::all() as $course)
								<li>{{ $course->course }}</li>
								@endforeach
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
						<p><span id="phone" class="mathsspan grid_4 alpha">{{ DB::table('basicinfo')->first()->phone }}</span><span id="email" class="mathsspan grid_4"><a href="mailto:{{ DB::table('basicinfo')->first()->email }}">{{ DB::table('basicinfo')->first()->email }}</a></span></p>
					</div>
					@yield_section
				</div>
				<div class="grid_3">
					@section('login_window')
					<div class="login_window">
						@if (Auth::check())
							<p>You are logged in as</p>
							<p class="logged_in_user">{{ Auth::user()->email }}</p>
							<a href="/login/logout" class="logout_button">Logout</a>
						@else
							<p>Student Login</p>
							@if (Session::has('unable'))
							<p class="error">{{ Session::get('unable') }}</p>
							@endif
							{{ Form::open('login','post') }}
							<p class="error">
							@if ($errors->has('username'))
							@foreach ($errors->get('username','Email does not look good!') as $email_error)
							{{ $email_error }}
							@endforeach
							@endif
							</p>
							<div class="form_tuple">
								{{ Form::label('email_lbl','Email') }}
								{{ Form::email('username') }}
							</div>
							<div class="clear"></div>
							<p class="error">
							@if ($errors->has('password'))
							@foreach ($errors->get('password','Password does not look good!') as $password_error)
							{{ $password_error }}
							@endforeach
							@endif
							</p>
							<div class="form_tuple">
								{{ Form::label('pass_lbl','Password') }}
								{{ Form::password('password') }}
							</div>
							{{ Form::submit('Login') }}
							{{ Form::close() }}
						@endif
					</div>
					@yield_section
					@section('other_widgets')
	
					@foreach (Widget::all() as $widgety)
					<div class="widget">
						<h1>{{ $widgety->title }}</h1>
						<p>{{ $widgety->html }}</p>
					</div>
					@endforeach
					
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