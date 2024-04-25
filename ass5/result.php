<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Result</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Result</h1>
        <?php
        // Shape class
        // Triangle class
        class Shape {
            protected $shapeName;
            protected $area;
        
            public function __construct($shapeName) {
                $this->shapeName = $shapeName;
                $this->area = 0; // Initialize area as a numeric value
            }
        
            public function calculateArea() {
                // Implemented in subclasses
            }
        
            public function displayResult() {
                echo "<p>The area of the $this->shapeName is: $this->area square units</p>";
            }
        }
class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        parent::__construct('Triangle');
        $this->base = floatval($base); // Convert to float
        $this->height = floatval($height); // Convert to float
        $this->calculateArea();
    }

    public function calculateArea() {
        $this->area = 0.5 * $this->base * $this->height;
    }
}

// Rectangle class
class Rectangle extends Shape {
    private $length;
    private $breadth;

    public function __construct($length, $breadth) {
        parent::__construct('Rectangle');
        $this->length = floatval($length); // Convert to float
        $this->breadth = floatval($breadth); // Convert to float
        $this->calculateArea();
    }

    public function calculateArea() {
        $this->area = $this->length * $this->breadth;
    }
}

// Circle class
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        parent::__construct('Circle');
        $this->radius = floatval($radius); // Convert to float
        $this->calculateArea();
    }

    public function calculateArea() {
        $this->area = 3.14 * $this->radius * $this->radius;
    }
}


        // Get the selected shape from the form
        $selectedShape = isset($_POST['shape']) ? $_POST['shape'] : '';

        switch ($selectedShape) {
            case 'Triangle':
                $base = isset($_POST['triangleBase']) ? $_POST['triangleBase'] : 0;
                $height = isset($_POST['triangleHeight']) ? $_POST['triangleHeight'] : 0;
                $shape = new Triangle($base, $height);
                break;

            case 'Rectangle':
                $length = isset($_POST['rectangleLength']) ? $_POST['rectangleLength'] : 0;
                $breadth = isset($_POST['rectangleBreadth']) ? $_POST['rectangleBreadth'] : 0;
                $shape = new Rectangle($length, $breadth);
                break;

            case 'Circle':
                $radius = isset($_POST['circleRadius']) ? $_POST['circleRadius'] : 0;
                $shape = new Circle($radius);
                break;

            default:
                echo "<p>Invalid shape selection</p>";
                exit();
        }

        // Display the result
        $shape->displayResult();
        ?>
    </div>
</body>
</html>
