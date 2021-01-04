@extends('layouts.master')
@section('title', 'Data Login')
@section('content')
  {{-- <h1 class="mt-4">Data Poliklinik</h1>
  --}}
  <ol class="breadcrumb mb-4 mt-4">
      <li class="breadcrumb-item active">!! Harap diperhatikan data yang ada.</li>
  </ol>
  <div class="card mb-4">
      <div class="card-header"><i class="fas fa-table mr-1"></i>Data Table Login
        <a class="btn btn-primary float-right" href="/data_login/create">Add New Data</a></div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>Username</th>
                          <th>Level</th>
                          <th class="col-md-2">Action</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>Username</th>
                          <th>Level</th>
                          <th class="col-md-2">Action</th>
                      </tr>
                  </tfoot>
                  <tbody>
                  @foreach ($logins as $login)
                      <tr>
                        <td>{{ $login -> username }}</td>
                        <td>{{ ucfirst($login -> level) }}</td>
                        <td class="col-md-4">
                          <form>
                            <button type="submit" class="btn btn-info" formaction="/data_login/{{ $login -> kd_user }}">View</button>
                            <button type="submit" class="btn btn-primary" formaction="/data_login/{{ $login -> kd_user }}/edit">Update</button>
                            <a class="btn btn-danger" href="/data_login/{{ $login -> kd_user }}/delete">Delete</a>
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
