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
                
                <form action=""method="post">
                The MultiPlication table of: <input type="text" name="txttable" value="">
                <input type="submit" name="btnsubmit" value="Submit" class="btn btn-success" >

                </form>

                <table class="table table-dark" style="width:200px">
                    <tbody>
                    <?php
                    if(isset($_POST["btnsubmit"])){
                        echo "From get result";
                        echo "<br>Table: ".$_POST["txttable"];

                        $table = $_POST["txttable"];

                        for($i=1;$i<=12;$i++){
                        if($i%2==0){
                            echo "<tr><td>".$table." x $i = ".($table*$i)." </td></tr>";
                        }
                        else{
                            echo "<tr><td class='table-secondary'> ".$table." x $i = ".($table*$i)." </td></tr>";
                        }
                        
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