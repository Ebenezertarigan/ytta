<!DOCTYPE html>
<html>
<head><title>Data Produk</title></head>
<body>
<h2>Daftar Produk</h2>
<table border="1" cellpadding="8">
<tr><th>ID</th><th>Nama</th><th>Harga</th><th>Stok</th><th>Deskripsi</th></tr>
@foreach($produk as $p)
<tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->nama }}</td>
    <td>{{ number_format($p->harga) }}</td>
    <td>{{ $p->stok }}</td>
    <td>{{ $p->deskripsi }}</td>
</tr>
@endforeach
</table>
</body>
</html>
