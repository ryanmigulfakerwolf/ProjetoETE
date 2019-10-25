<?php
function conectar(){
    $link = mysqli_connect('localhost','root','','twitter_clone')or die(mysqli_connect_error());
    mysqli_set_charset($link, "utf8")or die(mysqli_error($link));
    return $link;
}

function fecharConexao($link){
    mysqli_close($link)or die(mysqli_error($link));
}
 ?>