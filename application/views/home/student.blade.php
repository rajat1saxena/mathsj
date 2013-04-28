@layout('layouts/main')

@section('Mainpane')
<div class="fdsf">
	@if (Auth::check())
		<div class="mathsblock">
			<h1>Welcome</h1>
			<a href="/doubts" class="button">Ask doubt</a>
			<a href="/study" class="button">Access study material</a>
		</div>	
	@else
		<div class="mathsblock">
			<h1>Access restricted!</h1>
			<p>You need to be a student of Maths-jee Tutorials to access this page's content.
				If you are already a student you can use the login form provided alongside
				to log in.</p>
		</div>
	@endif
</div>
@endsection