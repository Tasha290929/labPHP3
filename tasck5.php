<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ваша веб-страница</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        nav {
            background-color: #555;
            color: white;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        nav li {
            margin: 0 15px;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ffcc00;
        }

        section {
            padding: 40px;
            text-align: center;
        }

 

        section img {
           
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        section img:hover {
            transform: scale(1.1);
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

    <header>
        <h1>Милые и пушистые котики</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Фрото котов </a></li>
            <li><a href="#">Год</a></li>
        </ul>
    </nav>

    <section>
        <h2>Коты</h2>
      
        <?php
        $dir = 'image/';
        $files = scandir($dir);

        if ($files !== false) {
            foreach ($files as $file) {
                if ($file != "." && $file != "..") {
                    $path = $dir . $file;
                    echo '<img src="' . $path . '" alt="Image">';
                }
            }
        }
        ?>
    </section>

    <footer>
        <p>USM 2024</p>
    </footer>

</body>
</html>
