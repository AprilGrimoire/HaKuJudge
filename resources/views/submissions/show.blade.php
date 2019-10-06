@extends('layouts.default')

@section('head')
    <title>提交详情</title>
@endsection

@section('content')
    <link href="/tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
    <script type="text/javascript" src="/tablecloth/tablecloth.js"></script> 
    @php
        $detail = json_decode($submission->detail);
    @endphp
    <h2>提交记录#{{$submission->id}}</h2>
    <table cellspacing="0" cellpadding="0" class="submission_container">
        <tr>
                <th>题目</th>
                <th>状态</th>
                <th>得分</th>
                <th>运行时间</th>
                <th>运行空间</th>
                <th>提交用户</th>
        </tr>

        <tr>
            <td class="sub_name"><a href="{{ route('problems.show', $submission->problem) }}">{{ $submission->problem->title }}</a></td>
            <td class="sub_state std_state">{{ $submission->status }}</td>
            <td class="sub_score">{{ isset($submission->score)?$submission->score:"N/A" }}</td>
            <td class="sub_time">{{ $submission->time? $submission->time."ms":"N/A" }}</td>
            <td class="sub_memory">{{ $submission->memory?strval(round(intval($submission->memory)/1000000,3))."MB":"N/A" }}</td>
            <td class="sub_user">{{ $submission->user->name }}</td>
        </tr>
    </table>
    <h3>源代码：</h3>
    <div class="submission_container"><pre>
{{ $submission->source }}
    </pre></div>
    <h3>测试点详情：</h3>
    @if($detail)
    <table cellspacing="0" cellpadding="0" class="submission_container">
        <tr>
            <th>测试点</th>
            <th>状态</th>
            <th>得分</th>
            <th>运行时间</th>
            <th>运行空间</th>
        </tr>
        @foreach($detail as $point)
        <tr>
            <td class="sub_id detail_id">{{ $point->id }}</td>
            <td class="sub_state detail_state">{{ $point->status }}</td>
             <td class="sub_score detail_score" >{{ $point->score }}</td>
              
              <td class="sub_time detail_time"> {{ $point->time? $point->time*(1000)."ms":"N/A" }} </td>
              <td class="sub_memory detail_memory">{{ $point->memory?strval(round(intval($point->memory)/1000,3))."MB":"N/A" }}</td>
        </tr>
        @endforeach
    </table>
    @endif
@stop
