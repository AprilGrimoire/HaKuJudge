@extends('layouts.default')

@section('content')
    <form action="{{ route('submissions.update', $submission) }}" method="post">
        <input name="status" type="text" value="{{ $submission->status }}">
        <input name="score" type="text" value="{{ $submission->score }}">
        <input name="_method" type="hidden" value="PATCH">
        {{ csrf_field() }}
        <input type="submit">
    </form>
@stop
