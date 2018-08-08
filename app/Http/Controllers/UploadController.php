<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use ImageUploader;

class UploadController extends Controller
{

    public function uploadImage(Request $request) {


       /* post validation */

       $isValid = $request->validate([
            'photo' => 'required | mimes:jpeg,jpg,png,gif,GIF | max:10048',
            'title' => 'required',
        ]);
        
        
        /* post variables */

         $imageExtension = $request->photo->getClientOriginalExtension(); //file extension
         $imageTitle = $request->title; //photo title
         $imageContent = $request->photo; //image content

         /* Upload image */
         
         $imageName = ImageUploader::saveImage($imageContent, $imageTitle, $imageExtension);


        /* insert record into the database */

        DB::table('uploads')->insert(
            [
                'title' => $imageTitle, 
                'image_name' => $imageName,
                'created_at' => now(),
                'updated_at' => now(),

            ]
        );

        return redirect('/');
    }
    
}
