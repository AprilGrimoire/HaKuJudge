@extends('layouts.default')

@section('content')
    <h3>{{ $problem->title }}</h3>
    <p>{{ $problem->description }}</p>
    <form action="{{ route('submissions.create') }}" method="get">
        <input name="problem_id" type="hidden" value="{{ $problem->id }}" />
        <input type="submit" value="提交"/>
    </form>
@stop
