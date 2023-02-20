<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function catalog(Request $r) {
        if(!empty($r->all())) {
            $table = DB::table('products');

            isset($r->category) ? $table->where('category', $r->category) : null;

            isset($r->field) ? $table->orderBy($r->field, $r->order) : null;

            $products = $table->get();
        } else {
            $products = Product::orderBy('created_at', 'desc')->where('count', '>', 0)->get();
        }

        return view('catalog', compact('products'));
    }

    public function details($product_id)
    {
        $product = Product::find($product_id);

        return view('product', compact('product'));
    }
}
