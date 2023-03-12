<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #302b63;
  color: white;
}
</style>
</head>
<body>

<h1>List Data Buku Perpustakaan</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>Judul Buku</th>
    <th>Pengarang</th>
    <th>Penerbit</th>
    <th>Tahun Terbit</th>
    <th>ISBN</th>
    <th>Deskripsi</th>
    <th>Kategori</th>
  </tr>
  @php
      $no=1;
  @endphp
  @foreach ($books as $buku)
  <tr>
    <td> {{ $no++}}</td>
    <td> {{ $buku->title}}</td>
    <td> {{ $buku->author}}</td>
    <td> {{ $buku->publisher}}</td>
    <td> {{ $buku->year}}</td>
    <td> {{ $buku->isbn}}</td>
    <td> {{ $buku->description}}</td>
    <td> {{ $buku->category}}</td>
  </tr>
  @endforeach
  
  
</table>

</body>
</html>