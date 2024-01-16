@extends('layouts.sidebar')

@section('title')
    User Pencari | Admin
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
                <table class="table" id="UserPencari">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            {{-- <th>NIK</th> --}}
                            <th>Alamat</th>
                            <th>No Hp</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
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


<script type="text/javascript">
    $(document).ready(function () {
        var i = 1;
       $('#UserPencari').DataTable({
            processing: true,
            serverSide: true,
            // scrollX: true,
            ajax: '{{ url()->current() }}',
            columns : [
                {
                    "render": function() {
                        return i++;
                    }
                },
                {data: 'id', name: 'id'},
                {data: 'foto', name: 'foto'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'username', name: 'username'},
                // {data: 'nik', name: 'nik'},
                {data: 'alamat', name: 'alamat'},
                {data: 'no_hp', name: 'no hp'},
                {data: 'jenis_kelamin', name: 'jenis kelamin'},
                {
                    data: 'action', 
                    name:'action',
                    orderable : false,
                    searcable : false,
                    width:'15%'
                },
            ]
        });
 });
    </script>

@endpush

