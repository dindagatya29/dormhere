@extends('layouts.sidebar')

@section('title')
    Data Kost|Admin
@endsection

@push('addon-style')
<link rel="stylesheet" href="/assets/css/pages/fontawesome.css">
<link rel="stylesheet" href="/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="/assets/css/pages/datatables.css">
    
@endpush

@section('content')
<div id="main">


    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                Jquery Datatable
            </div>
            <div class="card-body">
                <table class="table" id="datakost">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>Nama kos</th>
                            <th>alamat</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->id }}</td>
                           <td> <img src="{{ Storage::url($item->foto) }}" style="max-height: 48px;" alt="" /></td>
                            <td>{{ $item->nama_kost }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            @if($item->status == 1)
                            <td><span class="badge bg-success">active</span></td>
                            @endif
                            @if($item->status == 2)
                            <td><span class="badge bg-danger">inactive</span></td>
                            @endif
                            @if($item->status == 3)
                            <td> <span class="badge bg-secondary">Pending</span></td>
                            @endif
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                     Aksi
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a data-bs-toggle="modal" data-bs-target="#editkost{{$item->id}}" class="dropdown-item">Edit</a></li>

                                    </ul>
                                  </div>
                            </td>
                        </tr>
                        @endforeach

                        @include('pages.admin.kost.edit')
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->
</div>



        </div>
@endsection

@push('addon-script')
<script src="/assets/extensions/jquery/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="/assets/js/pages/datatables.js"></script>


@endpush

