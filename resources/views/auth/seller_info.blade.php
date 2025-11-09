<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Store Information</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fafafa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .store-container {
            background-color: #fff;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            padding: 30px 40px;
        }

        .store-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #d0d0d0;
            border-radius: 6px;
            font-size: 14px;
            resize: none;
            outline: none;
            transition: border-color 0.2s ease;
        }

        input:focus,
        textarea:focus {
            border-color: #f59e0b;
        }

        .btn-group {
            display: flex;
            gap: 10px;
            justify-content: space-between;
        }

        button {
            flex: 1;
            background-color: #f59e0b;
            color: #000;
            padding: 10px;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #e68a00;
        }

        .btn-skip {
            background-color: #e5e7eb;
        }

        .btn-skip:hover {
            background-color: #d1d5db;
        }

        .back-link {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
        }

        .back-link a {
            color: #f59e0b;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="store-container">
        <h2>Store Information</h2>

        <form action="{{ route('register.step2') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user_id }}">

            <input type="text" name="store_name" placeholder="Store Name">
            <textarea name="description" placeholder="Store Description" rows="4"></textarea>

            <div class="btn-group">
                <button type="submit" name="action" value="submit">Save Store Info</button>
                <button type="submit" name="action" value="skip" class="btn-skip">Skip for Now</button>
            </div>
        </form>


    </div>
</body>

</html>
