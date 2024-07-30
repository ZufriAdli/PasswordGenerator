<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Result</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 500px;
            width: 100%;
            padding: 30px;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #007bff;
            margin-bottom: 20px;
            font-size: 2em;
            font-weight: 600;
        }
        .result {
            margin-bottom: 30px;
        }
        .password {
            font-size: 24px;
            font-weight: 700;
            color: #28a745;
            word-break: break-word; /* Ensures long passwords don't overflow */
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            background: #f9f9f9;
        }
        .back-link {
            font-size: 16px;
        }
        .back-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 5px;
            border: 1px solid #007bff;
            transition: background-color 0.3s, color 0.3s;
        }
        .back-link a:hover {
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Generated Password</h1>
        <div class="result">
            <p>Your generated password is:</p>
            <p class="password">{{ $password }}</p>
        </div>
        <div class="back-link">
            <a href="{{ route('password.form') }}">Generate Another Password</a>
        </div>
    </div>
</body>
</html>
