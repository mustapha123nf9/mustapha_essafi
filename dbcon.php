<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","curd_operation");

$connection=mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

if(!$connection){
    echo'no';
}//else{
//     echo'yes';
// }





?>