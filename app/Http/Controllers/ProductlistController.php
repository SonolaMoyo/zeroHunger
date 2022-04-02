<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductlistController extends Controller
{
    public function index() {

        return view('products');
    }
}
