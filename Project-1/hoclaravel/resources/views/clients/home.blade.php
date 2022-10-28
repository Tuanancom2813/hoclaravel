@extends('layouts.client')
@section('title')
    {{$title}}
@endsection

@section('sidebar')
    @parent
    <h3> Home sidebar </h3>
@endsection

@section('content')
    <h1>Trang chủ</h1>
    @datetime("2022-9-21 7:50:51")
    @datetime("2022-10-1 9:0:0")
@endsection

@section('css')

@endsection

@section('js')

@endsection