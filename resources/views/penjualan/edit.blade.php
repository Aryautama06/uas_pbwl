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
    <h2>Edit penjualan</h2>

    <form action="{{ url('penjualan/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">TANGGAL</label>
            <input type="date" name="tanggal" id="" class="form-control" value="{{ $row->tanggal }}">
        </div>
        <div class="mb-3">
            <label for="">JUMLAH</label>
            <input type="text" name="jumlah" id="" class="form-control" value="{{ $row->jumlah }}">
        </div>
        <div class="mb-3">
            <label for="">HARGA</label>
            <input type="text" name="harga" id="" class="form-control" value="{{ $row->harga }}">
        </div>
        <div class="mb-3">
            <label for="">VARIAN</label>
            <input type="text" name="donat_id" id="" class="form-control" value="{{ $row->donat_id }}">
        </div>        <div class="mb-3">
            <label for="">PELANGGAN</label>
            <input type="text" name="pel_id" id="" class="form-control" value="{{ $row->pel_id }}">
        </div>

        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
