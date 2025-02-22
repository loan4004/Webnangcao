<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .register-container {
            max-width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .register-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2>Đăng Ký</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Họ và tên</label>
            <input type="text" name="name" class="form-control" placeholder="Nhập họ và tên" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Nhập email" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Mật khẩu</label>
            <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nhập lại mật khẩu</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Nhập lại mật khẩu" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Đăng Ký</button>
        <p class="text-center mt-3">Đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập</a></p>
    </form>
</div>

</body>
</html>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif