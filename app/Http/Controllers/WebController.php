<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\User;
use Illuminate\Http\Request;

class WebController extends Controller
{
    function webPage(Request $request)
    {
        $users = User::all();
        $productTypes = ProductType::all();
        $address = "IT CP KKU";
        $mobilePhone = "0987654321";
        $location = "Khon Kaen";
        $currentCategoryId = $request->query('category') ?? 1;
        return view("web.index", compact(
            "users",
            "address",
            "mobilePhone",
            "location",
            "productTypes",
            "currentCategoryId"
        ));
    }
}
