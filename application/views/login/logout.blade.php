@layout('layouts/main')

@section('Mainpane')
<div class="fdsf">
	@if (Auth::check())
		<h1>Welcome</h1>
		<p>You're still logged in!</p>
	@else
		<h1>Successfully logged out!</h1>
		<p>Return to <a href="{{ URL::base() }}">Home</a></p>
	@endif
</div>
@endsection