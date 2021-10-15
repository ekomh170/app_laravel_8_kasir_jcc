@extends('layouts.master')
@push('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.css" />
@endpush
@section('judul')
Aplikasi Kasir | Project 2 Laravel JCC
@endsection
@section('judul_sub')
Data Pengguna Aplikasi Kasir
@endsection
@section('content')
<a href="{{ url('user/create') }}"><button type="button" class="btn btn-outline-primary"><i
            class="fas fa-plus-square"></i></button></a>
<a href="{{ url('pdf-user') }}"><button type="button" class="btn btn-outline-danger"><i
            class="fas fa-file-pdf"></i></button></a>
<a href="{{ url('print-user') }}"><button type="button" class="btn btn-outline-warning"><i
            class="fas fa-print"></i></button></a>
<a href="{{ url('excel-user') }}"><button type="button" class="btn btn-outline-success"><i
            class="fas fa-file-excel"></i></button></a>
<div class="h2 mb-3 text-center">Data Pengguna Aplikasi Kasir</div>
<hr style="width:75%">
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengguna Aplikasi Kasir</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Waktu Dibuat</th>
                        <th>Waktu Diupdate</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Waktu Dibuat</th>
                        <th>Waktu Diupdate</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($user as $item => $key)
                    <tr>
                        <td>{{ $item + 1 }}</td>
                        <td>{{ $key->name }}</td>
                        <td>{{ $key->username }}</td>
                        <td>{{ $key->email }}</td>
                        <td>{{ $key->role }}</td>
                        <td>{{ $key->created_at }}</td>
                        <td>{{ $key->updated_at }}</td>
                        <td class="text-center">
                            <a href="/user/{{$key->id}}" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                            @auth
                            <a href="/user/{{$key->id}}/edit" class="btn btn-outline-primary"><i
                                    class="far fa-edit"></i></a>
                            <form action="/user/{{$key->id}}" method="POST" class="display-non">
                                @csrf
                                @method('DELETE')
                                <button input type="submit" class="btn btn-outline-danger my-1" value="Delete"><i
                                        class="far fa-trash-alt"></i></button>
                            </form>
                            @endauth
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(function () {
    $("#example1").DataTable();
  });
</script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.js"></script>
@endpush
@endsection
