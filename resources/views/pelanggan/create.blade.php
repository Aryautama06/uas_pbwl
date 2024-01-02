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

    <h2>Add Pelanggan</h2>

    <form action="{{ url('pelanggan') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="pel_nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="alamat" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
