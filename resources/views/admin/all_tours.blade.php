@extends('layout.header')
@section('title', 'Все заявки')
@section('content')

@error('message')
<script>alert("{{   $message}}");</script>
@enderror

<div class="container-fluid" >
<a href="{{route('create_tour')}}" class="btn btn-primary">Создать тур</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Фото тура</th>
      <th scope="col">Название</th>
      <th scope="col">Цена</th>
      <th scope="col">Даты тура</th>
    </tr>
  </thead>
  <tbody>
    @if ($count !=0)
    @foreach ($tours as $tour)
    <tr>
      <td><img src="{{asset('images/'.$tour->image.'')}}" alt="..." class="img_admin"></td>
      <th scope="row">{{$tour->name}}</th>
      <td>{{$tour->price}} руб.</td>
      <td>{{substr($tour->date_start, 8, 2).'.'.substr($tour->date_start, 5, 2).'.'.substr($tour->date_start, 0, 4).' - '.substr($tour->date_end, 8, 2).'.'.substr($tour->date_end, 5, 2).'.'.substr($tour->date_end, 0, 4)}}</td>
    </tr>
@endforeach

@else
<div class="vh2">Нет заявок</div>
@endif

   
   
  </tbody>
</table>
</div>
@endsection