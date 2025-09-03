<?php

use AllDressed\Constants\InvoiceType;

return [
    InvoiceType::CANCELLATION->value => 'Annulation',
    InvoiceType::CREDIT->value => 'Crédit',
    InvoiceType::PAYMENT->value => 'Paiement',
    InvoiceType::REFUND->value => 'Remboursement',
];
