@extends('layouts.default')

@section('sidebar')@endsection

@section('content')
  <h5>Adicionar businesses</h5>
  <form method="POST" action="{{ route('businesses.store') }}">
    @csrf
    @foreach($errors->all() as $error)
      {{ $error }}
    @endforeach

    <br>
    <br>
    <input 
      type="text"
      name="name"
      value="{{ old('name') }}"
    >
    @error('name')
      {{ $message }}
    @enderror
    <br>
    <input 
      type="text" 
      name="email"
      value="{{ old('email') }}"
    >
    @error('email')
      {{ $message }}
    @enderror
    <br>
    <input 
      type="text" 
      name="address"
      value="{{ old('address') }}"
    >
    <br>
    <button type="submit">Salvar</button>
  </form>

  <hr>

  @foreach($businesses as $business)
    {{ $business->name }} aeee {{ $business->email }} <br>
  @endforeach

@endsection