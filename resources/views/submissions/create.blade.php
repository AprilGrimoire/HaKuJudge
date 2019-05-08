@extends('layouts.default')

@section('content')
    <form action="{{ route('submissions.store') }}" method="post">
        <textarea name="source"></textarea>
        <input name="problem_id" type="hidden" value="{{ $problem_id }}">
        {{ csrf_field() }}
        <input type="submit">
    </form>
@stop
