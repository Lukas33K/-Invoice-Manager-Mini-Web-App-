<?php
require 'functions.php';

$client = trim($_POST['client']);
$names = $_POST['item_name'];
$qtys = $_POST['item_qty'];
$prices = $_POST['item_price'];

$items = [];
$total = 0;

for ($i = 0; $i < count($names); $i++) {
    $name = trim($names[$i]);
    $qty = (int)$qtys[$i];
    $price = (float)$prices[$i];

    if ($name && $qty > 0 && $price >= 0) {
        $subtotal = $qty * $price;
        $total += $subtotal;

        $items[] = [
            'name' => $name,
            'qty' => $qty,
            'price' => $price,
            'subtotal' => $subtotal
        ];
    }
}

$invoice = [
    'client' => $client,
    'date' => date('Y-m-d'),
    'items' => $items,
    'total' => $total,
    'vat' => $total * 0.21, // 21 % DPH
    'total_with_vat' => $total * 1.21
];

"saveInvoice"($invoice);
header("Location: list.php");