<?php
if(isset($_COOKIE["background"])){
    echo "
    <style>
        body{
            background-color:".
            $_COOKIE["background"].
        "}
    </style>";
}

if($_SERVER['REQUEST_METHOD']=="POST"){
    setcookie("background", $_POST["bg-color"],strtotime("+2 year"));
    header("Location:" . $_SERVER["REQUEST_URI"]);
    exit();
}
?>

<form action="" method ="POST">
    <input type="color" name="bg-color" id="">
    <input type="submit" value="choose color">
</form>