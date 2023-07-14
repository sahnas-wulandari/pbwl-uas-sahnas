<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use Illuminate\Http\Request;

class KostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Kost::all();
        return view('kost.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kost.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kost::create(
            [
                'kost_jenis' => $request->kost_jenis,
                'kost_harga' => $request->kost_harga
            ]
        );

        return redirect('kost')->with('success','Data berhasil ditambahkan');
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
        $row = Kost::findOrFail($id);
        return view('kost.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Kost::findOrFail($id);
        $row->update(
            [
                'kost_jenis' => $request->kost_jenis,
                'kost_harga' => $request->kost_harga
            ]
        );
        return redirect('kost')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Kost::findOrFail($id);
        $row->delete();

        return redirect('kost')->with('success', 'Data berhasil dihapus');
    }
}