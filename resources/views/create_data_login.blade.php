@extends('master')

@section('title', 'Create Data Login')

@section('content')

  <h1>Create data login</h1>
  <hr>

  <form class="" action="/data_login/" method="post">
  username :  <input type="text" name="username" value="{{ old('password') }}">
  @if ($errors -> has('username'))
    <p>{{ $errors -> first('username') }}</p>
  @endif
  <br>
  password :  <input type="password" name="password" value="">
  @if ($errors -> has('password'))
    <p>{{ $errors -> first('password') }}</p>
  @endif
  <br>
  level : <select class="" name="level">
    <option value=" ">-- Pilih level -- </option>
    <option value="admin">Admin</option>
    <option value="dokter">Dokter</option>
    <option value="operator">Operator</option>
  </select>
  @if ($errors -> has('level'))
    <p>{{ $errors -> first('level') }}</p>
  @endif
  <br>
    <input type="submit" name="submit" value="Create">
    @csrf

  </form>
@endsection
