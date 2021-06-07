<?php

for($i=0; $i<count($_POST["animal"]); $i++){
    $ani=$_POST["animal"];
    echo $ani[$i];
    echo "<br>";
}
?>