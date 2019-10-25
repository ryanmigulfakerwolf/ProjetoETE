<?php

function DBConnect(){
    $link = @mysqli_connect( DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_PÁSSWORD, DB_DATABASE) or die(mysqli_connect_error()) ;
    mysqli_set_charset($Link,dDB_CHARSET )or die (mysqli_error($link));
    
    return $link;
    
}

function DBClose($link){
    
    @mysqli_close($link) or die(mysqli_error($link));
    
}

function DBEscape($dados){
    
    
    
}
?>