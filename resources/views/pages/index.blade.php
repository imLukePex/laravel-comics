@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <ul class="d-flex list-unstyled flex-wrap">
            @foreach ($comics as $comic)
            <li class="flex-column col-2">
                <img src="{{ $comic['thumb'] }}" width="170px" alt="">
                {{ $comic['title'] }}
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
