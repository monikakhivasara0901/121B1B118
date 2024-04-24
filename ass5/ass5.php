<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Calculator</title>
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
        }

        form {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            padding: 30px;
            box-sizing: border-box;
            transition: transform 0.3s ease-in-out;
            margin-bottom: 20px;
        }

        form:hover {
            transform: scale(1.02);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
        }

        label {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 16px;
            color: #555;
        }

        input {
            margin-right: 10px;
            vertical-align: middle;
        }

        .dimensions {
            margin-top: 10px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 6px;
            padding: 12px;
            font-size: 16px;
            transition: background-color 0.3s ease-in-out;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        p {
            text-align: center;
            color: #fff;
            font-size: 18px;
            background-color: #3498db;
            border-radius: 6px;
            padding: 10px;
            margin: 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the selected shape from the form
        $selectedShape = isset($_POST['shape']) ? $_POST['shape'] : '';

        switch ($selectedShape) {
            case 'Triangle':
                $base = isset($_POST['triangleBase']) ? $_POST['triangleBase'] : 0;
                $height = isset($_POST['triangleHeight']) ? $_POST['triangleHeight'] : 0;
                $area = 0.5 * $base * $height;
                break;

            case 'Circle':
                $radius = isset($_POST['circleRadius']) ? $_POST['circleRadius'] : 0;
                $area = 3.14 * $radius * $radius;
                break;

            case 'Rectangle':
                $length = isset($_POST['rectangleLength']) ? $_POST['rectangleLength'] : 0;
                $breadth = isset($_POST['rectangleBreadth']) ? $_POST['rectangleBreadth'] : 0;
                $area = $length * $breadth;
                break;

            default:
                $area = "Invalid shape selection";
                break;
        }

        // Redirect to result page
        header("Location: result.php?shape=$selectedShape&area=$area");
        exit();
    }
    ?>

    <form method="post" action="">
        <h1>Area Calculator</h1>

        <!-- Triangle Input -->
        <label>
            <input type="radio" name="shape" value="Triangle" onclick="showDimensions('triangleDimensions')"> 
            <span>Triangle</span>
        </label>
        <div class="dimensions" id="triangleDimensions" style="display:none;">
            Height: <input type="text" name="triangleHeight" placeholder="Enter height">
            <br>
            <br>
            Base: <input type="text" name="triangleBase" placeholder="Enter base">
            <br>
        </div>

        <!-- Rectangle Input -->
        <label>
            <input type="radio" name="shape" value="Rectangle" onclick="showDimensions('rectangleDimensions')"> 
            <span>Rectangle</span>
        </label>
        <div class="dimensions" id="rectangleDimensions" style="display:none;">
            Length: <input type="text" name="rectangleLength" placeholder="Enter length">
            <br>
            <br>
            Breadth: <input type="text" name="rectangleBreadth" placeholder="Enter breadth">
            <br>
        </div>

        <!-- Circle Input -->
        <label>
            <input type="radio" name="shape" value="Circle" onclick="showDimensions('circleDimensions')"> 
            <span>Circle</span>
        </label>
        <div class="dimensions" id="circleDimensions" style="display:none;">
            Radius: <input type="text" name="circleRadius" placeholder="Enter radius">
            <br>
            <br>
        </div>

        <!-- Submit Button -->
        <input type="submit" value="Calculate Area">
    </form>

    <script>
        function showDimensions(shape) {
            var dimensions = document.getElementsByClassName('dimensions');
            for (var i = 0; i < dimensions.length; i++) {
                dimensions[i].style.display = 'none';
            }
            document.getElementById(shape).style.display = 'block';
        }
    </script>
</body>
</html>
