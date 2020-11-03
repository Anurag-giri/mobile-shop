<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MobileCategory extends Model
{
    protected $table = 'mobile_category';

    protected static function getCategoryAndBrandData(){
        return MobileCategory::join('mobile_brands','mobile_category.id','mobile_brands.mobiles_category_id')
                                ->select('mobile_category.id','mobile_category_name','mobile_brand')
                                ->get();
    }

}
