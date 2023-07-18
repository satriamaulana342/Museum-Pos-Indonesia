<?php

namespace App\Http\Controllers;

use App\Models\Histories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class HistoriesController extends Controller
{
    public function index(){

        $sejarah = Histories::all();

        return view ('pages.admin.sejarah',[
            'title' => 'Sejarah | Meseum POS',
            'sejarah' => $sejarah,
        ]);
    }

    public function tambah(){
        return view ('pages.admin.addSejarah',[
            'title' => 'tambah sejarah | Meseum POS',
        ]);
    }

    public function store(Request $request){
        
        $credential = $request->only('heading','slug','thumbnail','content');
        $validated = $request->validate([
            'heading' => 'required|unique:articles',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'content' => 'required'
        ]);

        $extension = $validated['image']->getClientOriginalExtension();
        $newName =  'thumbnail'. '_' .now()->timestamp. '.' .$extension;
        $validated['image']->storeAs('photos/1/Thumbnails', $newName);

        $sejarah = Histories::create([
            'heading' => $validated['heading'],
            'slug' => Str::slug($validated['heading']),
            'thumbnail' => $newName,
            'content' => $validated['content'],
        ]);


        if($sejarah){
            Session::flash('status','success');
            Session::flash('message','Sejarah berhasil ditambahkan');
        }

        return redirect('/dashboard/sejarah');
    }


    public function detail($id){
        $sejarah = Histories::findOrFail($id);
        return view('pages.admin.editSejarah',[
            'title' => 'Edit Sejarah | Meseum POS',
            'data' => $sejarah,
        ]);
    }

    public function edit(Request $request, $id){
        $sejarah = Histories::findOrFail($id);
        $credential =  $request->only('heading','image','content');
        $validated = $request->validate([
            'heading' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg',
            'content' => 'required'
        ]);

        if($request->file('image')){
            $extension = $validated['image']->getClientOriginalExtension();
            $newName =  'thumbnail'. '_' .now()->timestamp. '.' .$extension;
            $validated['image']->storeAs('photos/1/Thumbnails', $newName);
        }else{
            $newName = $sejarah->thumbnail;
        }
       
        $sejarah->update([
            'heading' => $validated['heading'],
            'slug' => Str::slug($validated['heading']),
            'thumbnail' => $newName,
            'content' => $validated['content'],
        ]);

        if($sejarah){
            Session::flash('status','success');
            Session::flash('message','Sejarah berhasil diubah');
        }

        return redirect('/dashboard/sejarah');
        
    }

    public function delete($id){
        $sejarah = Histories::where('id',$id);
        $sejarah->forceDelete();
        if($sejarah){
            Session::flash('status','success');
            Session::flash('message','Sejarah berhasil dihapus');
        }
        return redirect('/dashboard/sejarah');
    }

    public function arsip($id){
        $sejarah = Histories::where('id',$id);
        $sejarah->delete();
        if($sejarah){
            Session::flash('status','success');
            Session::flash('message','Sejarah berhasil diarsipkan');
        }
        return redirect('/dashboard/sejarah');
    }

    public function dataarsip()
    {
        $archivedSejarah = Histories::onlyTrashed()->get();
        if($archivedSejarah){
            Session::flash('status','success');
            Session::flash('message','Sejarah berhasil direstore');
        }
        return view('pages.admin.arsipSejarah',[
            'title' => 'POS | Arsip',
            'sejarah' => $archivedSejarah
        ]);
    }

    public function restore($id){
        $archivedArticles = Histories::withTrashed()->where('id', $id)->restore();
        return redirect('/dashboard/sejarah');
    }

    public function content($slug){
        
        $sejarah = Histories::where('slug', $slug)->first();
        if($sejarah){
            $date = Carbon::createFromFormat('Y-m-d H:i:s', $sejarah->created_at)->locale('id');
            $formattedDate = $date->format('l, j F Y');
        
            return view ('content',[
                "title" => "Pos | Sejarah",
                "content" => $sejarah,
                "posted" => $formattedDate
            ]);
        }else{
            abort(404);
        }
    }


}
