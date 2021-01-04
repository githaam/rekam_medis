@extends('layouts.master')
@section('title', 'Data Login')
@section('content')

  {{--

  Gunakan kode ini sebagai pemberitahuan atau peringatan sebelum mengedit data!

  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Ini berisi data poliklinik</li>
  </ol>

  --}}
  <div class="card mb-4 mt-4">
      <div class="card-body">
        <div class="card-header"><h4 class="my-2">Data Login</h4></div>
            <form class="" action="" method="">
                <div class="form-group">
                  <label class="small mb-1" for="inputText">Username</label>
                  <input disabled class="form-control py-4" type="text" name="username" value="{{ $login -> username }}"/>
                </div>
                <div class="form-group">
                  <label class="small mb-1" for="inputText">Password</label>
                  <input disabled class="form-control py-4" type="password" name="password" value="password"/>
                </div>
                <div class="form-group">
                  <label class="small mb-1" for="inputText">Level</label>
                  <input disabled class="form-control py-4" type="text" name="lantai" value="{{ ucfirst($login -> level) }}"/>
                </div>
                <div class="form-group mt-4 mb-0 float-right">
                  <a class="btn btn-link" href="/data_login/">Back</a>
                  <a class="btn btn-primary" href="/data_login/{{ $login -> kd_user }}/edit">Edit</a>
                </div>
            </form>
      </div>
  </div>


@endsection
