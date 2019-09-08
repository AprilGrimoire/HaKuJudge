@extends('layouts.default')

@section('head')
	<title>题目详情</title>
@endsection

@section('content')
    <link href="/tablecloth/problemcloth.css" rel='stylesheet' type='text/css' />
	<div class="problem_frontend">  
		<div class="heading"><h2>题目名称：{{ $problem->title }}</h2></div>
		<div class="content_heading"><h2>题目描述：</h2></div>
		<div class="content">{{ $problem->description }}</div>
		<a href="{{ route('submissions.create') }}?problem_id={{$problem->id}}" class="btn btn-success btn-sm problem_frontend_submit">提交代码</a>
	</div>
@stop
