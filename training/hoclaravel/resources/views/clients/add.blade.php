@extends('layouts.client')
@section('title')
    {{$title}}
@endsection


@section('content')
    <h1>Thêm sản phẩm</h1>
    <form action="" method="post">
        <input type="text" name="username">
        <button type="submit"> Submit </button>
        @csrf
    </form>
@endsection

@section('css')

@endsection

@section('js')

@endsection