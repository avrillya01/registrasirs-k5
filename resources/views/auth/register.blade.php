<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            background: #f4f6f8;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-container {
            background: #fff;
            padding: 2rem 2.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.08);
            width: 370px;
        }
        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 0.7rem;
            background: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover {
            background: #218838;
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
        .login-link {
            text-align: center;
            margin-top: 1rem;
        }
        .login-link a {
            color: #007bff;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        @if($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif
        <form method="POST" action="{{ url('/register') }}">
            @csrf
            <label>Nama</label>
            <input type="text" name="name" value="{{ old('name') }}" required autofocus>
            <label>Nomor Handphone</label>
            <input type="text" name="phone" value="{{ old('phone', session('phone')) }}" maxlength="15" required>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" required>
            <button type="submit">Register</button>
        </form>
        <div class="login-link">
            Sudah punya akun? <a href="{{ url('/login') }}">Login</a>
        </div>
        @if(session('warning'))
            <div class="error">{{ session('warning') }}</div>
        @endif
    </div>
</body>
</html> 