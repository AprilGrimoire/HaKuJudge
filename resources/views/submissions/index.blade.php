@extends('layouts.default')
@section('head')
    <title>提交记录</title>
@stop
@section('content')
<link href="/tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="/tablecloth/tablecloth.js"></script> 
	<table cellspacing="0" cellpadding="0" class="submission_container">
		<tr>
				<th>评测ID</th>
				<th>题目</th>
				<th>状态</th>
				<th>得分</th>
				<th>运行时间</th>
				<th>运行空间</th>
				<th>提交用户</th>
		</tr>
    @foreach ($submissions as $submission)
    <tr>
        <td class="sub_id">{{ $submission->id }}</td>
        <td class="sub_name"><a href="{{ route('problems.show', $submission->problem) }}">{{ $submission->problem->title }}</a></td>
        <td class="sub_state"><a href="{{ route('submissions.show', $submission) }}">{{ $submission->status }}</a></td>
        <td class="sub_score">{{ isset($submission->score)?$submission->score:"N/A" }}</td>
        <td class="sub_time">{{ $submission->time? $submission->time."ms":"N/A" }}</td>
        <td class="sub_memory">{{ $submission->memory?strval(round(intval($submission->memory)/1000000,3))."MB":"N/A" }}</td>
        <a href="{{ route('submissions.show', $submission) }}"></a>
        <td class="sub_user">{{ $submission->user->name }}</td>
    </tr>
    @endforeach
</table>
    <div class="text-center">
            {!! $submissions->render() !!}
    </div>
@endsection
