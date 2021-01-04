@extends('layouts.master')
@section('title', 'Edit Data Login')
@section('content')

  {{--

  Gunakan kode ini sebagai pemberitahuan atau peringatan sebelum mengedit data!

  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Ini berisi data poliklinik</li>
  </ol>

  --}}
  <div class="card mb-4 mt-4">
      <div class="card-body">
        <div class="card-header"><h4 class="my-2">Edit Data Login</h4></div>
            <form class="" action="/data_login/{{ $login -> kd_user }}" method="POST">
              <div class="form-group">
                <label class="small mb-1" for="inputText">Username</label>
                <input class="form-control py-4 @if ($errors -> has('username')) is-invalid @endif" type="text" name="username" disabled value="{{ $login -> username }}"/>
              </div>
              <div class="form-group">
                <label class="small mb-1" for="inputPassword">Password Saat Ini</label>
                <input class="form-control py-4 @if ($errors -> has('password') || session()->has('passwordError')) is-invalid @endif" type="password" name="password" placeholder="Masukkan Password"/>
                @if ($errors -> has('password'))
                  <label class="small mb-1 text-danger" for="inputText">{{ $errors -> first('password') }}</label>
                @elseif (session()->has('passwordError'))
                  <label class="small mb-1 text-danger" for="inputText">{{session()->get('passwordError')}}</label>
                @endif
              </div>
              <div class="form-group">
                <label class="small mb-1" for="inputPassword">Password Baru</label>
                <input class="form-control py-4 @if ($errors -> has('nPassword')) is-invalid @endif" type="password" name="nPassword" placeholder="Masukkan Password Baru"/>
                @if ($errors -> has('nPassword'))
                  <label class="small mb-1 text-danger" for="inputText">{{ $errors -> first('nPassword') }}</label>
                @endif
              </div>
              <div class="form-group">
                <label class="small mb-1" for="inputPassword">Konfirmasi Password Baru</label>
                <input class="form-control py-4 @if ($errors -> has('nPassword_confirmation')) is-invalid @endif" type="password" name="nPassword_confirmation" placeholder="Konfirmasi Password Baru"/>
                @if ($errors -> has('nPassword_confirmation'))
                  <label class="small mb-1 text-danger" for="inputText">{{ $errors -> first('nPassword_confirmation') }}</label>
                @endif
              </div>
              <div class="form-group">
                <label class="small mb-1" for="inputText">Level</label>
                <select class="form-control py-1" name="level" disabled>
                  <option value=" ">-- Pilih level -- </option>
                  @foreach ($values as $value)
                    <option value="{{ $value }}" @if($login -> level === $value) selected @endif>{{ ucfirst($value) }}</option>
                  @endforeach
                </select>
                @if ($errors -> has('level'))
                  <label class="small mb-1 text-danger" for="inputText">{{ $errors -> first('level') }}</label>
                @endif
              </div>
                <div class="form-group mt-4 mb-0 float-right">
                  <a class="btn btn-danger" href="{{url()->previous()}}">Cancel</a>
                  <button type="submit" class="btn btn-primary">Update</button>
                  @csrf<input type="hidden" name="_method" value="PUT">
                </div>
            </form>
      </div>
  </div>


@endsection
