<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* Add your existing CSS styles here or link to an external CSS file */
        body, h1, p {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }

        form div {
            margin-bottom: 15px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
        }

        form input {
            width: 90%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        form button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <form action="/login" method="POST">
        @csrf

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
            <a href = "/">Register</a>
        </div>
    </form>
</body>
</html>
