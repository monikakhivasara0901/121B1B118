<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Result</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(45deg, #3498db, #e74c3c);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            color: black;
        }

        .result-container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            padding: 30px;
            box-sizing: border-box;
            transition: transform 0.3s ease-in-out;
            margin-bottom: 20px;
            text-align: center;
        }

        .result-container:hover {
            transform: scale(1.02);
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
        }

        p {
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h1>Result</h1>
        <?php
        // Get shape and area from the URL parameters
        $selectedShape = isset($_GET['shape']) ? $_GET['shape'] : '';
        $area = isset($_GET['area']) ? $_GET['area'] : '';

        // Display the result based on the selected shape
        switch ($selectedShape) {
            case 'Triangle':
                echo "<p>The area of the triangle is: $area square units</p>";
                break;

            case 'Circle':
                echo "<p>The area of the circle is: $area square units</p>";
                break;

            case 'Rectangle':
                echo "<p>The area of the rectangle is: $area square units</p>";
                break;

            default:
                echo "<p>Invalid shape selection</p>";
                break;
        }
        ?>
    </div>
</body>
</html>
