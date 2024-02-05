<?php

use AllDressed\Constants\Permission;

return [
    Permission::ACTIVATE_DELIVERY_SCHEDULE->value => 'Activate delivery schedule',
    Permission::ACTIVATE_DELIVERY_ZONE->value => 'Activate delivery zone',
    Permission::BILL_SUBSCRIPTION->value => 'Bill subscription',
    Permission::CANCEL_ORDER->value => 'Cancel order',
    Permission::CANCEL_SUBSCRIPTION->value => 'Cancel subscription',
    Permission::CREATE_API_TOKEN->value => 'Create api tokens',
    Permission::CREATE_GIFT_CARD_BATCH->value => 'Create gift cards batches',
    Permission::CREATE_BECOOL_INTEGRATION->value => 'Create BeCool integrations',
    Permission::CREATE_CATEGORY->value => 'Create products categories',
    Permission::CREATE_CHOICE->value => 'Create choices',
    Permission::CREATE_CREDIT->value => 'Create credits',
    Permission::CREATE_CUSTOMER->value => 'Create customers',
    Permission::CREATE_DELIVERY_ZONE->value => 'Create delivey zones',
    Permission::CREATE_DISCOUNT->value => 'Create discounts',
    Permission::CREATE_GIFT_CARD->value => 'Create gift cards',
    Permission::CREATE_INTEGRATION->value => 'Create integrations',
    Permission::CREATE_KLAVIYO_INTEGRATION->value => 'Create Klaviyo integrations',
    Permission::CREATE_MENU->value => 'Create menus',
    Permission::CREATE_NETSUITE_INTEGRATION->value => 'Create NetSuite integrations',
    Permission::CREATE_NOTE->value => 'Create orders notes',
    Permission::CREATE_PAYMENT_GATEWAY->value => 'Create payment gateways',
    Permission::CREATE_PAYMENT_METHOD->value => 'Create customers payment methods',
    Permission::CREATE_PRODUCT->value => 'Create products',
    Permission::CREATE_PACKAGE->value => 'Create packages',
    Permission::CREATE_SUBSCRIPTION->value => 'Create subscriptions',
    Permission::CREATE_TAG->value => 'Create customers tags',
    Permission::CREATE_TEAM->value => 'Create teams',
    Permission::CREATE_TRANSACTION->value => 'Create transaction',
    Permission::CREATE_WEBHOOK->value => 'Create Webhook',
    Permission::DEACTIVATE_DELIVERY_SCHEDULE->value => 'Deactivate delivery schedule',
    Permission::DEACTIVATE_DELIVERY_ZONE->value => 'Deactivate delivery zone',
    Permission::DELETE_API_TOKEN->value => 'Delete api tokens',
    Permission::DELETE_GIFT_CARD_BATCH->value => 'Delete gift cards batches',
    Permission::DELETE_CATEGORY->value => 'Delete products categories',
    Permission::DELETE_CUSTOMER->value => 'Delete customers',
    Permission::DELETE_DISCOUNT->value => 'Delete discounts',
    Permission::DELETE_MENU->value => 'Delete menus',
    Permission::DELETE_PACKAGE->value => 'Delete packages',
    Permission::DELETE_PAYMENT_GATEWAY->value => 'Delete payment gateways',
    Permission::DELETE_PAYMENT_METHOD->value => 'Delete customers payment methods',
    Permission::DELETE_PRODUCT->value => 'Delete products',
    Permission::DELETE_TEAM->value => 'Delete teams',
    Permission::DELETE_WEBHOOK->value => 'Delete webhooks',
    Permission::GENERATE_BECOOL_MANIFEST->value => 'Generate becool manifest',
    Permission::GENERATE_REPORTS->value => 'Generate reports',
    Permission::PURGE_GIFT_CARD->value => 'Purge gift cards',
    Permission::REFUND_ORDER->value => 'Refund order',
    Permission::UPDATE_GIFT_CARD_BATCH->value => 'Update gift cards batches',
    Permission::UPDATE_CATEGORY->value => 'Update products categories',
    Permission::UPDATE_CHOICE->value => 'Update subscriptions choices',
    Permission::UPDATE_CUSTOMER->value => 'Update customers',
    Permission::UPDATE_DELIVERY_ZONE->value => 'Update delivery zones',
    Permission::UPDATE_DISCOUNT->value => 'Update discounts',
    Permission::UPDATE_DISCOUNT_CHOICE->value => 'Update discount choices',
    Permission::UPDATE_PAYMENT_GATEWAY->value => 'Update payment gateway',
    Permission::UPDATE_MENU->value => 'Update menus',
    Permission::UPDATE_ORDER->value => 'Update orders',
    Permission::UPDATE_PACKAGE->value => 'Update packages',
    Permission::DELETE_PAYMENT_GATEWAY->value => 'Update payment gateways',
    Permission::UPDATE_PAYMENT_METHOD->value => 'Update customers payment methods',
    Permission::UPDATE_PRODUCT->value => 'Update products',
    Permission::UPDATE_SETTING->value => 'Update profile settings',
    Permission::UPDATE_SUBSCRIPTION->value => 'Update subscriptions',
    Permission::UPDATE_TEAM->value => 'Update team',
    Permission::UPDATE_WEBHOOK->value => 'Update webhook',
    Permission::VIEW_API_KEYS->value => 'View API Keys index',
    Permission::VIEW_GIFT_CARD_BATCH->value => 'View gift card batch',
    Permission::VIEW_GIFT_CARD_BATCHES->value => 'View gift cards batches index',
    Permission::VIEW_BECOOL_INTEGRATION->value => 'View BeCool integration',
    Permission::VIEW_BECOOL_INTEGRATIONS->value => 'View BeCool integrations index',
    Permission::VIEW_CATEGORY->value => 'View category',
    Permission::VIEW_CATEGORIES->value => 'View categories index',
    Permission::VIEW_CHOICES->value => 'View subscriptions choices index',
    Permission::VIEW_CUSTOMER->value => 'View customer',
    Permission::VIEW_CUSTOMERS->value => 'View customers index',
    Permission::VIEW_DELIVERY_SCHEDULE->value => 'View delivery schedule',
    Permission::VIEW_DELIVERY_SCHEDULES->value => 'View delivery schedules index',
    Permission::VIEW_DELIVERY_ZONE->value => 'View delivery zone',
    Permission::VIEW_DELIVERY_ZONES->value => 'View delivery zones index',
    Permission::VIEW_DISCOUNT->value => 'View discount',
    Permission::VIEW_DISCOUNTS->value => 'View discounts index',
    Permission::VIEW_GIFT_CARD => 'View gift card',
    Permission::VIEW_GIFT_CARDS => 'View gift cards index',
    Permission::VIEW_INTEGRATION->value => 'View integration',
    Permission::VIEW_INTEGRATIONS->value => 'View integrations index',
    Permission::VIEW_INVOICES->value => 'View invoices index',
    Permission::VIEW_ITEMS->value => 'View menus items index',
    Permission::VIEW_KLAVIYO_INTEGRATION->value => 'View Klaviyo integration',
    Permission::VIEW_KLAVIYO_INTEGRATIONS->value => 'View Klaviyo integrations index',
    Permission::VIEW_LTV->value => 'View LTV',
    Permission::VIEW_MENU->value => 'View menu',
    Permission::VIEW_MENUS->value => 'View menus index',
    Permission::VIEW_MRR->value => 'View MRR',
    Permission::VIEW_NETSUITE_INTEGRATION->value => 'View NetSuite integration',
    Permission::VIEW_NETSUITE_INTEGRATIONS->value => 'View NetSuite integrations index',
    Permission::VIEW_ORDER->value => 'View order',
    Permission::VIEW_ORDERS->value => 'View orders index',
    Permission::VIEW_PACKAGE->value => 'View package',
    Permission::VIEW_PACKAGES->value => 'View packages index',
    Permission::VIEW_PAYMENT_GATEWAY->value => 'View payment gateway',
    Permission::VIEW_PAYMENT_GATEWAYS->value => 'View payement gateways index',
    Permission::VIEW_PAYMENT_METHODS->value => 'View customers payment methods index',
    Permission::VIEW_PRODUCT->value => 'View product',
    Permission::VIEW_PRODUCTS->value => 'View product index',
    Permission::VIEW_REPORTS->value => 'View reports index',
    Permission::VIEW_SETTINGS->value => 'View profile settings index',
    Permission::VIEW_STATEMENTS->value => 'View statements index',
    Permission::VIEW_SUBSCRIPTION->value => 'View subscription',
    Permission::VIEW_SUBSCRIPTIONS->value => 'View subscriptions index',
    Permission::VIEW_TAGS->value => 'View customers tags',
    Permission::VIEW_TEAM->value => 'View team member',
    Permission::VIEW_TEAMS->value => 'View teams index',
    Permission::VIEW_WEBHOOK->value => 'View webhook',
    Permission::VIEW_WEBHOOKS->value => 'Vieww webhooks index',
];