@extends('master')

@section('title', 'Edit Data Login')

@section('content')

  <h1>Edit data "{{ $login -> username }}"</h1>
  <hr>

  <form class="" action="/data_login/{{ $login -> kd_user }}" method="post">
  username :  <input type="text" name="username" value="{{ $login -> username }}" disabled><br>
  password :  <input type="password" name="password" value="{{ $login -> password }}"><br>
  level : <input type="text" name="level" value="{{ $login -> level }}" disabled><br>
    <input type="submit" name="submit" value="Edit">
    @csrf
    <input type="hidden" name="_method" value="PUT"><br>

  </form>
@endsection
