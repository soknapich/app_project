<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Jenkins PHP</title>
    <style>
        body {
            background: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            padding: 100px;
        }
        .container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            padding: 40px;
            max-width: 600px;
            margin: auto;
        }
        h1 {
            color: #2c3e50;
            font-size: 2.5em;
        }
        p {
            color: #555;
            font-size: 1.2em;
        }
        .status {
            margin-top: 20px;
            padding: 10px;
            color: white;
            background-color: #28a745;
            border-radius: 6px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Jenkins PHP Project!</h1>
        <p>This page is served by NGINX and interpreted by PHP inside a Docker container.</p>
        <div class="status">✔ <?php echo "Jenkins Build Successful";?>
        <?php echo 9+12; ?>
    </div>
    </div>
</body>
</html>
