<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Junior Dev Onboarding</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .card {
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                padding: 30px;
                max-width: 500px;
                width: 100%;
                text-align: center;
            }

         .system-info {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            padding: 20px;
            max-width:     400px;
            width: 90%;
            margin: 20px auto 0;
            text-align: left;
        }

        .system-info h3 {
            color: #28a745;
            margin-top: 0;
            font-size: 20px;
        }

        .system-info p {
            margin: 10px 0;
            color: #333;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class= "card">
        <h1 style="font-family: Arial, sans-serif;">Junior Software Engineer</h1>
        <h4 style="font-family: Arial, sans-serif;">Name: Marco Antonio Cabrera</h4>
        <h4 style="font-family: Arial, sans-serif;">"God Will Provide"</h4>

        <h2 style="font: italic bold 16px/1.5 Arial, sans-serif;">Current Tech Stack:</h2>
        <p style="font: italic bold 16px/1.5 Arial, sans-serif;">- HTML AND CSS3</p>
        <p style="font: italic bold 16px/1.5 Arial, sans-serif;">- JAVASVRIPT BASICS</p>
        <p style="font: italic bold 16px/1.5 Arial, sans-serif;">- XAMPP ENVIRONMENT</p>

        <button onclick="alert('System Initialized! Welcome aboard, Marco!')">Initialize System</button>

        <div class= "system-info">
            <h3>Server Status: Online</h3>
            <p><strong>Date and Time: </strong> 
            <?php echo date('F j, g:i a'); ?></p>
            <p><strong>PHP Version:</strong> 
            <?php echo phpversion();?></p>
        </div>
    </div>
</body>
</html>
