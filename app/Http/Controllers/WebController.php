<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\User;
use Illuminate\Http\Request;

class WebController extends Controller
{
    function webPage(){
        $users = User::all();
        $productTypes = ProductType::all();
        $address = "IT CP KKU";
        $mobilePhone = "0987654321";
        $location = "Khon Kaen";
        return view("web.index", compact(
            "users",
            "address",
            "mobilePhone",
            "location",
            "productTypes"
        ));
    }
}
