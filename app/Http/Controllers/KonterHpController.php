<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KonterHpController extends Controller
{
    public function index()
    {
        $datas = DB::select('select * from konter_hp');

        return view('konter_hp.index')
            ->with('datas', $datas);
    }

    public function create()
    {
        return view('konter_hp.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_toko' => 'required',
            'nama_toko' => 'required',
            'alamat' => 'required',
            'no_handphone' => 'required',
            'id_customer' => 'required',
            'id_supplier' => 'required'
        ]);

        DB::insert(
            'INSERT INTO konter_hp(id_toko, nama_toko, alamat, no_handphone, id_customer, id_supplier) VALUES (:id_toko, :nama_toko, :alamat, :no_handphone, :id_customer, :id_supplier)',
            [
                'id_toko' => $request->id_toko,
                'nama_toko' => $request->nama_toko,
                'alamat' => $request ->alamat,
                'no_handphone' => $request->no_handphone,
                'id_customer' => $request->id_customer,
                'id_supplier' => $request->id_supplier
            ]
        );

        return redirect()->route('konter_hp.index')->with('success', 'Data Konter HP berhasil disimpan');
    }

    public function edit($id)
    {
        $data = DB::table('konter_hp')->where('id_toko', $id)->first();

        return view('konter_hp.edit')->with('data', $data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'id_toko' => 'required',
            'nama_toko' => 'required',
            'alamat' => 'required',
            'no_handphone' => 'required',
            'id_customer' => 'required',
            'id_supplier' => 'required',
        ]);

        DB::update(
            'UPDATE konter_hp SET id_toko = :id_toko, nama_toko = :nama_toko, alamat = :alamat, no_handphone = :no_handphone, id_customer = :id_customer, id_supplier = :id_supplier WHERE id_toko = :id', 
            [
                'id' => $id,
                'id_toko' => $request->id_toko,
                'nama_toko' => $request->nama_toko,
                'alamat' => $request->alamat,
                'no_handphone' => $request->no_handphone,
                'id_customer' => $request->id_customer,
                'id_supplier' => $request->id_supplier
            ]
        );

        return redirect()->route('konter_hp'.index')->with('success', 'Data Konter HP berhasil diubah');
    }

    public function delete($id)
    {
        DB::delete('DELETE FROM konter_hp WHERE id_toko = :id_toko', ['id_toko' => $id]);

        return redirect()->route('konter_hp.index')->with('success', 'Data Toko HP berhasil dihapus');
    }
}
