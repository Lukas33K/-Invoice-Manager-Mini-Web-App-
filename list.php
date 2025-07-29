<?php
require 'functions.php';
$invoices = "loadInvoices"();
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Uložené faktury</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>📂 Uložené faktury</h1>

<table>
    <tr><th>Datum</th><th>Klient</th><th>Celkem bez DPH</th><th>DPH</th><th>Celkem s DPH</th></tr>
    <?php foreach ($invoices as $inv): ?>
        <tr>
            <td><?= $inv['date'] ?></td>
            <td><?= htmlspecialchars($inv['client']) ?></td>
            <td><?= number_format($inv['total'], 2, ',', ' ') ?> Kč</td>
            <td><?= number_format($inv['vat'], 2, ',', ' ') ?> Kč</td>
            <td><strong><?= number_format($inv['total_with_vat'], 2, ',', ' ') ?> Kč</strong></td>
        </tr>
    <?php endforeach; ?>
</table>

<p><a href="index.php">⬅️ Zpět</a></p>
</body>
</html>
