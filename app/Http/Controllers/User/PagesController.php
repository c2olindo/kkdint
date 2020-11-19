<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function AboutUs() {
        return view('front.about');
    }

    public function ContactUs() {
        return view('front.contact');
    }
    // TODO remove this when product controller is on
    public function Products() {
        return view('front.our_products');
    }
}
