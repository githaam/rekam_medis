@extends('layouts.master')
@section('title', 'Data Poliklinik')
@section('content')
  {{-- <h1 class="mt-4">Data Poliklinik</h1>
  --}}
  <ol class="breadcrumb mb-4 mt-4">
      <li class="breadcrumb-item active">!! Harap diperhatikan data yang ada.</li>
  </ol>
  <div class="card mb-4">
      <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Poliklinik
        <a class="btn btn-primary float-right" href="/poli/create">Add New Data</a></div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>Nama Poli</th>
                          <th>Lantai</th>
                          <th class="col-md-2">Action</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>Nama Poli</th>
                          <th>Lantai</th>
                          <th class="col-md-2">Action</th>
                      </tr>
                  </tfoot>
                  <tbody>
                  @foreach ($poliklinik as $poli)
                      <tr>
                        <td>Poli {{ $poli -> nm_poli }}</td>
                        <td>{{ $poli -> lantai }}</td>
                        <td class="col-md-4">
                          <form>
                            <button type="submit" class="btn btn-info" formaction="/poli/{{ $poli -> kd_poli }}">View</button>
                            <button type="submit" class="btn btn-primary" formaction="/poli/{{ $poli -> kd_poli }}/edit">Update</button>
                            <a class="btn btn-danger" href="/poli/{{ $poli -> kd_poli }}/delete">Delete</a>

                          </form>
                        </td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>


@endsection
