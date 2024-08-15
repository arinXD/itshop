<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My shop</title>
</head>

<body>
    <h1>ITShop</h1>
    <h2>Shop information</h2>
    <ul>
        <li>ที่อยู่ร้าน: {{$address}}</li>
        <li>เบอร์โทร: {{$mobilePhone}}</li>
        <li>ที่ตั้งร้าน: {{$location}}</li>
    </ul>
    <h2>Users list</h2>

    <ul>
        @forelse ($users as $user)
            <li>{{ $user->name }} {{ "<$user->email>" }}</li>
        @empty
            <p>No users</p>
        @endforelse
    </ul>
</body>

</html>
