<?php


     $_SERVER ="localhost";
     $un = "root";
     $psw = "";
     $dbn = "hms";


     $conn = mySQLi_connect($_SERVER, $un , $psw, $dbn);

     if($conn)
       {
        echo ("dbase connected succesfully");
       }

    else
      {
        echo("dbase not connected");
      }

    ?>