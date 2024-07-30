<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
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
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input[type="checkbox"] {
            margin-right: 10px;
        }
        .form-group input[type="number"] {
            width: 60px;
            padding: 5px;
            margin-left: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .error {
            color: #dc3545;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Password Generator</h1>
        <form action="{{ route('password.generate') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>
                    <input type="checkbox" name="include_lowercase" value="1" {{ old('include_lowercase') ? 'checked' : '' }}>
                    Include Lowercase Letters
                </label>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" name="include_uppercase" value="1" {{ old('include_uppercase') ? 'checked' : '' }}>
                    Include Uppercase Letters
                </label>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" name="include_numbers" value="1" {{ old('include_numbers') ? 'checked' : '' }}>
                    Include Numbers
                </label>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" name="include_symbols" value="1" {{ old('include_symbols') ? 'checked' : '' }}>
                    Include Symbols
                </label>
            </div>
            <div class="form-group">
                <label>
                    Minimum Length:
                    <input type="number" name="min_length" value="{{ old('min_length', 8) }}" min="1" required>
                </label>
            </div>
            <button type="submit">Generate Password</button>
            @if($errors->any())
                <div class="error">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </form>
    </div>
</body>
</html>
