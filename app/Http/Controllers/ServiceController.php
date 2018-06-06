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
                echo "photography";   // create a product 
                break;
            case "trade":
                echo "trade";   // create a product 
                break;
            case "legal":
                echo "legal";   // create a product 
                break;
            case "resume":
                echo "resume";   // create a product 
                break;
            default:

                abort($code);
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
