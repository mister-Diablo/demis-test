<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $comment = htmlspecialchars($_POST['comment'] ?? '');
    $productName = htmlspecialchars($_POST['productName'] ?? '');
    $quantity = htmlspecialchars($_POST['quantity'] ?? '');
    $price = htmlspecialchars($_POST['price'] ?? '');
    $total = htmlspecialchars($_POST['total'] ?? '');

    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $referrer = $_SERVER['HTTP_REFERER'];

    $output = "Новый заказ №122\nИмя: $name\nТелефон: $phone\nКомментарий: $comment\nТовар: $productName, Кол-во: $quantity, Стоимость: $price ₽, Сумма: $total ₽\nСтраница отправки: $referrer\nIP адрес: $ipAddress";

    $to = 'example@example.com';
    $subject = 'Новый заказ №122';
    $headers = "From: webmaster@example.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    mail($to, $subject, $output, $headers);

    echo json_encode(['message' => $output]);
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
