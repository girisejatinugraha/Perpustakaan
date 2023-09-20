<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan | Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        background-color: #1c9436;
        background-size: cover;
        padding: 20px;
    }

    .main {
        height: 100vh;
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .register-box {
        width: 300px;
        border: solid 1px #CED4DA;
        padding: 20px;
        background-color: #FFFFFF;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-floating {
        position: relative;
        margin-bottom: 20px;
    }

    .form-floating input,
    .form-floating textarea {
        width: 100%;
        padding: 8px;
        border: none;
        border-bottom: 1px solid #CED4DA;
        background-color: transparent;
        border-radius: 0;
    }

    .form-floating label {
        position: absolute;
        top: 0;
        left: 0;
        pointer-events: none;
        padding: 8px;
        transition: 0.2s;
    }

    .form-floating input:focus~label,
    .form-floating input:not(:placeholder-shown)~label,
    .form-floating textarea:focus~label,
    .form-floating textarea:not(:placeholder-shown)~label {
        transform: translate(0, -80%) scale(0.75);
        color: #155724;
    }

    button[type="submit"] {
        background-color: #155724;
        color: #FFFFFF;
        border: none;
        border-radius: 0;
        padding: 8px 16px;
    }

    button[type="submit"]:hover {
        background-color: #0D4416;
    }

    .login-link {
        color: #155724;
    }
</style>
<body>
    <div class="main">
        @if ($errors->any())
            <div class="alert alert-danger" style="width: 300px; margin-top: 20px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('status'))
            <div class="alert alert-{{ session('status') }}" style="width: 300px;">
                {{ session('message') }}
            </div>
        @endif
        <div class="register-box">
            <form action="" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="username">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password">
                    <label for="password">Password</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="phone" class="form-control" id="phone">
                    <label for="phone">Phone</label>
                </div>
                <div class="form-floating">
                    <textarea type="text" name="address" class="form-control" id="address" rows="5"></textarea>
                    <label for="address">Address</label>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control">Sign Up</button>
                </div>
                <div class="text-center">
                    Have an account? <a href="/login" class="login-link">Sign In</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
