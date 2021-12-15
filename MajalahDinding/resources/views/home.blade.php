<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<h2>Pengumuman</h2>

<table>
  <tr>
    <th>Pesan</th>
    <th>Status</th>
  </tr>
  
  @foreach($pesan as $b)
    <tr><td>{{$b->pesan}}</td>
    <td>{{$b->status}}</td>
    </tr>
 @endforeach
</table>

</body>
</html>