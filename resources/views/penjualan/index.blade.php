@extends('layouts.app')
@section('content')

<style>
    body {
        background-color: #ffffff;
        font-family: 'Arial', sans-serif;
    }

    h2 {
        color: #0984e3;
    }

    .btn-primary {
        background-color: #0984e3;
        border: none;
        border-radius: 5px;
        color: #ffffff;
    }

    .btn-primary:hover {
        background-color: #2980b9;
    }

    .table {
        margin-top: 20px;
        border: 1px solid #dcdcdc;
    }

    .table th,
    .table td {
        border: 1px solid #dcdcdc;
    }

    .table th {
        background-color: #0984e3;
        color: #ffffff;
    }

    .table td {
        background-color: #ffffff;
        color: #000000;
    }

    .btn-warning {
        background-color: #f39c12;
        border: none;
        border-radius: 5px;
        color: #ffffff;
    }

    .btn-warning:hover {
        background-color: #d68910;
    }

    .btn-danger {
        background-color: #e74c3c;
        border: none;
        border-radius: 5px;
        color: #ffffff;
    }

    .btn-danger:hover {
        background-color: #c23616;
    }
</style>
<h2>PENJUALAN</h2>

<a href="{{ url('penjualan/create') }}" class="btn btn-primary mb-3 float-end">Add penjualan</a>

<table class="table table-bordered">
      <tr>
            <th>NO</th>
            <th>TANGGAL</th>
            <th>JUMLAH</th>
            <th>HARGA</th>
            <th>VARIAN</th>
            <th>ID PELANGGAN</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      @php
            $counter =1;
      @endphp

      @foreach ($rows as $row)
            <tr>
                  <td>{{ $counter++ }}</td>
                  <td>{{ $row->tanggal }}</td>
                  <td>{{ $row->jumlah }} box</td>
                  <td>{{ $row->harga }}</td>
                  <td>{{ $row->donat_id }}</td>
                  <td>{{ $row->pel_id }}</td>
                  <td><a href="{{ url('penjualan/edit/' . $row->id) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('penjualan/' . $row->id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection