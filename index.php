<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Vystavit fakturu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>🧾 Vystavit fakturu</h1>

<form action="save.php" method="post">
    <label>Jméno klienta:</label>
    <input type="text" name="client" required><br><br>

    <label>Položky faktury:</label>
    <div id="items">
        <div class="item-row">
            <input type="text" name="item_name[]" placeholder="Název položky" required>
            <input type="number" name="item_qty[]" placeholder="Množství" required>
            <input type="number" step="0.01" name="item_price[]" placeholder="Cena" required>
        </div>
    </div>

    <button type="button" onclick="addRow()">➕ Přidat položku</button><br><br>
    <button type="submit">💾 Uložit fakturu</button>
</form>

<p><a href="list.php">📂 Zobrazit uložené faktury</a></p>

<script>
function addRow() {
    const row = document.querySelector('.item-row').cloneNode(true);
    row.querySelectorAll('input').forEach(input => input.value = '');
    document.getElementById('items').appendChild(row);
}
</script>
</body>
</html>