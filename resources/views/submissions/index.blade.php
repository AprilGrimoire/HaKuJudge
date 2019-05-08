@extends('layouts.default')

@section('content')
    @foreach ($submissions as $submission)
        {{ $submission->id }} {{ $submission->user->name }} {{ $submission->problem->title }}
        {{ $submission->status }} {{ $submission->score }}
        {{ $submission->time }} {{ $submission->memory }}
        <br />
    @endforeach
    {{ $submissions->render() }}
@stop
