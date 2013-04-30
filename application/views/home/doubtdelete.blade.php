@layout('layouts/main')

@section('Mainpane')
<div class="fdsf">
	@if (Auth::check())
		<div class="mathsblock">
			<h1>Doubt delete</h1>
			<p>Are you sure you want to delete the following doubt?</p>
			<p class="question">{{ Doubt::find($to_be_del)->doubt }}</p>
			<a class="button" href="/doubts/delete/yes/{{ $to_be_del }}">Yes</a>
			<a class="button" href="/doubtscorner">No</a>
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