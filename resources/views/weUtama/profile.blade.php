<!DOCTYPE html>
<html>
<head>
    <title>Profil Pengguna</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="profile-body">
    <div class="back-arrow">
        <a href="#" onclick="history.go(-1); return false;"> <!-- Kembali ke halaman sebelumnya saat panah diklik -->
            <img src="{{ asset('assets/images/back-arrow.png') }}" alt="Back Arrow">
        </a>
    </div>
    <h1 class="profile-h1">Profil Pengguna</h1>
    <div class="profile-info">
        <p><strong>Nama:</strong> {{ $user->name }}</p>
        <p><strong>Username:</strong> {{ $user->username }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Telepon:</strong> {{ $user->phone }}</p>
        <!-- Anda bisa menambahkan lebih banyak detail profil di sini -->

        <!-- Tombol untuk menuju halaman update profil -->
        {{--  <a href="{{ route('/') }}" class="update-button">Update Profil</a>  --}}
        <button class="update-button">Update Profil</button>
    </div>
</body>
</html>

