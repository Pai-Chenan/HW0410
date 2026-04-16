<?php
if (isset($_GET["Id"])) {
    $id = $_GET["Id"]; 
    setcookie($id."[ID]", "", time()-3600);
    setcookie($id."[Name]", "", time()-3600);
    setcookie($id."[Price]", "", time()-3600);
    setcookie($id."[Quantity]", "", time()-3600);
}
header("Location: shoppingcart.php");
exit;
?>