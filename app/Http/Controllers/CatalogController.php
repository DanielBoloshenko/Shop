<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog() {
        return view('catalog');
    }
    public function category() {
        return view('category');
    }
    public function details() {
        return view('details');
    }
}
