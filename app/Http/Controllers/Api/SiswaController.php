<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Siswa::with('sekolah')->get();
        // return response($data, 200);
        return response([
            'status' => 'success',
            'message' => 'Data Berhasil didapatkan!!',
            'data' => $data,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required|string',
            'alamat' => 'required',
            'sekolah_id' => 'required',
        ]);
        $data = Siswa::create($validator);

        return response([
            'status' => 'success',
            'message' => 'Data Berhasil diinput!!',
            'data' => $data,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        try {
            $data = [
                'message' => 'Data berhasil ditemukan',
                'data' => Siswa::with('sekolah')->findOrFail($id)
            ];
            // $code = 200;
        } catch (\Throwable $th) {
            $data = [
                'message' => 'Data tidak ditemukan',
            ];
            // $code = 204;
        }
        return response($data, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required|string',
            'alamat' => 'required',
            'sekolah_id' => 'required'
        ]);

        $data = Siswa::find($id);
        $data->update($validator);

        return response([
            'message' => 'Data berhasil diubah',
            'data' => $data
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Siswa::find($id)->delete();
        return response([
            'message' => 'Data berhasil dihapus',
        ], 200);
    }
}
