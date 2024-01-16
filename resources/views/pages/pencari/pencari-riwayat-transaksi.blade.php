@extends('layouts.sidebar')

@section('title')
    Transaction|Admin
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
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kost</th>
                            <th>No.kamar</th>
                            <th>Nama Penyewa</th>
                            <th>Durasi Sewa</th>
                            <th>Tanggal Mulai Ngekos</th>
                            <th>Total Harga</th>
                            <th>Status</th>>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $transaction)
                        <tr>
                            <td>{{ $no++; }}</td>
                            <td>{{ $transaction->nama_kost }}</td>
                            <td>{{ $transaction->no_kamar }}</td>
                            <td>{{ $transaction->nama_pemesan }}</td>
                            <td>{{ $transaction->durasi_sewa }} Bulan</td>
                            <td>{{ $transaction->tgl_sewa }}</td>
                            <td>{{ $transaction->total_price }}</td>
                            @if($transaction->status == 'paid' )
                            <td><span class="badge bg-success">Pembayaran Selesai</span></td>
                            @elseif($transaction->status == 'batal' )
                            <td><span class="badge bg-danger">cancel</span></td>
                            @endif
                        </tr>
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


<script type="text/javascript">
    $(document).ready(function () {
       $('#RiwayatTransaction').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: '{{ url()->current() }}',
            columns : [
                {data: 'foto', name: 'foto'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'username', name: 'username'},
                {data: 'nik', name: 'nik'},
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

