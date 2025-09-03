<?php

use AllDressed\Constants\Activity;

return [
    Activity::ACTIVATED_GIFT_CARD->value => ':name a activé la carte cadeau :code d’une valeur de :value :currency.',
    Activity::ADDED_SUBSCRIPTION->value => [
        'title' => 'Nouvel abonnement',
        'value' => ':name a ajouté un nouvel abonnement.',
    ],
    Activity::CANCELLED_ORDER->value => [
        'title' => 'Commande annulée',
        'value' => ':name a annulé une commande.',
    ],
    Activity::CANCELLED_SUBSCRIPTION->value => [
        'title' => 'Abonnement annulé',
        'value' => ':name a annulé un abonnement.',
    ],
    Activity::DELETED_CUSTOMER->value => ':name a supprimé le profil de :customer',
    Activity::FAILED_PAYMENT->value => [
        'title' => 'Paiement refusé',
        'value' => ':name a échoué à effectuer un paiement.',
    ],
    Activity::PAUSED_SUBSCRIPTION->value => [
        'title' => 'Abonnement en pause',
        'value' => ':name a mis un abonnement en pause.',
    ],
    Activity::PLACED_ORDER->value => [
        'title' => 'Nouvel achat',
        'customer' => ':name a passé une nouvelle commande de :amount :currency.',
        'user' => ':name a passé une nouvelle commande de :amount :currency pour :customer.',
    ],
    Activity::PURCHASED_GIFT_CARD->value => ':name a acheté une carte cadeau (:code) d’une valeur de :value :currency.',
    Activity::REACTIVATED_SUBSCRIPTION->value => [
        'title' => 'Abonnement réactivé',
        'value' => ':name a réactivé un abonnement.',
    ],
    Activity::REFUNDED_ORDER->value => [
        'title' => 'Commande remboursée',
        'value' => ':name a reçu un remboursement de :amount :currency.',
    ],
    Activity::RESUMED_SUBSCRIPTION->value => [
        'title' => 'Abonnement repris',
        'value' => ':name a repris un abonnement.',
    ],
    Activity::SENT_GIFT_CARD->value => 'La carte cadeau :code a été envoyée à :email.',
    Activity::SKIPPED_MENU->value => ':name a sauté la livraison du :date pour :subscription.',
    Activity::UNSKIPPED_MENU->value => ':name a réactivé la livraison du :date pour :subscription.',
    Activity::UPDATED_CREDITS->value => ':name a un nouveau solde de crédits de :amount :currency.',
    Activity::UPDATED_CUSTOMER->value => ':name a mis à jour le profil de :customer',
];
