<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trisha's Student Profile</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #dbeafe, #ede9fe);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-card {
            width: 550px;
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        h1 {
            text-align: center;
            color: #4f46e5;
            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
        }

        .info {
            background: #f8fafc;
            padding: 13px 16px;
            margin: 10px 0;
            border-radius: 8px;
        }

        .info strong {
            color: #4f46e5;
        }

        .button-container {
            text-align: center;
            margin-top: 30px;
        }

        .profile-button {
            display: inline-block;
            padding: 12px 25px;
            background: #4f46e5;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .profile-button:hover {
            background: #3730a3;
        }
    </style>
</head>

<body>

<div class="profile-card">

    <h1>TRISHA'S STUDENT PROFILE</h1>

    <p class="subtitle">
        Welcome to my student profile
    </p>

    <div class="info">
        <strong>Name:</strong>
        Trisha Denisse O. Bundalian
    </div>

    <div class="info">
        <strong>Course:</strong>
        BS Information Technology
    </div>

    <div class="info">
        <strong>Section:</strong>
        F1
    </div>

    <div class="button-container">
        <a href="/lavalust/student/profile" class="profile-button">
            VIEW STUDENT PROFILE
        </a>
    </div>

</div>

</body>
</html>