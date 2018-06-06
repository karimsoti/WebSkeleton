<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller {

    public function toAboutPage() {
        return view('about');
    }

    public function toPricePage() {
        return view('price');
    }

    public function toPortfolioPage() {
        return view('portfolio');
    }

    public function toContactPage() {
        return view('contact');
    }

    public function toServicesPage() {
        return view('services');
    }

    public function toBlogPage() {
        return view('blog');
    }

}
