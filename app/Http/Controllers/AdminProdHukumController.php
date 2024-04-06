<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProdHukumController extends Controller
{
    public function index()
    {
        $data = DB::table('prodhukum')->get();
        return view('admin.prodhukum.index', ['data' => $data]);
    }

    public function add()
    {
        return view('admin.prodhukum.add');
    }

    public function create(Request $request)
    {
        $title = $request->title;
        $file_url = $request->file("file_url");
        $add = DB::table('prodhukum')->insert([
            'title' => $title,
            'file_url' =>  $file_url->getClientOriginalName()
        ]);

        if ($add) {
            $tujuan_upload = 'data_file';
            $file_url->move($tujuan_upload, $file_url->getClientOriginalName());
            return redirect()->route('indexProdHukum')
                ->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('indexProdHukum')
                ->with('failed', 'Data gagal ditambahkan!');
        }
    }

    public function edit($id)
    {
        $data = DB::table('prodhukum')
            ->where('id', $id)
            ->first();
        return view('admin.prodhukum.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $file_url = $request->file("file_url");

        if ($file_url == NULL) {
            $update = DB::table('prodhukum')->where('id', $id)->update([
                'title' => $title
            ]);
            return redirect()->route('indexProdHukum')
                ->with('success', 'Data berhasil diupdate!');
        } else {
            $update = DB::table('prodhukum')->where('id', $id)->update([
                'title' => $title,
                'file_url' =>  $file_url->getClientOriginalName()
            ]);
            $tujuan_upload = 'data_file';
            $file_url->move($tujuan_upload, $file_url->getClientOriginalName());
            return redirect()->route('indexProdHukum')
                ->with('success', 'Data berhasil diupdate!');
        }
    }

    public function delete($id)
    {
        $delete = DB::table('prodhukum')->where('id', $id)->delete();
        return redirect()->route('indexProdHukum')
            ->with('success', 'Data berhasil dihapus!');
    }
}
