<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background: linear-gradient(135deg, #6420AA, #7743DB);
            color: white;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: rgba(255,255,255,0.1);
            padding: 40px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .btn {
            display: inline-block;
            padding: 15px 30px;
            background: white;
            color: #6420AA;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
            margin: 10px;
            transition: transform 0.3s ease;
        }
        .btn:hover {
            transform: translateY(-3px);
            color: #6420AA;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎉 PHP is Working!</h1>
        <p>If you can see this page, your PHP server is running correctly.</p>
        <p>Now you can access your portfolio website.</p>

        <a href="index.php" class="btn">View Portfolio Website</a>
        <a href="http://localhost:8000" class="btn">Go to Homepage</a>

        <div style="margin-top: 40px; padding: 20px; background: rgba(255,255,255,0.1); border-radius: 10px;">
            <h3>Server Information:</h3>
            <p>PHP Version: <?php echo phpversion(); ?></p>
            <p>Current Time: <?php echo date('Y-m-d H:i:s'); ?></p>
            <p>Server: <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'PHP Development Server'; ?></p>
        </div>
    </div>
</body>
</html>

