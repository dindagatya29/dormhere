<?php

namespace App\Http\Controllers;

use App\Http\Requests\PayRequest;
use App\Models\DataKamar;
use App\Models\DataKost;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PemesananController extends Controller
{


    public function index()
    {
        $user = User::all();
        $data = DataKamar::all();

        return view(
            'pages.Pemesanan',
            [
                'data' => $data,
                'user' => $user
            ]
        );
        return response()->json([
            'data' => $data,
            'message' => 'Get Data berhasil',
        ]);
    }
    public function details($id)
    {
        $user = User::all();
        $kost = DataKamar::firstWhere('id', $id);

        return view(
            'pages.details',
            [
                // 'item' => $item,
                'kost' => $kost,
                'user' => $user
            ]
        );
    }
    public function checkout($id)
    {
        $kost = DataKamar::firstWhere('id', $id);
        return view('pages.checkout', [
            'kost' => $kost
        ]);
    }

    public function pembayaran()
    {

        $data = DB::table('transactions')
            ->join('users', 'users.id', '=', 'transactions.user_id')
            ->join('data_kamar', 'data_kamar.id', '=', 'transactions.kamar_id')
            ->join('data_kost', 'data_kost.id', '=', 'data_kamar.kost_id')
            ->select(
                'data_kost.nama_kost',
                'data_kost.id as id_kost',
                'data_kamar.id as id_kamar',
                'transactions.id as id_transaction',
                'transactions.user_id',
                'transactions.kamar_id',
                'users.id',
                'users.name',
                'data_kamar.no_kamar',
                'transactions.durasi_sewa',
                'transactions.nama_pemesan',
                'transactions.total_price',
                'transactions.tgl_sewa',
                'transactions.status',
            )
            ->where('transactions.status', 'unpaid')
            ->get();

        return view(
            'pages.pencari.pencari-transaksi',
            [
                'data' => $data,
                'no' => $no = 1,
                // 'snaptoken' => $snapToken,
            ]
        );
    }


    public function riwayat()
    {
        $loggedInUserId = Auth::user()->id;
        $data = DB::table('transactions')
            ->join('users', 'users.id', '=', 'transactions.user_id')
            ->join('data_kamar', 'data_kamar.id', '=', 'transactions.kamar_id')
            ->join('data_kost', 'data_kost.id', '=', 'data_kamar.kost_id')
            ->select(
                'data_kost.nama_kost',
                'data_kost.id as id_kost',
                'data_kamar.id as id_kamar',
                'transactions.id as id_transaction',
                'transactions.user_id',
                'transactions.kamar_id',
                'users.id',
                'users.name',
                'data_kamar.no_kamar',
                'transactions.durasi_sewa',
                'transactions.nama_pemesan',
                'transactions.total_price',
                'transactions.tgl_sewa',
                'transactions.status',
            )
            ->where('transactions.status', 'paid')
            ->where('transactions.user_id', $loggedInUserId)
            ->get();

        return view(
            'pages.pencari.pencari-riwayat-transaksi',
            [
                'data' => $data,
                'no' => $no = 1
            ]
        );

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil tampil',
            'data' => $data
        ]);
    }

    public function pay(PayRequest $request)
    {
        $data = $request->all();

        $transaction = Transaction::create($data);
        $params = array(
            'transaction_details' => array(
                'order_id' => $transaction->id,
                'gross_amount' => $transaction->total_price,
            ),
            'customer_details' => array(
                'nama_kost' => $request->kost_id,
                'nama_pemesan' => $request->nama_pemesan,
                'durasi_sewa' => $request->durasi_sewa,
                'tgl_sewa' => $request->tgl_sewa,
            ),
        );
        // dd($snapToken);
        // return view('pages.pencari.pencari-transaksi', compact('snapToken', 'order'));
        return view('pages.pencari.pencari-transaksi', compact('transaction'));
        // return redirect()->away($snapToken);
    }
}
