<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Article;
use App\Models\Profile;
use App\Models\Histories;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indexArtikel(){
        $artikel= Article::all();
        
        return view ("index",[
            "data" => $artikel
        ]);
    }

    public function indexSejarah(){
        $sejarah = Histories::all();
        
        return view ("sejarah",[
            "sejarah" => $sejarah
        ]);
    }

    public function indexRuangan(){
        $ruangan = Room::all();
        
        return view ("ruangan",[
            "ruangan" => $ruangan
        ]);
    }

    public function indexProfile(){
        $profil = Profile::where('id',1)->first();
        return view ("profil",[
            'profil' => $profil 
        ]);
    }


}