<?php
    $output="";

    if(isset($_POST["txtfristname"]))
        $output.="<ul class='list-group'>";
        if($_POST["txtfristname"]!="")
            
            $output.="<li class='list-group-item'>Your first name is
            <span class='text-info'>".$_POST["txtfristname"]." </span></li>";

            if($_POST["txtlastname"]!="")
            $output.="<li class='list-group-item'>Your last name is
            <span class='text-info'>".$_POST["txtlastname"]." </span></li>";

            if($_POST["txtstudentid"]!="")
            $output.="<li class='list-group-item'>Your Student ID is
            <span class='text-info'>".$_POST["txtstudentid"]." </span></li>";

            if($_POST["txtgender"]!="")
            $output.="<li class='list-group-item'>Your Gender is
            <span class='text-info'>".$_POST["txtgender"]." </span></li>";

            if($_POST["txtsubject"]!="")
            $output.="<li class='list-group-item'>Your Subject is
            <span class='text-info'>".$_POST["txtsubject"]." </span></li>";

            if($_POST["txtdate"]!="")
            $output.="<li class='list-group-item'>Your Date is
            <span class='text-info'>".$_POST["txtdate"]." </span></li>";


            if($_POST["txttime"]!="")
            $output.="<li class='list-group-item'>Your Time is
            <span class='text-info'>".$_POST["txttime"]." </span></li>";

        $output.="</ul>";
    echo $output;
?>