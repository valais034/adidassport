

<?php
require_once 'config.php';
if (isset($_POST['submit-order-online'])) {
    $email = $_POST['user-email'];
//    $amount = $_POST['cart-total'];
//    $mobile = $_POST['user-number'];
    $product_ids = $_POST['product-ids'];
//    request($amount, $email, $mobile, $product_ids);
}
$data = array("merchant_id" => "1be98c62-9918-4a9c-86b6-a2e470229967",
    "amount" => 1000,
    "callback_url" => "http://localhost/adidassport/verify.php",
    "description" => "خرید از فروشگاه آدیداس اسپرت",
    "metadata" => [ "email" => "info@email.com","mobile"=>"09121234567"],
);
$jsonData = json_encode($data);
$ch = curl_init('https://api.zarinpal.com/pg/v4/payment/request.json');
curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData)
));

$result = curl_exec($ch);
$err = curl_error($ch);
$result = json_decode($result, true, JSON_PRETTY_PRINT);
curl_close($ch);



if ($err) {
    echo "cURL Error #:" . $err;
} else {
    if (empty($result['errors'])) {
        if ($result['data']['code'] == 100) {
            $order_id = 'adisportonline'. time();
            $authority = $result->Authority;
            global $db ;
            $query = mysqli_query($db, "insert into orders (order_id, product_id, user_email, authority) values ('$order_id', '$product_ids', '$email', '$authority')");
            header('Location: https://www.zarinpal.com/pg/StartPay/' . $result['data']["authority"]);
        }
    } else {
        echo'Error Code: ' . $result['errors']['code'];
        echo'message: ' .  $result['errors']['message'];

    }
}
?>
