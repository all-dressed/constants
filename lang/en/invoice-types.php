<?php

use AllDressed\Constants\InvoiceType;

return [
    InvoiceType::CANCELLATION->value => 'Refund',
    InvoiceType::PAYMENT->value => 'Payment',
    InvoiceType::REFUND->value => 'Refund',
];
