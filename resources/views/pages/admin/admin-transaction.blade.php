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
                            <td><span class="badge bg-success">Paid</span></td>
                            @elseif($transaction->status == 'unpaid' )
                            <td><span class="badge bg-danger">Unpaid</span></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mb-6">
            <a href="pdf" class="btn btn-danger btn-sm">
                Cetak PDF
            </a>
        </div>
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
        var i =1;
       $('#transactionadmin').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: '{{ url()->current() }}',
            columns : [
                {
                    "render": function() {
                        return i++;
                    }
                },
                {data: 'id', name: 'id'},
                {data: 'user_id', name: 'user_id'},
                {data: 'kamar_id', name: 'kamar_id'},
                {data: 'kode_pemesanan', name: 'kode_pemesanan'},
                {data: 'nama_pemesan', name: 'nama_pemesan'},
                {data: 'tgl_pemesanan', name: 'tgl_pemesanan'},
                {data: 'durasi_sewa', name: 'durasi_sewa'},
                {data: 'harga_kamar', name: 'harga_kamar'},
                {data: 'tgl_bayar', name: 'tgl_bayar'},
                {data: 'total_pembayaran', name: 'j'},
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

