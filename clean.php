<!DOCTYPE html>
<html>
<body>

<?php

function Cleanstr($string){
    $string=str_replace('','-',$string);
    return preg_replace("/[^A-Za-z0-9\-]/",'',$string);
}
?>

<?php
echo Cleanstr("!@#$%^this<>?:'; ");
?>

</body>
</html>
