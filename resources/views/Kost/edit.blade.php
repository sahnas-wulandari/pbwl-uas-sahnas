@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA KOST</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/kost/' .$row->kost_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">JENIS KOST</label>
                        <input type="text" name="kost_jenis" class="form-control" value="{{$row->kost_jenis}}">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA KOST</label>
                        <input type="text" name="kost_harga" class="form-control" value="{{$row->kost_harga}}">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection