@layout('layouts/main')

@section('Mainpane')
<div class="big">
	@if (Auth::check())
		<div class="mathsblock">
			<h1 class="grid_7 alpha beta">Doubts corner</h1>
			<a href="/doubts" class="button" class="grid_1 alpha beta">Ask doubt</a>
			<div class="clear"></div>
			<div class="prev_doubts">
				@if (User::find(Auth::user()->id)->doubts()->count()>'0')
					<h4><u>Your previous doubts</u></h4>
					@foreach (User::find(Auth::user()->id)->doubts()->get() as $doubted)
					<p class="question">
						Q. {{ $doubted->doubt }}
						<a href="/doubts/delete/{{ $doubted->id }}">delete</a>
					</p>
					<p>
						A. @if ($doubted->answer=='')
						No answer yet
						@else
						{{ $doubted->answer }}
						@endif
					</p>
					@endforeach
				@else
					<p>No previous doubts.</p>
				@endif
			</div>
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