@extends('layouts.sidebar')

@section('title')
    Transaction | Pemilik
@endsection

@push('addon-style')
<link rel="stylesheet" href="/assets/css/pages/fontawesome.css">
<link rel="stylesheet" href="/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="/assets/css/pages/datatables.css">
<script type="text/javascript"
src="https://app.sandbox.midtrans.com/snap/snap.js"
data-client-key="{{ config('midtrans.client_key') }}"></script>
@endpush

@section('content')
<div id="main">


    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
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
                            <th>Status</th>
                            {{-- <th>action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $transaction)
                        {{-- {{ dd($transaction) }} --}}
                        <tr>
                            <td>{{ $no++; }}</td>
                            <td>{{ $transaction->nama_kost }}</td>
                            <td>{{ $transaction->no_kamar }}</td>
                            <td>{{ $transaction->nama_pemesan }}</td>
                            <td>{{ $transaction->durasi_sewa }} Bulan</td>
                            <td>{{ $transaction->tgl_sewa }}</td>
                            <td>{{ $transaction->total_price }}</td>
                            @if($transaction->status == 'unpaid' )
                            <td><span class="badge bg-danger">unpaid</span></td>
                            @elseif($transaction->status == 'paid' )
                            <td><span class="badge bg-success">paid</span></td>
                            @else
                            <td><span class="badge bg-danger">cancel</span></td>
                            @endif

                            {{-- @if($transaction->status == 'unpaid' )
                            <td><button class="btn btn-success btn-lg" id="pay-button">Bayar</button></td>
                            @elseif($transaction->status == 'paid' )
                            <td><span class="badge bg-success">Pembayaran Selesai</span></td>
                            @else
                            <td><span class="badge bg-danger">cancel</span></td>
                            @endif --}}
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
@endpush