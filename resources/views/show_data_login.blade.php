@extends('master')

@section('title', 'Show Data Login')

@section('content')

  <h1>Selamat datang, {{ $login -> username }}</h1>
  <hr>
  <h3><a href="/data_login/{{ $login -> kd_user }}/edit">Edit</a></h3>
  <form class="" action="/data_login/{{ $login -> kd_user }}" method="post">
    <input type="submit" name="submit" value="DELETE DATA">
    @csrf
    <input type="hidden" name="_method" value="DELETE"><br>

  </form>
  <hr>
  <p>username : <b> {{ $login -> username }} </b>
    <br>
    password : {{ $login -> password }}
    <br>
    level : {{ $login -> level }}
  </p>
@endsection
