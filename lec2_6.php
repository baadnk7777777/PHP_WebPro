<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

       <!-- For upload -->
       <?php
    //    var_dump($_FILES);
    // กำหนดนามสกุลไฟล์

        function checkFiletype($file_path){
            $file_path = strtolower(pathinfo($file_path,PATHINFO_EXTENSION));
            if($file_path == "jpg" || $file_path == "jpeg" || $file_path == "png")
            {
                return true;
            }
            else
            return false;
        }


       $dir = "uploads/";
       $target_file=$dir.basename($_FILES["fileToUpload"]["name"]);
    //    $Files["fileToUpload"]["size"];

       if(isset($_POST["btnSubmitFileUpload"])){
           if(!checkFiletype($target_file)){
               echo "Error: only jpg, jpeg, png files are allowed.";
           }
           else
           {
                if(filesize($target_file) > 1000000)
                {
                    echo "ERROR";
                }
                else
                {
                    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))
                    {
                        echo "File: "."$target_file"." has been upload";
                        echo "<br> ".filesize($target_file)/1000000 ." MB";
                    }
                    else
                    
                    echo "Error Uploading File.";
                }
           }

        }
       ?>

</body>
</html>