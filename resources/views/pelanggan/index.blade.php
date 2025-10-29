<!DOCTYPE html>
<html>
<head><title>Data Pelanggan</title></head>
<body>
<h2>Daftar Pelanggan</h2>
<table border="1" cellpadding="8">
<tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Email</th><th>No Telepon</th></tr>
@foreach($pelanggan as $p)
<tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->nama }}</td>
    <td>{{ $p->alamat }}</td>
    <td>{{ $p->email }}</td>
    <td>{{ $p->no_telepon }}</td>
</tr>
@endforeach
</table>
</body>
</html>
