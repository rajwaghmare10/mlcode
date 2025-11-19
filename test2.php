<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Array Example</title>
</head>
<body>

<h2>Enter Your Details</h2>

<form method="POST">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Age: <input type="number" name="age" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<hr>

<?php
if (isset($_POST['submit'])) {

    // Store data in array
    $user = array(
        "Name"  => $_POST['name'],
        "Email" => $_POST['email'],
        "Age"   => $_POST['age']
    );

    echo "<h3>Stored Data:</h3>";
    echo "<pre>";
    print_r($user);
    echo "</pre>";

    // Array keys
    echo "Keys: ";
    print_r(array_keys($user));
    echo "<br><br>";

    // Array values
    echo "Values: ";
    print_r(array_values($user));
    echo "<br><br>";

    // Count elements
    echo "Total Elements: " . count($user);
}
?>

</body>
</html>