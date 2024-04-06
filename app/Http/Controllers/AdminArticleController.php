<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminArticleController extends Controller
{
    public function index()
    {
        $data = DB::table('dimensiarticle')
            ->join('dimensiauthor', 'dimensiauthor.id', '=', 'dimensiarticle.author_id')
            ->join('dimensicategory', 'dimensicategory.id', '=', 'dimensiarticle.category_id')
            ->get();
        return view('admin.article.index', ['data' => $data]);
    }

    public function add()
    {
        $author = DB::table('dimensiauthor')->get();
        $category = DB::table('dimensicategory')->get();
        return view('admin.article.add', ['author' => $author, 'category' => $category]);
    }

    public function create(Request $request)
    {
        $title = $request->title;
        $image_url = $request->file("image_url");
        $author_id = $request->author_id;
        $category_id = $request->category_id;
        $content = $request->content;
        $add = DB::table('dimensiarticle')->insert([
            'title' => $title,
            'image_url' =>  $image_url->getClientOriginalName(),
            'author_id' => $author_id,
            'category_id' => $category_id,
            'content' => $content
        ]);

        if ($add) {
            $tujuan_upload = 'data_file';
            $image_url->move($tujuan_upload, $image_url->getClientOriginalName());
            return redirect()->route('indexArticle')
                ->with('success', 'Data berhasil dihapus!');
        }
    }

    public function edit($id)
    {
        $data = DB::table('dimensiarticle')
            ->join('dimensiauthor', 'dimensiauthor.id', '=', 'dimensiarticle.author_id')
            ->join('dimensicategory', 'dimensicategory.id', '=', 'dimensiarticle.category_id')
            ->where('dimensiarticle.id', $id)
            ->first();
        $author = DB::table('dimensiauthor')->get();
        $category = DB::table('dimensicategory')->get();
        return view('admin.article.edit', ['data' => $data, 'author' => $author, 'category' => $category]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $image_url = $request->file("image_url");
        $author_id = $request->author_id;
        $category_id = $request->category_id;
        $content = $request->content;
        if ($image_url == NULL) {
            $update = DB::table('dimensiarticle')->where('id', $id)
                ->update([
                    'title' => $title,
                    'author_id' => $author_id,
                    'category_id' => $category_id,
                    'content' => $content
                ]);
            return redirect()->route('indexArticle')
                ->with('success', 'Data berhasil dihapus!');
        } else {
            $update = DB::table('dimensiarticle')->where('id', $id)
                ->update([
                    'title' => $title,
                    'image_url' =>  $image_url->getClientOriginalName(),
                    'author_id' => $author_id,
                    'category_id' => $category_id,
                    'content' => $content
                ]);
            $tujuan_upload = 'data_file';
            $image_url->move($tujuan_upload, $image_url->getClientOriginalName());
            return redirect()->route('indexArticle')
                ->with('success', 'Data berhasil dihapus!');
        }
    }

    public function delete($id)
    {
        $delete = DB::table('dimensiarticle')->where('id', $id)->delete();
        return redirect()->route('indexArticle')
            ->with('success', 'Data berhasil dihapus!');
    }
}
