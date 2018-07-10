<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


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


         /* variables for upload */

          $imageName = camel_case($request->title).'_'.microtime(true).'.'.$imageExtension; //name used for image



        /* save image */

        $imageContent->storeAs('/', 
            $imageName, //filename 
            'uploads' //storage disk
        );
        /* * */


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
