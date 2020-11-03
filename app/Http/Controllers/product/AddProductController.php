<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile ;
use Illuminate\Support\Facades\Storage;
use App\product\AddProductModel;
use Config;
// use Illuminate\Http\File;


class AddProductController extends Controller
{

    public function index() {
        return view('addproduct');
    }

    public function saveProductDetails(Request $request) {

        $params = array();

        // $validatedData = $request->validate([
        //     'mobile_price'     => 'required',
        //     'display_size'     => 'required',
        //     'rear_camera'      => 'required',
        //     'battery_size'     => 'required',
        //     'mobile_version'   => 'required',
        //     'mobile_images'    => 'required',  
        //     'mobile_warranty'  => 'required',
        //     'mobile_category'  => 'required',
        //     'mobile_emi_option'=> 'required',         
        // ]);
        // dd($request->input());

        $request_data = (array) $request->input();
        for($i = 0; $i < count($request_data); $i++) {
            $params[key($request_data)] = $request_data[key($request_data)];
            next($request_data);
        }
        unset($params['_token']);

        $folderName = str_replace(' ', '_', $request->mobile_name);
        $folderDir = file_exists(public_path('img/'.$folderName)) ? true : false;

        if(!$folderDir) {
           @mkdir(public_path('img/'.$folderName));
        }

        $imageDetails = array();
        $allowedImageExtension = array('jpg','jpeg','png'); // check image extension 
        foreach($request->mobile_images as $key => $file) {
            $filename = $file->getClientOriginalName();
            $imageExtension = $file->getClientOriginalExtension();

            $checkVersionFolder = true;
            $pathOfVersion = "img/".$folderName."/".$request->mobile_version; // version path where we store our images
            $checkVersionFolder = file_exists(public_path($pathOfVersion)) ? true : false ;
            //check folder are exists are not
            if(!$checkVersionFolder) {
                 @mkdir(public_path($pathOfVersion));
            }
            if( in_array($imageExtension, $allowedImageExtension)) {
                $imageName = explode('.',$filename)[0].rand(0 , time()).".$imageExtension";
                $imgPathToSave = "img/".$folderName."/".$request->mobile_version;
                $returImgRes = $file->move(public_path($imgPathToSave) , $imageName);
                $imageDetails[$key]['imageName'] = $imageName;
                $imageDetails[$key]['imagePath'] = $imgPathToSave;
            }
        }
        $result = AddProductModel::saveProductDetails( $params ); // here we save product details only not imagaes
        if ($result) {
           $result = AddProductModel::saveImageDetailsOfProduct( $imageDetails , $result); // here we save images details only
           if($result) {
            $result = 'Product Added Successfully';
           }
        }
        return redirect('addproduct')->with('status', $result);
        
    }
}
