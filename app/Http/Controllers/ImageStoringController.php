<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageStoringController extends Controller {

    /**
     * Accessed by the storeImage route to store 
     * @param Request $request
     *
     */
    public function storeImage(Request $request) {


        try {
            if ($this->validateImageExtension($request->image) == true) {

                //if this does not work use $request->image->getClientOriginalName()
                \Storage::putFileAs("public/images", $request->image, $request->image->hashName());
            }
        } catch (Exception $ex) {
            abort(400, 'An error occurred when attempting to store your image');
        }
    }

    /**
     * Validates the image extension 
     * @param type $imageFile
     * @return boolean
     */
    public function validateImageExtension($imageFile) {

        if (exif_imagetype($imageFile) == IMAGETYPE_JPEG || exif_imagetype($imageFile) == IMAGETYPE_PNG) {
            return true;
        }
        else {
            return false;
        }
    }

}
