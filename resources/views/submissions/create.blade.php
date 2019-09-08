@extends('layouts.default')

@section('head')
	<title>提交代码</title>
@endsection

@section('content')
    <link href="/tablecloth/problemcloth.css" rel='stylesheet' type='text/css' />
	<div class="submit">
		<div class="submit_heading"><h2> 提交你的代码 - {{ $problem_id }}</h2></div>
		<form action="{{ route('submissions.store') }}" method="post">
			<div class="submit_text">
				<textarea autofocus name="source" id="submit_section"> </textarea>
			</div>
			<input name="problem_id" type="hidden" value="{{ $problem_id }}">
    	    {{ csrf_field() }}
    	    <input type="submit" class="btn btn-success btn-sm" value="提交!">
		</form>
	</div>
@stop
