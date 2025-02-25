@extends('layout.header')
@section('title', 'Создание тура')
@section('content')

@error('message')
<script>alert("{{$message}}");</script>
@enderror

@error('name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

@error('description')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

@error('price')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

@error('date_start')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

@error('date_end')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

@error('image')
<div class="alert alert-danger">{{ $message }}</div>
@enderror


<div class="vh2"></div>
<div class="container-fluid">
    <h3>Создание тура</h3>
</div>
<div class="vh2"></div>
<div class="container-fluid">
<form action="{{route('create_tour_db')}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Название тура</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Описание тура</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="description">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Цена тура</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="price">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Дата начала тура</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="date_start" min="<?=date('Y-m-d')?>" max="<?php
                    $date = date_create();
                    date_modify($date, "+1 year"); 
                    $date_new = date_format($date, "Y-m-d");
                    echo $date_new;
                    ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Дата окончания тура</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="date_end" min="<?=date('Y-m-d')?>" max="<?php
                    $date = date_create();
                    date_modify($date, "+1 year"); 
                    $date_new = date_format($date, "Y-m-d");
                    echo $date_new;
                    ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Изображение тура</label>
    <input type="file" class="form-control" id="exampleInputEmail1" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>
</div>

@endsection