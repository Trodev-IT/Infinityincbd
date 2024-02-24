<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User Registration Notification</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        li strong {
            display: inline-block;
            width: 120px;
        }

        .verified {
            color: green;
        }

        .not-verified {
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>New Message Notification</h1>

    <p>Hello Admin, <strong>{{$admin->name}}</strong></p>

    <p>A new user has registered:</p>

    <ul>
        <li><strong>User Name:</strong> {{ $user->name }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
        <li>
            <strong>Message:</strong>
            {{$user->message}}
        </li>
    </ul>

    <p>Thank you!</p>
</div>
</body>
</html>
