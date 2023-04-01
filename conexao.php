<?php
    
    if($_SERVER['SERVER_NAME'] != 'localhost'){
        $con = mysqli_connect('bd_tha.mysql.dbaas.com.br','bd_tha','Tha1985*@27');    
    } else {        
        $con = mysqli_connect('127.0.0.1','root','');    
    }

    mysqli_select_db($con,'bd_tha');
?>