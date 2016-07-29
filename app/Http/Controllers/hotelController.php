<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class hotelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function addhotel(Request $req)
    {
        $name = $req->name;
        $address = $req->address;
        $price = $req->price;
        $input = [
            'name'= 'name'
            'name'= 'name'
            'name'= 'name'
        ];
        return ('home');
    }
}
