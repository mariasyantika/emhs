<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use Response;

class MhsAPIController extends Controller
{
    public function read()
    {
        $mhs = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => "Data Berhasil Ditampilkan",
            'data' => $mhs,
        ], 200);
    }
    public function create(Request $request)
    {
        $mhs = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat,
        ]);

        if ($mhs) {
            return response()->json([
                'success' => true,
                'message' => "Data Berhasil Ditampilkan",
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => "Data Gagal Ditampilkan",
            ], 400);

        }

    }
    public function update($id,Request $request)
    {
        $mhs = Mahasiswa::find($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat,
        ]);

        if ($mhs) {
            return response()->json([
                'success' => true,
                'message' => "Data Berhasil Diubah",
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => "Data Gagal Diubah",
            ], 400);

        }

    }
    public function delete($id)
    {
        $mhs = Mahasiswa::find($id)->delete();

        if ($mhs) {
            return response()->json([
                'success' => true,
                'message' => "Data Berhasil di Hapus",
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => "Data Gagal di Hapus",
            ], 400);

        }
    }
}