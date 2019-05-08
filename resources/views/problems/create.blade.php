@extends('layouts.default')

@section('content')
    <form action="{{ route('problems.store') }}" method="POST" enctype="multipart/form-data">
        <input type="text" name="title" />
        <textarea name="description"></textarea>
        <input type="file" name="testdata" />
        {{ csrf_field() }}
        <input type="submit" />
    </form>
@stop
