<?php

use AllDressed\Constants\TransactionStatus;

return [
    TransactionStatus::FAILED->value => 'Échoué',
    TransactionStatus::SUCCEEDED->value => 'Réussi',
];
