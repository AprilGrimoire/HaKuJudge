@extends('layouts.default')

@section('content')
    <a href="{{ route('home') }}">用户</a><br />
    <a href="{{ route('problems.index') }}">题目列表</a><br />
@stop
