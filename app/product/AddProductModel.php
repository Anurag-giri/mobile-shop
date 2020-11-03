<?php

namespace App\product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AddProductModel extends Model
{
    protected $table = 'add_mobile_products';

    public static function saveProductDetails( $params ) {
        try {
			 return AddProductModel::insertGetId($params);
		} catch (\Exception $e) {

		    return $e->getMessage();
		}	
    }

    public static function saveImageDetailsOfProduct( $params , $id ) {
    	try {
			foreach ($params as $key => $value) {
				$imageData[$key]['image_id'] = $id;
				$imageData[$key]['image_name'] = $value['imageName'];
				$imageData[$key]['image_path'] = $value['imagePath'];
			}

	        return DB::table('image_data')->insert($imageData);
    	} catch (\Exception $e) {
    		return $e->getMessage();
    	}
    }

}
