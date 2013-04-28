@layout('layouts/main')

@section('Mainpane')
<div class="mathsblock">
	{{ Form::open('contact','post') }}
	{{ Form::label('email_lbl','Your email') }}
	{{ Form::text('email') }}
	{{ Form::label('query_lbl','Your query') }}
	{{ Form::textarea('query') }}
	{{ Form::submit('Submit your query'); }}
	{{ Form::close() }}
</div>
@endsection