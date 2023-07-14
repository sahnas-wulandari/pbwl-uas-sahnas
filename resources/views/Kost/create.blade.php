@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA KOST</h3>      
            </div>
            <div class="card-body">
                <form action="{{ url('/kost')}}" method="post">
                @csrf
                    <div class="mb-3">
                        <label for="">JENIS KOST</label>
                        <input type="text" name="kost_jenis" class="form-control" placeholder="Jenis Kost">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA KOST</label>
                        <input type="text" name="kost_harga" class="form-control" placeholder="Harga">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection