@extends('layouts.base')
@section('content')
    @foreach ($datas as $data)
    <div class="{{ $data['class'] }}">
        <img src="{{ $data['img'] }}"/>
        <h3>{{ $data['title'] }}</h3>
        <small>{{ $data['artist'] }}</small>
        <strong>{{ $data['year'] }}</strong>
    </div>
    @endforeach
@endsection