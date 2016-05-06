<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
</head>
<body>
Please wait while redirecting to paypal...
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

</form>
<script type="text/javascript">
    document.forms[0].submit();
</script>
</body>
</html>