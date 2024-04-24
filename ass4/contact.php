<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = explode(',', $_POST['names']);
    $employee_names = array(
        "John Doe", "Jane Smith", "Mary Johnson", "James Brown", "Patricia White",
        "Robert Jones", "Linda Miller", "William Davis", "Elizabeth Taylor", "Michael Wilson",
        "Emily Moore", "Daniel Anderson", "Jennifer Thomas", "Joseph Jackson", "Susan Clark",
        "David White", "Brian Brown", "Sarah Martin", "William Harris", "Jessica Thompson"
    );

    $results = array();
    foreach ($names as $name) {
        $name = trim($name); // Remove any leading or trailing whitespace
        $found = false;

        // Perform case-insensitive search
        foreach ($employee_names as $key => $employee) {
            if (strcasecmp($name, $employee) === 0) {
                $results[] = "Employee name '" . $name . "' found at index: " . $key;
                $found = true;
                break;
            }
        }

        if (!$found) {
            $results[] = "Employee name '" . $name . "' not found in the list.";
        }
    }

    echo '<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .result {
            margin: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }
        .found {
            color: green;
        }
        .not-found {
            color: red;
        }
    </style>';
    foreach ($results as $result) {
        echo '<div class="result">' . $result . '</div>';
    }
}
?>
