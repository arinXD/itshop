@extends('layouts.my-app')
@section('content')
    <div class="p-4">

        <ul>
            <li>ที่อยู่ร้าน: {{ $address }}</li>
            <li>เบอร์โทร: {{ $mobilePhone }}</li>
            <li>ที่ตั้งร้าน: {{ $location }}</li>
        </ul>

        <h2>Users list</h2>
        <ul>
            @forelse ($users as $user)
                <li>{{ $user->name }} {{ "<$user->email>" }}</li>
            @empty
                <p>No users</p>
            @endforelse
        </ul>
    </div>
    <div class="p-4">
        <h2>ประเภทสินค้า</h2>
        <div class="">
            @forelse ($productTypes as $type)
                <div class="accordion" id="accordionExample" style="border: 1px solid rgb(129, 129, 129); border-radius: 10px;">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="{{ $loop->index == 0 }}"
                                aria-controls="collapseOne">
                                {{ $loop->index + 1 }}) {{ $type->name }}
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul style="list-style-type: none;">
                                    @forelse ($type->products as $i => $product)
                                        <li>
                                            <p style="color: black">
                                                {{ $i + 1 }}. {{ $product->name }} - {{ $product->price }} บาท
                                            </p>
                                            <img style="object-fit: cover;" width="300" height="200" src="{{ $product->image_url }}"
                                                alt="{{ $product->name }}">
                                        </li>
                                    @empty
                                        <p style="color: black">ไม่มีสินค้า</p>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            @empty
                <p>No users</p>
            @endforelse
        </div>
    </div>
@endsection
