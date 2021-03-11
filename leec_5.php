<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function writeMSG(){
        echo "Hello PHP";
    }
    writeMSG();
    //echo "<h1>."writeMSG()".</h1>";

    function showname($name){
        echo "<br>you name is".$name ;
    }
    function showCars($brand, $year){
        echo "br $brand $year";
    }
    function adddition($x,$y){
        return $x + $y;
    }


  

    showname("Jame");
    showname("Bill");

    showCars("Honna", 2019);
    showCars("Toyota", 2020);

     echo "<br>".adddition(10,20);

     echo "<hr>";
     echo "<br>".$_SERVER["PHP_SELF"];
     echo "<br>".$_SERVER["SERVER_NAME"];
    ?>
    <h1> <?php echo writeMSG()  ?> </h1>

    <!-- Get Form -->

    <!-- <form action=""method="get">
       Name: <input type="text" name="txtname" value="">
       <br>
       Age: <input type="text" name="txtage" value="">
       <br>
       <input type="submit" name="btnsubmit" value="Submit">
       <input type="reset" value="btnreset" id=btnreset"">
    </form>
    <?php 
        if(isset($_GET["btnsubmit"])){
            echo "From get result";
            echo "<br>NAME: ".$_GET["txtname"];
            echo "<br>AEG:".$_GET["txtage"];

        }
    ?> -->
    <!-- pos Form -->

    <!-- <form action="" method="post">
       
    </form>
    <?php 
        if(isset($_POST["btnsubmit"])){
            echo "Form Post result";
            echo "<br>NAME: ".$_POST["txtname"];
            echo "<br>AGE: ".$_POST["txtage"];
            echo "<br>";    
            var_dump($_POST);
        }
    ?> -->

    <!-- File Upload -->
    <form action="lec2_6.php" method="post" enctype="multipart/form-data">
    Select image to upload: 
    <input type="file" name="fileToUpload" >
    <br>  
    <input type="submit" name="btnSubmitFileUpload" value="Submit">

    </form>



</body>
</html>