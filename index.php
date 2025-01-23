<?php 
$fonts = "Roboto";
$color = "White";
$bg = "Black";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Syntax</title>
    <style>
        .phpcoding{
            width: 900px; 
            margin: 0 auto; 
            background: <?php echo "#ddd"; ?>;
        }
        .headeroption,
        .footeroption {
            background: #444;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .headeroption h2,
        .footeroption h2{
            margin: 0;
        }
        .maincontent{
            min-height: 500px;
            padding: 20px;
        }
    </style>
</head>
<body>
    


<div class="phpcoding">

    <section class="headeroption">
        <h2> <?php echo "PHP Fundamentals Training ";?> </h2>
    </section>


    <section class="maincontent">
        <?php 
            echo $fonts;  
            echo $bg;
            echo $color;
        ?>
    </section>


    <section class="footeroption">
        <h2><?php echo "www.almumeetu.saikat.com"; ?></h2>
    </section>

</div>



</body>
</html>