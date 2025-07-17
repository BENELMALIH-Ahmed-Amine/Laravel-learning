<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $AllProducts = Product::all();

        return view("home", compact('AllProducts'));
    }
}
