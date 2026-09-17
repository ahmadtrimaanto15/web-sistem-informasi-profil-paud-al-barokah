<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin - PAUD Al-Barokah</title>
</head>
<body style="font-family: sans-serif; background:#eef4ff; display:flex; justify-content:center; align-items:center; height:100vh; margin:0;">
    <div style="background:white; padding:2rem; border-radius:10px; width:320px; box-shadow:0 4px 10px rgba(0,0,0,0.1);">
        <h2 style="color:#1e40af;">Login Admin</h2>

        @if ($errors->any())
            <div style="color:red; margin-bottom:1rem;">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}" style="width:100%; padding:8px; margin-bottom:1rem; box-sizing:border-box;"><br>

            <label>Password</label><br>
            <input type="password" name="password" style="width:100%; padding:8px; margin-bottom:1rem; box-sizing:border-box;"><br>

            <button type="submit" style="width:100%; padding:10px; background:#1e40af; color:white; border:none; border-radius:5px;">Masuk</button>
        </form>
    </div>
</body>
</html>