<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Member::all();
        return view('member.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Member::create(
            [
                'member_nama' => $request->member_nama,
                'member_alamat' => $request->member_alamat,
                'member_no_tlpn' => $request->member_no_tlpn
            ]
        );

        return redirect('member')->with('success','Data berhasil ditambahkan');
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
        $row = Member::findOrFail($id);
        return view('member.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Member::findOrFail($id);
        $row->update(
            [
                'member_nama' => $request->member_nama,
                'member_alamat' => $request->member_alamat,
                'member_no_tlpn' => $request->member_no_tlpn
            ]
        );
        return redirect('member')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Member::findOrFail($id);
        $row->delete();

        return redirect('member')->with('success', 'Data berhasil dihapus');
    }
}
