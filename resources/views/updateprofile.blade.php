<!DOCTYPE html>
<html>
<head>
    <title>Update Profil Pengguna</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="profile-body">
    <div class="updateprof-form">
        <form action="{{ route('updateprofile.submit') }}" method="POST">
            @csrf
            <div class="updateprof-form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}">
            </div>
            <div class="updateprof-form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="{{ $user->username }}">
            </div>
            <div class="updateprof-form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}">
            </div>
            <div class="updateprof-form-group">
                <label for="phone">Telepon:</label>
                <input type="tel" id="phone" name="phone" value="{{ $user->phone }}">
            </div>
            <div class="updateprof-form-group">
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</body>
</html>

