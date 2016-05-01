<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
</head>
<body>
{{$order->payment_method_id}}
{{$order->order_details->total}}
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="upload" value="1">
    <!-- store email -->
    <input type="hidden" name="business" value="SherifMesallam-facilitator@gmail.com">
    <!-- order details -->
    <input type="hidden" name="quantity_1" value="1">
    <input type="hidden" name="item_name_1" value="Gummex Service">
   
    <input type="hidden" name="amount_1" value="{{$order->order_details->total}}">

   
    <!-- a custom value that will be returned on the post request, we use it store order id -->
    <input type="hidden" name="custom" value="{{$order->id}}">
    <!-- where will the user be redirected after successfull payment -->
    <input type="hidden" name="return" value="http://digifylabs.com/pp/return.php?success=true">
    <!-- where will the user be redirected after cancelled  payment -->
    <input type="hidden" name="cancel_return" value="http://digifylabs.com/pp/return.php?cancelled=true">
    <!-- where will Paypal send its POST request  -->
    <input type="hidden" name="notify_url" value="http://digifylabs.com/pp/ipn.php">
    <!-- pay button -->
    <input type="image" border="0" name="submit" src="http://images.paypal.com/images/x-click-but5.gif"
           alt="Make payments with PayPal - it's fast, free and secure!">
</form>
</body>
</html>