<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view ('pages.admin.dashboard',[
            "title" => 'Pos | Dashboard'
        ]);
    }

    public function artikelAdd(){
        return view ('pages.admin.addArtikel',[
            "title" => 'Pos | Add artikel'
        ]);
    }

    public function show(){
        $artikel = Article::all();
        return view ('pages.admin.artikel',[
            "title" => 'Pos | artikel',
            "artikel" => $artikel
        ]);
    }
}
