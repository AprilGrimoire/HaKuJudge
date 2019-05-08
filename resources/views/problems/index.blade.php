@extends('layouts/default')

@section('content')
    @foreach ($problems as $problem)
        <a href="{{ route('problems.show', $problem) }}">{{ $problem->title }}</a><br />
    @endforeach
    {!! $problems->render() !!}
@stop
