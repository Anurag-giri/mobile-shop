<?php

namespace App\product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GetProduct extends Model
{
    protected $table = "add_mobile_products";

    protected static function getProductData($id=" ") {
		if(isset($id) && $id!=' ') {
			$product =  DB::table('add_mobile_products')->select()->where('id','=',$id)->get();
		} else {
			$product =  DB::table('add_mobile_products')->select()->get();
		}
	
    	$data = array();
    	foreach ($product as $key => $value) {
           $arrayName = (array) $value;
            for($i = 0; $i < count($arrayName); $i++) {
                $data[$key][key($arrayName)] = $arrayName[key($arrayName)];                
                next($arrayName);
            }
            $data[$key]['images'] = DB::table('image_data')->where('image_id','=', $arrayName['id'])->get()->toArray();
    	}
    	return $data;

    }

}
