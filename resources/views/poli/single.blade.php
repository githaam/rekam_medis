@extends('layouts.master')
@section('title', 'Data Poliklinik')
@section('content')

  {{--

  Gunakan kode ini sebagai pemberitahuan atau peringatan sebelum mengedit data!

  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Ini berisi data poliklinik</li>
  </ol>

  --}}
  <div class="card mb-4 mt-4">
      <div class="card-body">
        <div class="card-header"><h4 class="my-2">Data Poliklinik</h4></div>
            <form class="" action="" method="">
                <div class="form-group">
                  <label class="small mb-1" for="inputText">Nama Poliklinik</label>
                  <input disabled class="form-control py-4" type="text" name="nm_poli" value="{{ $poliklinik -> nm_poli }}"/>
                </div>
                <div class="form-group">
                  <label class="small mb-1" for="inputText">Lantai Poli</label>
                  <input disabled class="form-control py-4" type="text" name="lantai" value="{{ $poliklinik -> lantai }}"/>
                </div>
                <div class="form-group mt-4 mb-0 float-right">
                  <a class="btn btn-link" href="/poli/">Back</a>
                  <a class="btn btn-primary" href="/poli/{{ $poliklinik -> kd_poli }}/edit">Edit</a>
                </div>
            </form>
      </div>
  </div>


@endsection
