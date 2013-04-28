@layout('layouts/main')

@section('Mainpane')
<div class="big">
	@if (Auth::check())
		<div class="mathsblock">
			@if (Session::get('saved'))
				<h1>Doubt sent!</h1>
				<p>Your doubt has been sent to your teacher successfully.<a href="/doubts">Ask another doubt</a>.</p>
			@else
				<h1>Post your question</h1>
				@if ($errors->has('doubt'))
				@foreach ($errors->get('doubt','<p class="error">Please enter something!</p>') as $doubt_error)
				{{ $doubt_error }}
				@endforeach
				@endif
				{{ Form::open('doubts','post') }}
				{{ Form::token() }}
				{{ Form::textarea('doubt') }}
				{{ Form::submit('Ask') }}
				{{ Form::close() }}
			@endif
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