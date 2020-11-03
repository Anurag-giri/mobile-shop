<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MobileCategory;
use App\product\GetProduct;
use App\MobileBrand;

class CategoryController extends Controller
{
    public function index() {
        return view('index');
    }
    
    public function category() {
        $category = MobileCategory::all();
        return view(
            'category',
            ['category' => $category,
        	'data'=> MobileCategory::getCategoryAndBrandData(),
        	'productData' => GetProduct::getProductData(),
        ]);
    }

    public function getProductDetails(Request $request) {
        return view('productDetails',
                    ['product_detail' => GetProduct::getProductData($request->input('id'))
        ]);
        
    }

}
