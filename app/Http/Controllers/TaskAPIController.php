<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTask;

class TaskAPIController extends Controller
{
    public function read()
    {
        $task = DataTask::all();
        return response()->json([
            'success' => true,
            'message' => "Data Berhasil Ditampilkan",
            'data' => $task,
        ], 200);
    }
    public function create(Request $request)
    {
        $task = DataTask::create([
            'nama' => $request->nama,
            'judul_task' => $request->judul_task,
            'deskripsi_task' => $request->deskripsi_task,
        ]);

        if ($task) {
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
        $task = DataTask::find($id)->update([
            'nama' => $request->nama,
            'judul_task' => $request->judul_task,
            'deskripsi_task' => $request->deskripsi_task,
        ]);

        if ($task) {
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
        $task = DataTask::find($id)->delete();

        if ($task) {
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
