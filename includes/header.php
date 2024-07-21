<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Project/css/bootstrap.css" />
    <link rel="stylesheet" href="/Project/css/style.css" />
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #595959;
            color: white;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #404040;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header h1 {
            color: #FFA500;
            margin: 0;
        }
        nav {
            display: flex;
            gap: 20px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        .search-bar {
            display: flex;
            align-items: center;
        }
        .search-bar input[type="text"] {
            padding: 5px;
            border: none;
            border-radius: 3px;
        }
        .search-bar input[type="submit"] {
            background-color: #FFA500;
            border: none;
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        .content {
            padding: 20px;
        }
        form {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 10px;
            max-width: 600px;
            margin: 20px auto;
            background-color: #404040;
            padding: 20px;
            border-radius: 10px;
        }
        form label {
            align-self: center;
            color: white;
        }
        form input[type="text"],
        form input[type="email"],
        form textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            color: #333;
        }
        form input[type="submit"] {
            grid-column: span 2;
            background-color: #FFA500;
            border: none;
            color: white;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <title>Web Design & Development Course</title>
    
</head>
<body>
    <header>
        <h1>WD</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="logout.php">Logout</a>
            <a href="login.php"> Login</a>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Type To text">
            <input type="submit" value="Search">
        </div>
    </header>
</body>
</html>