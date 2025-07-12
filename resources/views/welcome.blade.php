<!DOCTYPE html>
<html>
    <head>
    <title>Selamat Datang</title>
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
            background: url('/build/assets/hospital-back.jpg') center center/cover no-repeat;
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
            position: relative;
        }
        .logo {
            margin-bottom: 50px;
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
        .input-group {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 4px;
            background: #fafafa;
            margin-bottom: 1.5rem;
            padding: 0.3rem 0.7rem;
        }
        .input-group img {
            width: 28px;
            margin-right: 8px;
        }
        .input-group select {
            border: none;
            background: transparent;
            font-size: 1rem;
            margin-right: 8px;
        }
        .input-group input[type="text"] {
            border: none;
            background: transparent;
            font-size: 1rem;
            flex: 1;
            outline: none;
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
        button:disabled {
            background: #ccc;
            cursor: not-allowed;
        }
        button:hover:enabled {
            background: #1a2652;
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
                <img src="/build/assets/hospital-logo.png" alt="Hospital Logo" style="height:48px;"/>
            </div>
            <div class="form-title">Masuk/Daftar</div>
            <div class="desc">Selamat datang di RumahSakit. Silakan masukkan email dan password Anda untuk melanjutkan.</div>
            <form method="POST" action="/login">
                @csrf
                <div class="input-group">
                    <input type="email" name="email" placeholder="Email" required />
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required />
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    </body>
</html>
