<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>PHP Primer - index </title>
</head>
<body>
<div class="container">
    <h2>Follow each link to the page example</h2>
    <ul class="nav">
        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link active" href="array.php">Simple Array and Printouts</a></li>
        <li class="nav-item"><a class="nav-link active" href="forloop.php">Simple For Loop</a></li>
        <li class="nav-item"><a class="nav-link active" href="dowhileloop.php">Simple DoWhileLoop</a></li>
        <li class="nav-item"><a class="nav-link active" href="ifstatement.php">Simple ifstatement</a></li>
        <li class="nav-item"><a class="nav-link active" href="swithchstatement.php">Simple Switch </a></li>
        <li class="nav-item"><a class="nav-link active" href="stringmanip.php">Simple String Manipulation </a></li>
        <li class="nav-item"><a class="nav-link active" href="datetimemanip.php">Date and Time Manipulation </a></li>
        <li class="nav-item"><a class="nav-link active" href="functions.php">Simple Functions </a></li>


    </ul>

<!-- index -->
    <!-- Basic Html -->
    <h1>Hello world</h1>
    <br>
    
    <?php
        // printing to use html echo
        echo " Hello PHP";
        echo "<br>";
        echo "Second line";
        //Declare variable
        $name = "Bassel Khalil";
        $age = 25;
        // echo variable
        echo $name;
        echo '<br>';
        echo '<h1> My Name is : '.$name .'</h1>';
        echo "<h1>My age is : $age</h1>";
   ?>
<button type="button" class="btn btn-outline-info">Click Me</button>
<button type="button" class="btn btn-outline-primary">Primary</button>
<button type="button" class="btn btn-outline-success">Success</button>

<?php
    echo "<p>  Copyright &copy; 1999-" . date("Y") ." PHP Masterclass </p>";
?>
</div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
