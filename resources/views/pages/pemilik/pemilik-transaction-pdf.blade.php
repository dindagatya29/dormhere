<!DOCTYPE html>
<html>
<head>
    <title>Data Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Data Transaksi</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Kost</th>
                <th>No Kamar</th>
                <th>User ID</th>
                <th>Nama User</th>
                <th>Durasi Sewa</th>
                <th>Nama Pemesan</th>
                <th>Total Price</th>
                <th>Tanggal Sewa</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $transaction)
                <tr>
                    <td>{{ $transaction->nama_kost }}</td>
                    <td>{{ $transaction->no_kamar }}</td>
                    <td>{{ $transaction->user_id }}</td>
                    <td>{{ $transaction->name }}</td>
                    <td>{{ $transaction->durasi_sewa }}</td>
                    <td>{{ $transaction->nama_pemesan }}</td>
                    <td>{{ $transaction->total_price }}</td>
                    <td>{{ $transaction->tgl_sewa }}</td>
                    <td>{{ $transaction->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
