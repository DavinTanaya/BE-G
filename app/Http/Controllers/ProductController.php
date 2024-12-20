<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createIndex(){
        return view('create');
    }
    
    public function createProduct(Request $request){
         $request->validate([
            'name' => 'required|min:5',
            'stock' => 'required|integer'
         ]);

         Product::create([
            'name' => $request->name,
            'stock' => $request->stock
         ]);

         return redirect(route('home'));
    }

    public function updateIndex($id){
        $product = Product::find($id);
        return view('edit', compact('product'));
    }

    public function updateProduct(Request $request, $id){
        $product = Product::find($id);
        $request->validate([
           'name' => 'required|min:5',
           'stock' => 'required|integer'
        ]);

        $product->update([
           'name' => $request->name,
           'stock' => $request->stock
        ]);

        return redirect(route('home'));
   }

   public function deleteProduct($id){
        Product::destroy($id);
        return redirect(route('home'));
   }
}
