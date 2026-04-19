<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //1. Write a PHP script to calculate the area and perimeter of a Rectangle, and display the result. 
    //Hints: The area of a Rectangle = length x width, perimeter = 2 x (length + width)
    $length = 10;
    $width = 5;
    $rectangle = $length * $width;
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);
    echo "The area of the Rectangle is $area and the permiter of the Rectangle is $perimeter";
    echo "<br>";

    //2.Write a PHP script to calculate the VAT (Value Added Tax) over an amount Hints: VAT = 15% of the amount
    $vat = 15;
    $price = 100;
    $finalPrice = $price * ($vat / 100);
    echo "Final Price: $finalPrice";
    echo "<br>";

    //3. Write a PHP script to find whether a given number is odd or even Hints: use IF-ELSE
    $num = 3;
    if ($num % 2 == 0) {
        echo "even";
    } else {
        echo "odd";
    }
    echo "<br>";

    //4. Write a PHP script to find the largest number from three given numbers Hints: use IF-ELSE
    $a = 34;
    $b = 28;
    $c = 90;
    if ($a > $b && $a > $c) {
        echo "A largest";
    } else if ($b > $c && $b > $a) {
        echo "B largest";
    } else {
        echo "C largest";
    }
    echo "<br>";

    //5. Write a PHP script to print all the odd numbers between 10 to 100 Hints: use LOOP & IF-ELSE
    for ($i = 10; $i <= 100; $i++) {
        if ($i % 2 !== 0) {
            echo $i." ";
        }
    }
    echo "<br>";

    //6. Write a PHP script to search an element from an array Hints: use LOOP, IF-ELSE & ARRAY
    $search = 5;
    $arr = [1, 2, 3, 4, 5];
    for ($i = 0; $i < count($arr); $i++) {
        if ($search === $arr[$i]) {
            echo "element found";
        }
    }
    echo "<br>";

    //7. Print the following shapes Hints: use NESTED LOOP
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    echo "<br>";

    for ($i = 3; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$j ";
        }
        echo "<br>";
    }
    echo "<br>";

    $char = 'A';
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $char." ";
            $char++;
        }
        echo "<br>";
    }
    ?>
</body>

</html>