<?php
//deleting previous cookies
setcookie('cls',$_POST["cls"],1,"/");
setcookie('p',$_POST["cls"],1,"/");
setcookie('t',$_POST["cls"],1,"/");
setcookie('tt_value',$_POST["cls"],1,"/");

//setting new cookies
$joint=$_POST["cls"].$_POST["p"].$_POST["t"];
if(isset($_POST["cls"]))
setcookie('tt_value',$joint,time()+(86400*30),"/");
if(isset($_POST["cls"]))
setcookie('cls',$_POST["cls"],time()+(86400*30),"/");
if(isset($_POST["p"]))
setcookie('p',$_POST["p"],time()+(86400*30),"/");
if(isset($_POST["t"]))
setcookie('t',$_POST["t"],time()+(86400*30),"/");
?>
<html>
    <head>
      <meta http-equiv="refresh" content="0.2;url=index.php">
    </head>
</html>
