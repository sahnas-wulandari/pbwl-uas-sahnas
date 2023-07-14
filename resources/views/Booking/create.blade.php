@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA BOOKING</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/booking')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">JENIS KOST</label>
                        <select name="booking_jenis_kost" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($kost as $kst)
                                <option value="{{$kst->kost_id}}">{{$kst->kost_jenis}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA MEMBER</label>
                        <select name="booking_nama_member" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($member as $mbr)
                                <option value="{{$mbr->member_id}}">{{$mbr->member_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">TANGGAL</label>
                        <input type="date" name="booking_tanggal" class="form-control" placeholder="Tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="">WAKTU</label>
                        <input type="text" name="booking_waktu" class="form-control" placeholder="Waktu">
                    </div>
                    <div class="mb-3">
                        <label for="">JUMLAH BAYAR</label>
                        <input type="text" name="booking_jumlah_bayar" class="form-control" placeholder="Jumlah Bayar">
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