<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<?php
$txt ="Heello";
// echo $txt;

    $table1 = array(
        array("img/USD.png", "USD", "100-50", "30.12", "30.18"),
        array("img/USD.png", "USD", "20-5", "29.9", "30.08"),
        array("img/USD.png", "USD", "2-1", "29.45", "29.88"),
        array("img/GBP.png", "GBP", "50", "39.4", "39.8"),
        array("img/GBP.png", "GBP", "20-5", "39.25", "39.7"),
        array("img/EUR.png", "EUR", "500-100", "33.4", "33.6"),
        array("img/EUR.png", "EUR", "50-5", "33.35", "33.55"),
        array("img/JPY.png", "JPY", "", "0.2755", "0.2775")
    );

    //echo $table1[0][0].$table1[0][1].$table1[0][3].$table1[0][4];

?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <table class="table table-dark" style="">
                    <tbody>
                    <tr><td>Country</td> <td>Currency</td> <td>Denomination</td><td>Buy rate</td><td>Sell rate</td></tr>
                    <?php 
                    // var_dump($table1);
                    // echo $table1[1][1];
                      for($i=0;$i<8;$i++){
                        //   echo "<tr><td>$i</td></tr>";
                        echo "<tr><td> <img src='".$table1[$i][0]."' width='35'>  <td>".$table1[$i][1]."</td><td>".$table1[$i][2]."</td><td>".$table1[$i][3]."</td><td>".$table1[$i][4]."</td></tr>";
                        
                      }
                    ?>

            
                    </tbody>
                </table>
                </div>
        </div>
    </div>
</body>
</html>