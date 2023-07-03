<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('term');
        $products = Product::where('name', 'LIKE', "%$searchTerm%")->get();

        $formattedProducts = $products->map(function ($product) {
            return [
                'label' => $product->name,
                'value' => $product->id
            ];
        });

        return response()->json($formattedProducts);
    }
}
