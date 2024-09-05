@extends('layouts.my-app')
@section('content')
    <div class="p-4">
        <h6>หมวดหมู่สินค้า</h6>
        <div class="product-categories">
            <ul class="nav nav-tabs" id="productTabs" role="tablist">
                @foreach ($product_ty as $type)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $type->id == $currentCategoryId ? 'active' : '' }}"
                            id="tab-{{ $type->id }}" data-bs-toggle="tab" data-bs-target="#content-{{ $type->id }}"
                            aria-controls="content-{{ $type->id }}"
                            aria-selected="{{ $type->id == $currentCategoryId ? 'true' : 'false' }}">
                            {{ $type->name }}
                        </button>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="productTabsContent">
                @foreach ($product_ty as $type)
                    <div class="tab-pane fade {{ $type->id == $currentCategoryId ? 'show active' : '' }}"
                        id="content-{{ $type->id }}" role="tabpanel" aria-labelledby="tab-{{ $type->id }}">
                        @if ($type->products->isNotEmpty())
                            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                                @foreach ($type->products as $product)
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{ $product->image_url }}" class="card-img-top"
                                                onerror="this.onerror=null;this.src='https://img.freepik.com/premium-vector/cardboard-boxes-side-view-vector-illustration-business-cargo-object-icon-concept_722324-406.jpg?w=360';"
                                                alt="{{ $product->name }}" style="object-fit: cover; height: 200px;">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $product->name }}</h5>
                                                <p class="card-text">{{ $product->price }} บาท</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-center my-4">ไม่มีสินค้า</p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
