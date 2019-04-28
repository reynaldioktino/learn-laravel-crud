<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index() {

        //insert biasa
        // $blog = new Blog;
        // $blog->judul = 'eee';
        // $blog->deskripsi = 'fffffffffffffffffff';
        // $blog->save();

        //insert mass assignment
        // Blog::create([
        //     'judul' => 'iii',
        //     'deskripsi' => 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj',
        //     'created_at' => '2019-06-10 03:42:11',
        //     'updated_at' => '2019-01-09 03:42:11'
        // ]);
        
        //update
        // $blog = Blog::where('judul','aaa')->first();
        // $blog->judul = 'Blog 1';
        // $blog->save();

        //update mass assignment
        // Blog::find(1)->update([
        //     'judul' => 'blog pertama',
        //     'deskripsi' => 'ini adalah blog pertama'
        // ]);

        //delete 1
        // $blog = Blog::find(6);
        // $blog->delete();

        //delete 2
        // Blog::destroy(['3','5']);
        
        //menampilkan data yang sudah di soft deletes
        //$blogs = Blog::withTrashed()->get();
        
        //mengembalikan softdeletes () / return sofdeletes
        // Blog::withTrashed()->restore();

        $blogs = Blog::all();

        return view('blog/blog', ['blogs' => $blogs]);
    }

    public function show($id) {
        // $nilai = "ini adalah blog " . $id;
        // $users = DB::table('users')->get();
        // return view('blog/single', ['blog' => $nilai, 'users' => $users]);
        $datablog = Blog::find($id);

        if (!$datablog) {
            abort(404);
        }
        return view('blog/tampil', ['blogs' => $datablog]);
    }

    public function tambah() {
        return view('blog/tambah');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'judul' => 'required|min:5',
            'deskripsi' => 'required|min:5|max:10',
        ]);

        $blog = new Blog;
        $blog->judul = $request->judul;
        $blog->deskripsi = $request->deskripsi;
        $blog->save();
        return redirect('blog');
    }

    public function edit($id) {
        $datablog = Blog::find($id);

        if (!$datablog) {
            abort(404);
        }
        return view('blog/edit', ['blogs' => $datablog]);
    }

    public function update(Request $request, $id) {
        $blog = Blog::find($id);
        $blog->judul = $request->judul;
        $blog->deskripsi = $request->deskripsi;
        $blog->save();
        return redirect('blog');
    }

    public function delete($id) {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('blog');
    }

    public function tampil($id) {
        $datablog = Blog::find($id);

        return view('blog/tampil', ['blogs' => $datablog]);
    }
}