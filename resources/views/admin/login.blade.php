<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin - PAUD Al-Barokah</title>
    <style>
        * { box-sizing: border-box; margin:0; padding:0; }
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
        }
        .login-card {
            background: white;
            width: 100%;
            max-width: 380px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            overflow: hidden;
        }
        .login-header {
            background: #1e40af;
            color: white;
            text-align: center;
            padding: 2rem 1.5rem 1.5rem;
        }
        .login-header .icon {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        .login-header h1 {
            font-size: 1.4rem;
        }
        .login-header p {
            font-size: 0.85rem;
            opacity: 0.85;
            margin-top: 0.3rem;
        }
        .login-body {
            padding: 2rem 1.8rem;
        }
        .error-box {
            background: #fee2e2;
            color: #b91c1c;
            padding: 0.7rem 1rem;
            border-radius: 8px;
            font-size: 0.85rem;
            margin-bottom: 1.2rem;
        }
        .form-group {
            margin-bottom: 1.2rem;
        }
        .form-group label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: #334155;
            margin-bottom: 0.4rem;
        }
        .form-group input {
            width: 100%;
            padding: 0.7rem 0.9rem;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 0.95rem;
        }
        .form-group input:focus {
            outline: none;
            border-color: #1e40af;
            box-shadow: 0 0 0 3px rgba(30,64,175,0.15);
        }
        .btn-submit {
            width: 100%;
            background: #1e40af;
            color: white;
            border: none;
            padding: 0.8rem;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
        }
        .btn-submit:hover {
            background: #1e3a8a;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 1.2rem;
            font-size: 0.85rem;
            color: #64748b;
            text-decoration: none;
        }
        .back-link:hover {
            color: #1e40af;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-header">
            <div class="icon">&#128274;</div>
            <h1>Login Admin</h1>
            <p>PAUD Al-Barokah</p>
        </div>
        <div class="login-body">
            @if ($errors->any())
                <div class="error-box">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" autofocus>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password">
                </div>

                <button type="submit" class="btn-submit">Masuk</button>
            </form>

            <a href="{{ route('beranda') }}" class="back-link">&larr; Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>