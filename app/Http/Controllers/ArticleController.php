<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{

    public function show(){
        $article = Article::all();

        return view ('artikel',[
            "title" => "Pos | Artikel",
            "artikel" => $article
        ]);
    }

    public function store(Request $request){
        $credential =  $request->only('heading','category','image','content');
        $validated = $request->validate([
            'heading' => 'required|unique:articles',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'content' => 'required'
        ]);

        $extension = $validated['image']->getClientOriginalExtension();
        $newName =  'thumbnail'. '_' .now()->timestamp. '.' .$extension;
        $validated['image']->storeAs('photos/1/Thumbnails', $newName);

    
        $article = Article::create([
            'id_category' => intval($validated['category']),
            'heading' => $validated['heading'],
            'thumbnail' => $newName,
            'content' => $validated['content'],
            'slug' => Str::slug($validated['heading'])
        ]);

        if($article){
            Session::flash('status','success');
            Session::flash('message','Artikel berhasil ditambahkan');
        }

        return redirect('/dashboard/artikel');
    }

    public function content($slug){
        
        $article = Article::where('slug', $slug)->first();
        if($article){
            $date = Carbon::createFromFormat('Y-m-d H:i:s', $article->created_at)->locale('id');
            $formattedDate = $date->format('l, j F Y');
        
            return view ('content',[
                "title" => "Pos | Artikel",
                "content" => $article,
                "posted" => $formattedDate
            ]);
        }else{
            abort(404);
        }
    }

    public function detail($id){
        $article = Article::findOrFail($id);
        return view ('pages.admin.editArtikel',[
            "title" => "Pos | Edit Artikel",
            "data" => $article,
        ]);
    }

    public function edit(Request $request, $id){
        $artikel = Article::findOrFail($id);
        $credential =  $request->only('heading','category','image','content');
        $validated = $request->validate([
            'heading' => 'required',
            'category' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg',
            'content' => 'required'
        ]);

        if($request->file('image')){
            $extension = $validated['image']->getClientOriginalExtension();
            $newName =  'thumbnail'. '_' .now()->timestamp. '.' .$extension;
            $validated['image']->storeAs('photos/1/Thumbnails', $newName);
        }else{
            $newName = $artikel->thumbnail;
        }
       
        $artikel->update([
            'id_category' => intval($validated['category']),
            'heading' => $validated['heading'],
            'thumbnail' => $newName,
            'content' => $validated['content'],
            'slug' => Str::slug($validated['heading'])
        ]);

        if($artikel){
            Session::flash('status','success');
            Session::flash('message','Artikel berhasil diubah');
        }

        return redirect('/dashboard/artikel');
        
    }

    public function delete($id){
        $artikel = Article::where('id',$id);
        $artikel->forceDelete();
        if($artikel){
            Session::flash('status','success');
            Session::flash('message','Artikel berhasil dihapus');
        }
        return redirect('/dashboard/artikel');
    }

    public function arsip($id){
        $artikel = Article::where('id',$id);
        $artikel->delete();
        if($artikel){
            Session::flash('status','success');
            Session::flash('message','Artikel berhasil diarsipkan');
        }
        return redirect('/dashboard/artikel');
    }

    public function dataarsip()
    {
        $archivedArticles = Article::onlyTrashed()->get();
        if($archivedArticles){
            Session::flash('status','success');
            Session::flash('message','Artikel berhasil direstore');
        }
        return view('pages.admin.arsip',[
            'title' => 'POS | Arsip',
            'artikel' => $archivedArticles
        ]);
    }

    public function restore($id){
        $archivedArticles = Article::withTrashed()->where('id', $id)->restore();
        return redirect('/dashboard/artikel');
    }


    public function tiny(){
        return view('pages.admin.tinyMCE',[
            'title' => 'POS | Arsip',
        ]);
    }

   



}