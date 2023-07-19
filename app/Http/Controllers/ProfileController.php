<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function profil(){
        $profil = Profile::where('id',1)->first();

        return view('pages.admin.profil',[
            'title' => 'Profile | Meseum POS',
            'profil' => $profil
        ]);
    }

    public function edit(Request $request){
        $profil = Profile::findOrFail(1);
        $credential =  $request->only('heading', 'image', 'content');
        $validated = $request->validate([
            'heading' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg',
            'content' => 'required'
        ]);

        $filename = $profil->image; // Inisialisasi variabel $filename dengan nilai default

        if ($request->file('image')) {
            $filename = $validated['image']->getClientOriginalName();
            $validated['image']->storeAs('photos/2/Profil', $filename, "public");
        }

        $profil->update([
            'heading' => $validated['heading'],
            'image' => $filename,
            'content' => $validated['content'],
        ]);

        Session::flash('message', 'Profil berhasil diubah');
        return redirect()->back();

    }
}