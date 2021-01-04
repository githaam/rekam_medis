@extends('layouts.master')
@section('title', 'Add Data Login')
@section('content')

  {{--

  Gunakan kode ini sebagai pemberitahuan atau peringatan sebelum mengedit data!

  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Ini berisi data poliklinik</li>
  </ol>

  --}}
  <div class="card mb-4 mt-4">
      <div class="card-body">
        <div class="card-header"><h4 class="my-2">Add Data Login</h4></div>
            <form class="" action="/data_login/" method="POST">
                <div class="form-group">
                  <label class="small mb-1" for="inputText">Username</label>
                  <input class="form-control py-4 @if ($errors -> has('username')) is-invalid @endif" type="text" name="username" placeholder="Masukkan Username" value="{{ old('username') }}"/>
                </div>
                @if ($errors -> has('username'))
                  <label class="small mb-1 text-danger" for="inputText">{{ $errors -> first('usernam')}}</label>
                @endif
                <div class="form-group">
                  <label class="small mb-1" for="inputText">Password</label>
                  <input class="form-control py-4 @if ($errors -> has('password')) is-invalid @endif" type="password" name="password" placeholder="Masukkan Password"/>
                  @if ($errors -> has('password'))
                    <label class="small mb-1 text-danger" for="inputText">{{ $errors -> first('password') }}</label>
                  @endif
                </div>
                <div class="form-group">
                  <label class="small mb-1" for="inputPassword">Konfirmasi Password</label>
                  <input class="form-control py-4 @if ($errors -> has('password_confirmation')) is-invalid @endif" type="password" name="password_confirmation" placeholder="Konfirmasi Password Baru"/>
                  @if ($errors -> has('password_confirmation'))
                    <label class="small mb-1 text-danger" for="inputText">{{ $errors -> first('password_confirmation') }}</label>
                  @endif
                </div>
                <div class="form-group">
                  <label class="small mb-1" for="inputText">Level</label>
                  <select class="form-control py-1" name="level">
                    <option value=" " @if(old('level') == NULL) selected @endif>-- Pilih level -- </option>
                    @foreach ($values as $value)
                      <option value="{{ $value }}" @if(old('level') === $value) selected @endif>{{ ucfirst($value)}}</option>
                    @endforeach
                  </select>
                  @if ($errors -> has('level'))
                    <label class="small mb-1 text-danger" for="inputText">{{ $errors -> first('level') }}</label>
                  @endif
                </div>
                <div class="form-group mt-4 mb-0 float-right">
                  <a class="btn btn-link" href="/data_login/">Back</a>
                  <button type="submit" class="btn btn-primary">Create</button>
                  @csrf
                </div>
            </form>
      </div>
  </div>


@endsection

