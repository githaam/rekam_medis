@extends('master')

@section('title', 'Data Login')

@section('content')

  <h1>Selamat datang di Halaman Data Login</h1>
  <hr>
  <h3><a href="/create_data_login/">Tambah</a></h3>
  <hr>
  @foreach ($logins as $login)
    <li><a href="/data_login/{{ $login -> kd_user }}">{{$login -> username}} - {{ $login -> level }}</a></li>
  @endforeach

  <?php /*
  @if (count($colors) > 5)
    <h3>warnanya lebih dari 5</h3>
  @else
    <h3>warna kuang dari 5</h3>
  @endif

   ini lagi nyba unescaped string alias string yang tidak difilter
  {!! $unescaped !!}
  */?>

@endsection
