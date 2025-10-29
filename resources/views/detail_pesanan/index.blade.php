<!DOCTYPE html>
<html>
<head><title>Detail Pesanan</title></head>
<body>
<h2>Daftar Detail Pesanan</h2>
<table border="1" cellpadding="8">
<tr><th>ID</th><th>ID Pesanan</th><th>Produk</th><th>Jumlah</th><th>Harga Satuan</th><th>Subtotal</th></tr>
@foreach($detail as $d)
<tr>
    <td>{{ $d->id }}</td>
    <td>{{ $d->pesanan->id }}</td>
    <td>{{ $d->produk->nama }}</td>
    <td>{{ $d->jumlah }}</td>
    <td>{{ number_format($d->harga_satuan) }}</td>
    <td>{{ number_format($d->subtotal) }}</td>
</tr>
@endforeach
</table>
</body>
</html>
