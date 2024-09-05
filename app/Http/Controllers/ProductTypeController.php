<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;

class ProductTypeController extends Controller
{
    public function index(Request $rq)
    {
        $product_ty = ProductType::all();
        $currentCategoryId = $rq->query('category') ?? $product_ty[0]->id;
        return view('product_type.index', compact(
            'product_ty',
            'currentCategoryId',
        ));
    }
    public function index2(Request $rq)
    {
        $ptypes = ProductType::all();
        return view('product_type_2.index', compact(
            'ptypes',
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
