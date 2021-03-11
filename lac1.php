<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<img src="" alt="" style>

    <!-- <h1> <?php echo"Hello World";?> </h1> -->

    

    <?php $txt = "Hello PHP"; 
    echo "<h1>This Text is ".$txt."</h1>"; 
    // . This ตัวเชื่อม Variable; 
    $txt = $txt."Good";
    echo $txt;
    // Add

    $var1 = 12;
    $var2 = "10";
    echo "<br>$var1<br>";
    var_dump($var1);
    var_dump($var2);

    // Array
    echo "<hr>";
    $cars = array("Toyota", "Honda", "Suzuki");
    var_dump($cars);
    echo "<br>";
    print_r($cars);

    echo "<br>";

    echo "$cars[1]";
    echo "<br> count: ".count($cars);
    
    echo "<hr>";

    $age = array("Bill"=>"35", "Jame"=>"37", "Joe"=>"42");
    echo "<br> Bil is".$age["Bill"]."Year old";

    $cars=array(
        array("Voval",23,11),
        array("BMW",15,13),
        array("Saab",5,2)
    );

    echo "<br>".$cars[1][0]."In stock: ".$cars[1][1]."Sold: ".$cars[1][2];

    echo "<hr>";
   $str ="Webpro Deasodkaw";
    // echo = $str;
    echo "<br> SringLen: ".strlen($str);
    echo "<br> SringCount: ".str_word_count($str);

    // echo "<br> str_repeat: ".str_repeat($str);

    echo "<hr>";
    $num = rand(1,100);
    echo $num;
    if($num>=80)
        $grade = "A";
    elseif($num >= 75)
        $grade = "B+";
    elseif($num >= 70)
        $grade = "B";
    elseif($num >= 65)
        $grade = "C+";
    elseif($num >= 60)
        $grade = "C";
    elseif($num >= 55)
        $grade = "D+";
    else 
        $grade = "D";
    echo "<br> Your Grade You is $grade";

    echo "<hr>";
    $today = date("D");
    //echo $today;
    switch ($today)
    {
        case "Mon":
            echo "Day is Monday";
            break;
        case "Tue":
            echo "Day is Tuesday";
            break;
        case "Wed":
            echo "Day is Wednesday";
            break;
        case "Thu":
            echo "Day is Thursday";
            break;
        case "Fri":
            echo "Day is Friday";
            break;
        case "Sat":
            echo "Day is Saturday";
            break;
        case "Sun":
            echo "Day is Sunday";
            break;
        default:
            echo "No information available for that day";
        
    }
    echo "<br>";
    date_default_timezone_set("America/Los_Angeles");
    echo "To Day is ".date("D M Y:i:s");

    echo "<hr>";
    $x=1;
    while($x<=3)
    {
        echo "$x ";
        $x++;
    }
    echo "<br>";   
    $x=1;
    do {
        echo "$x ";
        $x++;
    }while($x <= 3);
    echo "<br>";

    for($x=1;$x<=3;$x++)
    echo "$x ";

    $age = array("Jame"=>32, "Sue"=>22, "Bill"=>55);
    foreach($age as $key => $val) echo "<br> $key is $val Year old"
    ?>
    


</body>
</html>