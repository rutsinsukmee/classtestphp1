<html>
<body>

<?php
echo "<h1> My first PHP script! </h1>";
?>

<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with text.";
?>

<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;
echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
?>

<?php
$mystring = "Hello World!";
$myinteger = 1031;
$myfloat = 3.14;
?>

<div>This is HTML Part </div>
<?php
echo "$mystring ";
echo "$myinteger ";
echo "$myfloat ";
?>

<?php 
$colors = ["red", "green", "blue", "yellow"]; 

foreach ($colors as $value) {
    echo "$value <br>";
}
?>


</body>
</html>