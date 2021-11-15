<?php
require_once("zarinpal_function.php");

$MerchantID 	= "1be98c62-9918-4a9c-86b6-a2e470229967";
$Amount 		= $_POST['cart-total'];
$Description 	= "خرید از آدیداس اسپورت";
$Email 			= $_POST['user-email'];
$Mobile 		= $_POST['user-number'];
$CallbackURL 	= "http://es92.ir/verify.php";
$ZarinGate 		= false;
$SandBox 		= false;

$zp 	= new zarinpal();
$result = $zp->request($MerchantID, $Amount, $Description, $Email, $Mobile, $CallbackURL, $SandBox, $ZarinGate);

if (isset($result["Status"]) && $result["Status"] == 100)
{
    $order_id = 'adidas-'.time();
    $authority = $result->Authority;
    global $db;
    $product_ids = "55";
    $query = mysqli_query($db,"INSERT INTO orders(order_id, product_id, user_email, authority) values ('$order_id','$product_ids', '$Email', '$authority')");

    $zp->redirect($result["StartPay"]);
} else {
    // error
    echo "خطا در ایجاد تراکنش";
    echo "<br />کد خطا : ". $result["Status"];
    echo "<br />تفسیر و علت خطا : ". $result["Message"];
}