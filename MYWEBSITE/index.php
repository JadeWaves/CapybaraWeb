<?php
/*Concatenation String*/
echo "<h3>1. String Concatenation</h3>";
$firstName = "Sirilak";
$lastName = "Kwong";
$fullName = $firstName . " " . $lastName;
echo "Full Name: " . $fullName . "<br>";
 
/*Math Functions*/
echo "<h3>2. Math Functions</h3>";
$a = 10;
$b = 3;
echo "Addition: " . ($a + $b) . "<br>";
echo "Power: " . pow($a, $b) . "<br>";
echo "Square Root of 16: " . sqrt(16) . "<br>";
echo "Random Number (1-100): " . rand(1, 100) . "<br>";
 
/*Loops*/
echo "<h3>3. Loops</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i<br>";
}
 
/*Constants*/
echo "<h3>4. Constants</h3>";
define("SITE_NAME", "My Simple PHP Site");
echo "Welcome to " . SITE_NAME . "!<br>";
 
/*PHP supergoals*/
echo "<h3>5. PHP Superglobals</h3>";
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Script Name: " . $_SERVER['SCRIPT_NAME'] . "<br>";
 
/*Form Handling*/
echo "<h3>6. Sample Form Handling</h3>";
?>
 
<form method="POST" action="">
    Enter your name: <input type="text" name="username">
    <input type="submit" value="Submit">
</form>
 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    if (!empty($user)) {
        echo "Hello, " . htmlspecialchars($user) . "! Nice to meet you.";
    } else {
        echo "Please enter your name.";
    }
}
?>
 