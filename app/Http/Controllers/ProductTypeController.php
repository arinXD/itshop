<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;

class ProductTypeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth', ['only' => [
    //         'create',
    //         'store',
    //         'edit',
    //         'delete'
    //     ]]);
    //     // or
    //     $this->middleware('auth', ['except' => ['index', 'show']]);
    // }
    public function index(Request $rq)
    {
        $ptypes = ProductType::all();
        return view('product_type_2.index', compact(
            'ptypes',
        ));
    }
    public function index2(Request $rq)
    {
        $product_ty = ProductType::all();
        $currentCategoryId = $rq->query('category') ?? count($product_ty) > 0 ? $product_ty[0]->id : 0;
        return view('product_type.index', compact(
            'product_ty',
            'currentCategoryId',
        ));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy($id)
    {
        ProductType::destroy($id);
        return back();
    }
}
