<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6f8;
        }
        .container {
            display: flex;
            min-height: 100vh;
        }
        .left {
            flex: 1.2;
            background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=900&q=80') center center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .right {
            flex: 1;
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px 30px;
        }
        .logo {
            margin-bottom: 24px;
        }
        .logo img {
            height: 48px;
        }
        .close-btn {
            position: absolute;
            top: 32px;
            right: 40px;
            font-size: 1.5rem;
            color: #888;
            cursor: pointer;
        }
        .form-title {
            font-size: 2rem;
            font-weight: 700;
            color: #22336b;
            margin-bottom: 8px;
        }
        .desc {
            color: #444;
            margin-bottom: 24px;
            font-size: 1rem;
            text-align: left;
        }
        form {
            width: 100%;
            max-width: 340px;
        }
        label {
            font-weight: 600;
            margin-bottom: 6px;
            display: block;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 0.6rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }
        button {
            width: 100%;
            padding: 0.7rem;
            background: #22336b;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            margin-top: 8px;
            transition: background 0.2s;
        }
        button:hover {
            background: #1a2652;
        }
        .error {
            color: #d32f2f;
            background: #ffebee;
            border: 1px solid #ffcdd2;
            padding: 0.5rem;
            border-radius: 4px;
            margin-bottom: 1rem;
            font-size: 0.95rem;
        }
        .register-link {
            text-align: center;
            margin-top: 1.5rem;
        }
        .register-link a {
            color: #22336b;
            text-decoration: none;
            font-weight: 600;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
        @media (max-width: 900px) {
            .container { flex-direction: column; }
            .left, .right { flex: unset; width: 100%; min-height: 300px; }
            .right { min-height: 400px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <!-- Gambar di kiri -->
        </div>
        <div class="right">
            <div class="logo">
                <!-- <img src="https://www.siloamhospitals.com/themes/siloam/images/logo-siloam.png" alt="Logo"/> -->
            </div>
            <span class="close-btn" onclick="window.location.href='/'">&times;</span>
            <div class="form-title">Masuk/Daftar</div>
            <div class="desc">Selamat datang di Siloam. Silakan masukkan email dan password Anda untuk melanjutkan.</div>
            @if($errors->any())
                <div class="error">
                    {{ $errors->first() }}
                </div>
            @endif
            <form method="POST" action="{{ url('/login') }}">
                @csrf
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus>
                <label>Password</label>
                <input type="password" name="password" required>
                <button type="submit">Login</button>
            </form>
            <div class="register-link">
                Belum punya akun? <a href="{{ url('/register') }}">Register</a>
            </div>
        </div>
    </div>
</body>
</html> 