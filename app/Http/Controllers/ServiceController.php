<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller {

    /**
     * Add a service to service table according to the site category which 
     * @param Request $request
     */
    public function addService(Request $request) {
        $siteType = env('APP_CATEGORY');
        switch ($siteType) {
            case "photography":
                echo "photography";
                break;
            case "trade":
                echo "trade";
                break;
            case "legal":
                echo "legal";
                break;
            case "personal":
                echo "personal";
                break;
            default:
                logger('The category specified does not exist');

                abort(404, "the category specified does not exist");
        }
    }

    public function deleteService(Request $request, $id) {
        
    }

    public function getServices() {
        
    }

    public function getServiceById($id) {
        
    }

    public function uploadImageForService() {
        
    }

}
