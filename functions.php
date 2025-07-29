<?php

function loadInvoices() {
    if (!file_exists('invoices.json')) {
        file_put_contents('invoices.json', '[]');
    }
    return json_decode(file_get_contents('invoices.json'), true);
}

function saveInvoice($invoice) {
    $invoices = loadInvoices();
    $invoices[] = $invoice;
    file_put_contents('invoices.json', json_encode($invoices, JSON_PRETTY_PRINT));
}