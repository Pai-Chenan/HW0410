<center>
<h2>您的購物車內容</h2>
<table border="1">
    <tr>
        <th>編號</th><th>名稱</th><th>價格</th><th>數量</th><th>功能</th>
    </tr>
<?php
$total = 0;
if (isset($_COOKIE)) {
    foreach ($_COOKIE as $id => $cartArray) {
    
        if (is_array($cartArray) && isset($cartArray["ID"])) {
            $subtotal = $cartArray["Price"] * $cartArray["Quantity"];
            $total += $subtotal;
            echo "<tr>";
            echo "<td>".$cartArray["ID"]."</td>";
            echo "<td>".$cartArray["Name"]."</td>";
            echo "<td>".$cartArray["Price"]."</td>";
            echo "<td>".$cartArray["Quantity"]."</td>";
            echo "<td><a href='delete.php?Id=".$cartArray["ID"]."'>刪除</a></td>";
            echo "</tr>";
        }
    }
}
?>
</table>
<p>總金額：$<?php echo $total; ?></p>
<hr/>
<a href="catalog.php">回到商品頁</a>