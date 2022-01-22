@php
$isActive = false;
$hasError = true;
$Userver = "localhost";
    $Uuser = "root";
    $Upass = "";
    $Udb = "dbprueba";

    $con = new mysqli($Userver,$Uuser,$Upass,$Udb);
    if($con->connect_errno){
        echo "Ha ocurrido un error";        
    }
@endphp