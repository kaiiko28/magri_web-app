<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('frontend.index');
    }

    public function notfound() {
        return view('frontend.404');
    }

    public function checkout() {
        return view('frontend.checkout');
    }

    public function coming_soon() {
        return view('frontend.coming_soon');
    }

    public function contact_us() {
        return view('frontend.contact_us');
    }

    
    public function faq() {
        return view('frontend.faq');
    }
    
    public function favorites() {
        return view('frontend.favorites');
    }
    
    public function forgot_password() {
        return view('frontend.forgot_password');
    }

    
    public function location() {
        return view('frontend.location');
    }
    
    public function maintenance() {
        return view('frontend.maintenance');
    }
    
    public function map() {
        return view('frontend.map');
    }

    
    public function most_popular() {
        return view('frontend.most-popular');
    }

    
    public function my_order() {
        return view('frontend.my-order');
    }
    
    public function privacy() {
        return view('frontend.privacy');
    }

    public function profile() {
        return view('frontend.profile');
    }
    

    public function signup() {
        return view('frontend.signup');
    }
    
    public function status_canceled() {
        return view('frontend.status_canceled');
    }
    
    public function status_completed() {
        return view('frontend.status_completed');
    }

    public function status_onprogress() {
        return view('frontend.status_onprogress');
    }

    
    public function successful() {
        return view('frontend.successful');
    }
    
    public function terms() {
        return view('frontend.terms');
    }

    public function searchpage() {
        return view('frontend.search');
    }

    public function offers() {
        return view('frontend.offers');
    }

    public function restaurant() {
        return view('frontend.restaurant');
    }

    public function login() {
        return view('frontend.login');
    }

    public function trending() {
        return view('frontend.trending');
    }
}
