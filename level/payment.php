

<!DOCTYPE html>
<?php include 'db.php' 
?>
<html lang=en>
<head>
  <meta charset=utf-8>
  <title>Payment</title>
  <style>
table{
		font-family: arial,sans-serif;
		border-collapse: collapse;
		width: 100%;
}
td,th{
		border: 1px solid #000000;
		text-align:center;
		padding:8px;
}
th{
		background-color:#dddddd;
}
</style>
</head>
<body>
<h2>Pay the fees</h2>
<table>
<tr>
  <td>Cart ID= 0</td>
  <td>Total price to pay: RM120</td>
  </tr>
  <tr>
  <td colspan="2">  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
      <input type="hidden" name="cmd" value="_xclick">
      <input type="hidden" name="business" value="jisleemin@gmail.com">
      <input type="hidden" name="amount" value="120"> 
      <input type="hidden" name="currency_code" value="MYR">
      <input type="hidden" name="item_name" value="0">
      <input type="hidden" name="return" value="">
      <input type="hidden" name="cancel_return" value="http://localhost/workshop/payment.php?totalprice=120">
      <input type="image"
src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif"
border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif"
width="1" height="1">
    </form>
  </td>
</tr>
</table>
</body>
</html>
