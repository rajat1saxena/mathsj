@layout('layouts/main')

@section('Mainpane')
<div class="fdsf">
	@if (Auth::check())
		<div class="mathsblock">
			<h1>Study material for: {{ Course::find(Auth::user()->course_id)->course }}</h1>
			@foreach (Course::find(Auth::user()->course_id)->papers()->get() as $each)
			<p><a href="/study/papers/{{ $each->id }}">{{ $each->title }}</a></p>
			@endforeach
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