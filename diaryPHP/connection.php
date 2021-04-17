<?php

    $link = mysqli_connect("localhost","root","root","memberapp");
      
        if (mysqli_connect_error()) {        
            die ("Database Connection Error");
        }

?>