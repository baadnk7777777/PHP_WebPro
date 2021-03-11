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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h1>The MultiPlication table of nine</h1>
                <table class="table table-dark" style="width:200px">
                    <tbody>
                    <?php
                    for($i=1;$i<=12;$i++){
                        if($i%2==0){
                            echo "<tr><td>9 x $i = ".(9*$i)." </td></tr>";
                        }
                        else{
                            echo "<tr><td class='table-secondary'>9 x $i = ".(9*$i)." </td></tr>";
                        }
                        
                    }
                    ?>

                    <!-- <tr><td>cell1</td></tr>
                    <tr><td>cell2</td></tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>