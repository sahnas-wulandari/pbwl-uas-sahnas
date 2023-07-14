<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kost;
use App\Models\Member;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Booking::all();
        return view('booking.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('booking.create',[
            'kost' => Kost::get(),
            'member' => Member::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Booking::create(
            [
                'booking_jenis_kost' => $request->booking_jenis_kost,
                'booking_nama_member' => $request->booking_nama_member,
                'booking_tanggal' => $request->booking_tanggal,
                'booking_waktu' => $request->booking_waktu,
                'booking_jumlah_bayar' => $request->booking_jumlah_bayar
            ]
        );

        return redirect('booking')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Booking::findOrFail($id);
        return view('booking.edit',[
                'kost' => Kost::get(),
                'member' => Member::get()
            ] , compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Booking::findOrFail($id);
        $row->update(
            [
                'booking_jenis_kost' => $request->booking_jenis_kost,
                'booking_nama_member' => $request->booking_nama_member,
                'booking_tanggal' => $request->booking_tanggal,
                'booking_waktu' => $request->booking_waktu,
                'booking_jumlah_bayar' => $request->booking_jumlah_bayar
            ]
        );
        return redirect('booking')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Booking::findOrFail($id);
        $row->delete();

        return redirect('booking')->with('success', 'Data berhasil dihapus');
    }
}