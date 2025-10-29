<!DOCTYPE html>
<html>
<head><title>Data Pesanan</title></head>
<body>
<h2>Daftar Pesanan</h2>
<table border="1" cellpadding="8">
<tr><th>ID</th><th>Tanggal</th><th>Pelanggan</th><th>Total Harga</th><th>Status</th></tr>
@foreach($pesanan as $p)
<tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->tanggal_pesanan }}</td>
    <td>{{ $p->pelanggan->nama }}</td>
    <td>{{ number_format($p->total_harga) }}</td>
    <td>{{ $p->status }}</td>
</tr>
@endforeach
</table>
</body>
</html>
