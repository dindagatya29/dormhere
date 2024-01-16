@extends('layouts.sidebar')

@section('title')
    User Pemilik | Admin
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
                <table class="table" id="UserPemilik">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Alamat</th>
                            <th>No Hp</th>
                            <th>Jenis Kelamin</th>
                            <th>Surat Kontrak</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $pemilik)
                        <tr>
                            <td>{{ $no++; }}</td>
                            <td>{{ $pemilik->id }}</td>
                            <td> <img src="{{ Storage::url($pemilik->foto) }}" style="max-height: 48px;" alt="" /></td>
                            <td>{{ $pemilik->name }}</td>
                            <td>{{ $pemilik->email }}</td>
                            <td>{{ $pemilik->username }}</td>
                            <td>{{ $pemilik->alamat }}</td>
                            <td>{{ $pemilik->no_hp }}</td>
                            <td>{{ $pemilik->jenis_kelamin }}</td>
                            @if($pemilik->bukti_kontrak != 'NULL')
                            <td>Kontrak Terupload</td>
                            @elseif($pemilik->bukti_kontrak == 'NULL')
                            <td>Belum Upload Kontrak</td>
                            @endif

                            @if($pemilik->statusUser == 'valid')
                            <td><span class="badge bg-success">Valid</span></td>
                            @endif
                            @if($pemilik->statusUser == 'unvalid')
                            <td><span class="badge bg-danger">Unvalid</span></td>
                            @endif
                            @if($pemilik->statusUser == 'pending')
                            <td> <span class="badge bg-secondary">Pending</span></td>
                            @endif
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                     Aksi
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a data-bs-toggle="modal" data-bs-target="#edit{{$pemilik->id}}" class="dropdown-item">Edit</a></li>
                                    <li><a href="" class="dropdown-item text-success">Lihat Kontrak</a></li>

                                    </ul>
                                  </div>
                            </td>
                        </tr>
                        @include('pages.admin.pemilik.edit')
                        @endforeach
                        
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

