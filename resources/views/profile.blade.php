<!DOCTYPE html>
<html>
<head>
    <title>Profil Pengguna</title>
</head>
<body>
    <h1>Profil Pengguna</h1>
    <div>
        <p><strong>Nama:</strong> {{ $user->name }}</p>
        <p><strong>Username:</strong> {{ $user->username }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Telepon:</strong> {{ $user->phone }}</p>
        <p><strong>Tanggal Verifikasi Email:</strong> {{ $user->email_verified_at }}</p>
        <!-- Anda bisa menambahkan lebih banyak detail profil di sini -->
    </div>
</body>
</html>
