<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trisha Store - Login</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: #f5f1e8;
        }

        .login-container {
            width: 90%;
            max-width: 400px;
            background: white;
            padding: 40px 35px;
            border-radius: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            margin: 0;
            color: #2e7d32;
            font-size: 32px;
        }

        label {
            font-weight: bold;
            color: #444;
        }

        input {
            width: 100%;
            padding: 13px 16px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 12px;
            font-size: 15px;
            outline: none;
        }

        input:focus {
            border-color: #2e7d32;
        }

        .login-button {
            width: 100%;
            padding: 13px;
            margin-top: 10px;
            border: none;
            border-radius: 30px;
            background: #2e7d32;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .login-button:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .error {
            background: #ffebee;
            color: #c62828;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        @media (max-width: 600px) {
            .login-container {
                width: 92%;
                padding: 30px 22px;
                border-radius: 20px;
            }

            .header h1 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

<div class="login-container">

    <div class="header">
        <h1>Trisha Store</h1>
    </div>

    <?php if (isset($error)): ?>
        <div class="error">
            <?= htmlspecialchars($error); ?>
        </div>
    <?php endif; ?>

    <form action="" method="POST">

        <label>Username:</label>
        <input
            type="text"
            name="username"
            placeholder="Enter username"
            required
        >

        <br><br>

        <label>Password:</label>
        <input
            type="password"
            name="password"
            placeholder="Enter password"
            required
        >

        <button type="submit" class="login-button">
            Login
        </button>

    </form>

</div>

</body>
</html>