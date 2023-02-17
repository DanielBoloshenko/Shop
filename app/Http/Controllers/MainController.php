<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller
{
    public function main() {
        return view('main');
    }
    public function search(Request $Request) {
        $data = $Request->validate([
            'search' => ['required', 'string', 'min:3']
        ]);
        $search = $Request->search;
        $products = Product::where('name', 'like', '%' . $search . '%')->orderBy('name')->paginate(10);
        return view('catalog', compact('products'));
    }
}
