@extends('layouts.default')

@section('content')
    @foreach ($submissions as $submission)
        {{ $submission->id }} {{ $submission->user->name }} {{ $submission->problem->name }}
        {{ $submission->status }}
        @if ($submission->score)
            {{ $submission->score }}
        @endif
        <br />
    @endforeach
    {{ $submissions->render() }}
@stop
