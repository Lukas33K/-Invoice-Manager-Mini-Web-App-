# 📄 Webová fakturační mini aplikace

Jednoduchá PHP aplikace pro vystavování faktur bez databáze. Vhodná jako ukázkový projekt, kde si uživatel může vyzkoušet práci s formuláři, JSON soubory, výpočty DPH a dynamickým přidáváním položek.

---

## ✨ Funkce

- Přidání libovolného počtu položek faktury (název, množství, cena)
- Výpočet celkové ceny bez DPH, DPH (21 %) a s DPH
- Uložení faktury do `invoices.json`
- Možnost zobrazit uložené faktury v tabulce
- Jednoduchý čistý vzhled (HTML + CSS)
- Validace vstupu (neprázdné položky, číselné hodnoty)

---

## 🖼️ Náhled aplikace

### Vystavení faktury
![Vystavení faktury](screenshots/faktura1.png)

### Přidávání více položek
![Více položek](screenshots/faktura3.png)

### Uložené faktury
![Uložené faktury](screenshots/faktura2.png)

---

## 🧰 Použité technologie

- 🐘 PHP
- 🎨 HTML & CSS
- 📦 JSON (místo databáze)

---

## 📁 Struktura projektu

Webová fakturační mini aplikace/
├── index.php # Hlavní stránka pro vystavení faktury
├── save.php # Ukládání faktur do JSON
├── list.php # Výpis uložených faktur
├── functions.php # Pomocné funkce pro načítání dat
├── invoices.json # Uložené faktury (data)
├── style.css # Stylování vzhledu
└── screenshots/ # Složka s náhledy aplikace

yaml
Zkopírovat
Upravit

---

## 🚀 Jak spustit

1. Zkopíruj složku s projektem do `htdocs` ve svém XAMPP adresáři.
2. Spusť Apache server v ovládacím panelu XAMPP.
3. Otevři prohlížeč a zadej `http://localhost/nazev-slozky` (např. `http://localhost/fakturace`).
4. Aplikace je připravena k použití.

---

## 🧑‍💻 Autor

Projekt vytvořil **Lukas** jako součást výuky PHP a práce s formuláři bez databáze.
