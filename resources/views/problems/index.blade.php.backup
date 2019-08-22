@extends('layouts/default')

@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>编号</th>
                    <th>题目名称</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($problems as $problem)
                    <tr>
                        <th>{{ $problem->id }}</th>
                        <th><a href="{{ route('problems.show', $problem) }}">{{ $problem->title }}</a></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            {!! $problems->render() !!}
        </div>
    </div>
@stop
