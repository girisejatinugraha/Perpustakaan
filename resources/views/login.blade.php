<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Perpustakaan | Sign In</title>
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

        .login-box {
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

        .form-floating input {
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
        .form-floating input:not(:placeholder-shown)~label {
            transform: translate(0, -80%) scale(0.75);
            color: #155724;
        }

        .signup-link {
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
    </style>
</head>
<body>
    <div class="main">
        @if (session('status'))
            <div class="alert alert-{{ session('status') }}">
                {{ session('message') }}
            </div>
        @endif
        <div class="login-box">
            <form action="login" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" required>
                    <label for="password">Password</label>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control">Sign In</button>
                </div>
                <div class="text-center">
                    Don't have an account? <a href="/register" class="signup-link">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
