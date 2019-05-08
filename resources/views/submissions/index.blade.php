@extends('layouts.default')

@section('content')
    @foreach ($submissions as $submission)
        <a href="{{ route('submissions.show', $submission) }}">{{ $submission->id }} {{ $submission->user->name }} {{ $submission->problem->title }}
        {{ $submission->status }} {{ $submission->score }}
        {{ $submission->time }} {{ $submission->memory }}</a>
        <br />
    @endforeach
    {{ $submissions->render() }}
@stop
