<?php

namespace App\ImageUploader;

class ImageUploader
{

    
    public function saveImage($imageContent, $imageTitle, $imageExtension)
    {
        /* Generate name for image */

          $imageName = camel_case($imageTitle).'_'.microtime(true).'.'.$imageExtension; 


        /* save image */

        $imageContent->storeAs('/', 
            $imageName, //filename 
            'uploads' //storage disk
        );

        /***/

        return $imageName;
    }
}