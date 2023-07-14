@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA MEMBER</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/member/' .$row->member_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA MEMBER</label>
                        <input type="text" name="member_nama" class="form-control" value="{{$row->member_nama}}">
                    </div>
                    <div class="mb-3">
                        <label for="">ALAMAT</label>
                        <input type="text" name="member_alamat" class="form-control" value="{{$row->member_alamat}}">
                    </div>
                    <div class="mb-3">
                        <label for="">NO TELEPON</label>
                        <input type="text" name="member_no_tlpn" class="form-control" value="{{$row->member_no_tlpn}}">
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