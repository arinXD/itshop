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
@endsection
