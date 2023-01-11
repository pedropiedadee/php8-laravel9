@extends('layouts.default')

@section('title', 'Meu User')

@section('sidebar')

@section('content')
  <h1>
    hello world
  </h1>

  {{ $name }} <br>

  {{ $user->name }}
@endsection