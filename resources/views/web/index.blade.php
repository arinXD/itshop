@extends('layouts.my-app')
@section('content')
    <div class="p-4">
        <h2 class="">ข้อมูลร้านค้า</h2>
        <ul>
            <li>ที่อยู่ร้าน: {{ $address }}</li>
            <li>เบอร์โทร: {{ $mobilePhone }}</li>
            <li>ที่ตั้งร้าน: {{ $location }}</li>
        </ul>

        <div class="gap-2" style="display: flex; justify-content:start; align-items:center;">
            <h4 class="m-0">ข้อมูลผู้ใช้</h4>
            <p class="m-0">({{ count($users) }} account)</p>
        </div>
        <ul>
            @forelse ($users as $user)
                <li>{{ $user->name }} {{ "<$user->email>" }}</li>
            @empty
                <p>No users</p>
            @endforelse
        </ul>
    </div>
@endsection
