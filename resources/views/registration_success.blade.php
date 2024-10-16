<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            margin: 0; /* Remove default margin */
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px; /* Limit width for better layout */
            width: 100%; /* Ensure responsiveness */
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2em; /* Adjust heading size */
        }

        p {
            margin: 10px 0; /* Vertical margin for paragraphs */
            font-size: 1.2em; /* Adjust font size */
        }

        a {
            display: inline-block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Successful!</h1>
        <p>Email: {{ session('email') }}</p>
        <p>Hashed Password: {{ session('hashed_password') }}</p>
        <p>Salt Password: {{session('salt')}}</p>
        <a href="/">Register a new email</a>
        <a href="/login">Login</a>
    </div>
</body>
</html>
