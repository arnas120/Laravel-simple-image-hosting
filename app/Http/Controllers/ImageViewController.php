<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;



class ImageViewController extends Controller
{


    public function imageList() {

        $images = DB::table('uploads')->orderBy('id', 'DESC')->paginate(9);

        return view('MainView', compact('images'));

    }

    public function viewImage($id) {

        $image = DB::table('uploads')->where('id', $id)->limit(1)->get();

        return view('ViewImage', compact('image'));
    } 


}