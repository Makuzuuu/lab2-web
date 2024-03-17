<!DOCTYPE html>
<html>
<head>
    <title>PHP Class Discussion</title>
</head>
<body>
    <h1>PHP Class Discussion Topics</h1>

    <h2>1. Introduction</h2>
    <p>Welcome to our PHP class discussion. In this session, we'll cover various PHP topics.</p>

    <h2>2. Variables</h2>
    <?php
    // Variables
    $name = "John";
    $age = 25;
    echo "<p>My name is $name and I am $age years old.</p>";
    ?>

    <h2>3. Echo / Print</h2>
    <?php
    // Echo / Print
    echo "<p>This is echoed using echo statement.</p>";
    print "<p>This is printed using print statement.</p>";
    ?>

    <h2>4. Data Types</h2>
    <?php
    // Data Types
    $string = "Hello";
    $integer = 10;
    $float = 3.14;
    $boolean = true;
    ?>

    <h2>5. Operators & Math</h2>
    <?php
    // Operators & Math
    $num1 = 10;
    $num2 = 5;
    $sum = $num1 + $num2;
    echo "<p>Sum of $num1 and $num2 is $sum.</p>";
    ?>

    <h2>6. Conditionals</h2>
    <?php
    // Conditionals
    $age = 20;
    if ($age >= 18) {
        echo "<p>You are eligible to vote.</p>";
    } else {
        echo "<p>You are not eligible to vote.</p>";
    }
    ?>

    <h2>7. Loops</h2>
    <?php
    // Loops
    for ($i = 1; $i <= 5; $i++) {
        echo "<p>This is iteration $i.</p>";
    }
    ?>

    <h2>8. Functions</h2>
    <?php
    // Functions
    function greet($name) {
        echo "<p>Hello, $name!</p>";
    }

    greet("Alice");
    greet("Bob");
    ?>

    <h2>9. Arrays</h2>
    <?php
    // Arrays
    $fruits = array("Apple", "Banana", "Orange");
    echo "<p>My favorite fruit is {$fruits[0]}.</p>";
    ?>

    <h2>10. Superglobals</h2>
    <?php
    // Superglobals
    echo "<p>Your IP address is: " . $_SERVER['REMOTE_ADDR'] . "</p>";
    ?>

    <h2>11. Regular Expressions (RegEx)</h2>
    <?php
    // Regular Expressions (RegEx)
    $str = "Visit OpenAI's website at https://openai.com";
    $pattern = "/https:\/\/\w+\.\w+/";
    preg_match($pattern, $str, $matches);
    echo "<p>Matched URL: " . $matches[0] . "</p>";
    ?>
</body>
</html>
