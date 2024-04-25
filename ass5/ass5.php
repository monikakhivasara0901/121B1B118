<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Area Calculator</h1>
        <form method="post" action="result.php">
            <label>
                <input type="radio" name="shape" value="Triangle" onclick="showDimensions('triangleDimensions')"> 
                <span>Triangle</span>
            </label>
            <div class="dimensions" id="triangleDimensions" style="display:none;">
                Base: <input type="text" name="triangleBase" placeholder="Enter base">
                Height: <input type="text" name="triangleHeight" placeholder="Enter height">
            </div>

            <label>
                <input type="radio" name="shape" value="Rectangle" onclick="showDimensions('rectangleDimensions')"> 
                <span>Rectangle</span>
            </label>
            <div class="dimensions" id="rectangleDimensions" style="display:none;">
                Length: <input type="text" name="rectangleLength" placeholder="Enter length">
                Breadth: <input type="text" name="rectangleBreadth" placeholder="Enter breadth">
            </div>

            <label>
                <input type="radio" name="shape" value="Circle" onclick="showDimensions('circleDimensions')"> 
                <span>Circle</span>
            </label>
            <div class="dimensions" id="circleDimensions" style="display:none;">
                Radius: <input type="text" name="circleRadius" placeholder="Enter radius">
            </div>

            <input type="submit" value="Calculate Area">
        </form>
    </div>

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
