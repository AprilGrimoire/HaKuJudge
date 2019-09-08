@extends('layouts.default')

@section('head')
    <title>提交详情</title>
@endsection

@section('content')
    @php
        $detail = json_decode($submission->detail);
    @endphp
    {{ $submission->problem->title }} {{ $submission->user->name }}
    {{ $submission->status }} {{ $submission->score }} <br />
    <pre>
{{ $submission->source }}
    </pre>
    @if($detail)
        @foreach($detail as $point)
            {{ $point->id }} {{ $point->score }} {{ $point->status }} {{ $point->time }} {{ $point->memory }}<br />
        @endforeach
    @endif
@stop
