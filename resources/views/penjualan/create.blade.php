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

    <form action="{{ url('penjualan') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">TANGGAL</label>
            <input type="date" name="tanggal" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">JUMLAH</label>
            <input type="text" name="jumlah" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">HARGA</label>
            <input type="text" name="harga" id="" class="form-control">
        </div>
        <div class="form-group mb-3">
              <label for="donat_id" class="form-label">VARIAN</label>
              <select class="form-control @error('donat_id') is-invalid @enderror" name="donat_id" id="donat_id">
                @foreach($donats as $donat)
                <option value="{{ $donat->id }}">{{ $donat->nama_donat }}</option>
                @endforeach
              </select>
              @error('donat_id')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>
        <div class="form-group mb-3">
              <label for="pel_id" class="form-label">Pelanggan</label>
              <select class="form-control @error('pel_id') is-invalid @enderror" name="pel_id" id="pel_id">
                @foreach($pelanggans as $pelanggan)
                <option value="{{ $pelanggan->id }}">{{ $pelanggan->pel_nama }}</option>
                @endforeach
              </select>
              @error('pel_id')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>
       
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
