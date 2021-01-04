@extends('layouts.master')
@section('title', 'Add Data Poliklinik')
@section('content')

  {{--

  Gunakan kode ini sebagai pemberitahuan atau peringatan sebelum mengedit data!

  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Ini berisi data poliklinik</li>
  </ol>

  --}}
  <div class="card mb-4 mt-4">
      <div class="card-body">
        <div class="card-header"><h4 class="my-2">Add Data Poliklinik</h4></div>
            <form class="" action="/poli/" method="POST">
                <div class="form-group">
                  <label class="small mb-1" for="inputText">Nama Poliklinik</label>
                  <input class="form-control py-4 @if ($errors -> has('nm_poli')) is-invalid @endif" type="text" name="nm_poli" placeholder="Nama Poliklinik" value="{{ old('nm_poli') }}"/>
                </div>
                @if ($errors -> has('nm_poli'))
                  <label class="small mb-1 text-danger" for="inputText">{{ $errors -> first('nm_poli')}}</label>
                @endif
                <div class="form-group">
                  <label class="small mb-1" for="inputText">Lantai Poli</label>
                  <input class="form-control py-4 @if ($errors -> has('lantai')) is-invalid @endif" type="text" name="lantai" placeholder="Posisi Poli" value="{{ old('lantai') }}"/>
                  @if ($errors -> has('lantai'))
                    <label class="small mb-1 text-danger" for="inputText">{{ $errors -> first('lantai') }}</label>
                  @endif
                </div>
                <div class="form-group mt-4 mb-0 float-right">
                  <a class="btn btn-link" href="/poli/">Back</a>
                  <button type="submit" class="btn btn-primary">Create</button>
                  @csrf
                </div>
            </form>
      </div>
  </div>


@endsection

