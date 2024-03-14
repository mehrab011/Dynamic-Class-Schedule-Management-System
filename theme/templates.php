<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1em;
        }

        .logo {
            width: 50px; /* Adjust the width as needed */
        }

        h1 {
            margin: 0;
            cursor: pointer; /* Add cursor style to indicate it's clickable */
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            position: relative;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ffcc00;
        }

        /* Motion Effect */
        nav a:before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #ffcc00;
            visibility: hidden;
            transform: scaleX(0);
            transition: all 0.3s ease-in-out 0s;
        }

        nav a:hover:before {
            visibility: visible;
            transform: scaleX(1);
        }

        section {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Adjustments for Small Screens */
        @media screen and (max-width: 600px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }

            nav ul {
                margin-top: 10px;
            }
        }
    </style>
    <title>Class Schedule Management System</title>
</head>
<body>

    <header>
        <div class="logo" onclick="location.reload()">
            <!-- Your logo goes here -->
            <img src="<?php echo web_root; ?>img/univlogo.png" height="40">
        </div>
        <h1 onclick="location.reload()">Class Schedule Management System</h1>
        <nav>
            <ul>
                <li><a href="/classrecord/admin">Admin</a></li>
                <li><a href="/classrecord/admin">Teacher</a></li>
                <li><a href="/student">Student</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <!-- Your dynamic schedule content goes here -->
        <p>This is where the dynamic class schedule content will be displayed.</p>
    </section>

    <footer>
        &copy; 2024 Class Schedule Management System. All rights reserved.
    </footer>

</body>
</html>
