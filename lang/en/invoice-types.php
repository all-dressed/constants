<?php

use AllDressed\Constants\InvoiceType;

return [
    InvoiceType::CANCELLATION->value => 'Refund',
    InvoiceType::CREDIT->value => 'Credit',
    InvoiceType::PAYMENT->value => 'Payment',
    InvoiceType::REFUND->value => 'Refund',
];
