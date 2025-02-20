@extends('layout.header')
@section('title', 'Каталог')
@section('content')

@error('message')
<script>alert("{{$message}}");</script>
@enderror

<div class="vh2"></div>
<div class="container-fluid">
    <h3>Каталог</h3>
    @if ($count !=0)
    @foreach ($tours as $tour)
    <div class="card" style="width: 18rem; display:inline-block; align-self:start">
        <img src="{{asset('images/'.$tour->image.'')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$tour->name}}</h5>
            <p class="card-text">{{$tour->description}}</p>
            <p class="card-text">Даты тура: {{substr($tour->date_start, 8, 2).'.'.substr($tour->date_start, 5, 2).'.'.substr($tour->date_start, 0, 4).' - '.substr($tour->date_end, 8, 2).'.'.substr($tour->date_end, 5, 2).'.'.substr($tour->date_end, 0, 4)}}</p>
            <p class="card-text">Цена: {{$tour->price}} руб.</p>
            @if (auth()->user() == null)
            <a href="{{route('login')}}" class="btn btn-primary">Подать заявку на тур</a>
            @else
            <a href="{{route('send_appl', ['id'=>$tour->id])}}" class="btn btn-primary">Подать заявку на тур</a>
            @endif
        </div>
    </div>
    @endforeach
    @else
        <div class="vh2">Нет туров</div>
    @endif
</div>

@endsection