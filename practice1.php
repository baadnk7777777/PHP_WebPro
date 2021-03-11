<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
 
<?php
$txt ="Heello";
// echo $txt;

    $table1 = array(
        array("Country", "Currency", "Denomination", "Buy rate", "Sell rate"),
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

<table class="table">
<thead class="thead-dark">
  <tr>
    <th scope="col">Country</th>
    <th scope="col">Currency</th>
    <th scope="col">Denomination</th>
    <th scope="col">Buy rate</th>
    <th scope="col">Sell rate</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th scope="row"> <img src="<?php echo $table1[1][0]?>" alt="" width="35"></th>
    <td> <?php echo $table1[1][1]?> </td>
    <td><?php echo $table1[1][2]?></td>
    <td><?php echo $table1[1][3]?></td>
    <td><?php echo $table1[1][4]?></td>
  </tr>

 


  <!-- <tr>
  <th scope="row"> <img src="<?php echo $table1[2][0]?>" alt="" width="35"></th>
    <td> <?php echo $table1[2][1]?> </td>
    <td><?php echo $table1[2][2]?></td>
    <td><?php echo $table1[2][3]?></td>
    <td><?php echo $table1[2][4]?></td>
  </tr>
  <tr>
  <th scope="row"> <img src="<?php echo $table1[3][0]?>" alt="" width="35"></th>
    <td> <?php echo $table1[3][1]?> </td>
    <td><?php echo $table1[3][2]?></td>
    <td><?php echo $table1[3][3]?></td>
    <td><?php echo $table1[3][4]?></td>
  </tr>
  <tr>
  <th scope="row"> <img src="<?php echo $table1[4][0]?>" alt="" width="35"></th>
    <td> <?php echo $table1[4][1]?> </td>
    <td><?php echo $table1[4][2]?></td>
    <td><?php echo $table1[4][3]?></td>
    <td><?php echo $table1[4][4]?></td>
  </tr>
  <tr>
  <th scope="row"> <img src="<?php echo $table1[5][0]?>" alt="" width="35"></th>
    <td> <?php echo $table1[5][1]?> </td>
    <td><?php echo $table1[5][2]?></td>
    <td><?php echo $table1[5][3]?></td>
    <td><?php echo $table1[5][4]?></td>
  </tr>
  <tr>
  <th scope="row"> <img src="<?php echo $table1[6][0]?>" alt="" width="35"></th>
    <td> <?php echo $table1[6][1]?> </td>
    <td><?php echo $table1[6][2]?></td>
    <td><?php echo $table1[6][3]?></td>
    <td><?php echo $table1[6][4]?></td>
  </tr>
  <tr>
  <th scope="row"> <img src="<?php echo $table1[7][0]?>" alt="" width="35"></th>
    <td> <?php echo $table1[7][1]?> </td>
    <td><?php echo $table1[7][2]?></td>
    <td><?php echo $table1[7][3]?></td>
    <td><?php echo $table1[7][4]?></td>
  </tr>
  <tr>
  <th scope="row"> <img src="<?php echo $table1[8][0]?>" alt="" width="35"></th>
    <td> <?php echo $table1[8][1]?> </td>
    <td><?php echo $table1[8][2]?></td>
    <td><?php echo $table1[8][3]?></td>
    <td><?php echo $table1[8][4]?></td>
  </tr> -->
</tbody>
</table>






</body>
</html>