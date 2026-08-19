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
            width: 500px;
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        h1 {
            margin-bottom: 5px;
            color: #4f46e5;
        }

        .subtitle {
            color: #666;
            margin-bottom: 25px;
        }

        .info {
            margin: 12px 0;
            font-size: 16px;
        }

        .section-title {
            margin-top: 25px;
            color: #4f46e5;
        }

        ul {
            padding-left: 20px;
        }

        li {
            margin: 7px 0;
        }

        .back {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 18px;
            background: #4f46e5;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <div class="profile-card">

        <h1>TRISHA DENISSE</h1>
        <div class="subtitle">Student Profile</div>

        <div class="info">
            <strong>Student ID:</strong> YOUR-STUDENT-ID
        </div>

        <div class="info">
            <strong>Name:</strong> Trisha Denisse Ortega Bundalian
        </div>

        <div class="info">
            <strong>Course:</strong> BSIT
        </div>

        <div class="info">
            <strong>Section:</strong> 3-F1
        </div>

        <h3 class="section-title">Profile Description</h3>

        <p>
            I am a BSIT student interested in web development
            and information technology.
        </p>

        <h3 class="section-title">Skills</h3>

        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>PHP</li>
            <li>Database Management</li>
        </ul>

        <h3 class="section-title">Hobbies</h3>

        <ul>
            <li>Watching movies</li>
            <li>Listening to music</li>
            <li>Exploring technology</li>
        </ul>

        <a href="/lavalust/student" class="back">Back to Student Page</a>

    </div>

</body>
</html>