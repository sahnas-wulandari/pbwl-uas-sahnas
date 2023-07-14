@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>DATA BOOKING</h3>
                @if (session()->has('success'))
                <div class="alert alert-info" role="alert">
                    {{ session ('success')}}
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <a class="btn btn-primary" href="{{ url('booking/create')}}">Tambah Data</a>
                </div>
                <table class="table table-light table-striped-columns">
                    <tr>
                        <td>NO</td>
                        <td>JENIS KOST</td>
                        <td>NAMA MEMBER</td>
                        <td>TANGGAL</td>
                        <td>WAKTU</td>
                        <td>JUMLAH BAYAR</td>
                        <td>EDIT</td>
                        <td>HAPUS</td>
                    </tr>
                    @foreach ($rows as $row)
                    <tr>
                        <td>{{ $row->booking_id}}</td>
                        <td>{{ $row->kost->kost_jenis}}</td>
                        <td>{{ $row->member->member_nama}}</td>
                        <td>{{ $row->booking_tanggal}}</td>
                        <td>{{ $row->booking_waktu}}</td>
                        <td>{{ $row->booking_jumlah_bayar}}</td>
                        <td><a class="btn btn-info btn-sm float" href="{{url('booking/' .$row->booking_id. '/edit')}}">Edit</a></td>
                        <td>
                            <form action="{{url('booking/' .$row->booking_id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection