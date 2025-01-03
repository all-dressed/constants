<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;
use Illuminate\Support\Collection;

enum Permission: string
{
    use AvailableAsCollection, AvailableAsOptions, CanBeRandomized;

    case ACTIVATE_DELIVERY_SCHEDULE = 'delivery-schedules:activate';
    case ACTIVATE_DELIVERY_ZONE = 'delivery-zones:activate';
    case ACTIVATE_DISCOUNT = 'discounts:activate';
    case BILL_SUBSCRIPTION = 'subscriptions:bill';
    case CANCEL_ORDER = 'orders:cancel';
    case CANCEL_SUBSCRIPTION = 'subscriptions:cancel';
    case CREATE_API_TOKEN = 'tokens:api:create';
    case CREATE_BECOOL_INTEGRATION = 'integrations:becool:create';
    case CREATE_CATEGORY = 'categories:create';
    case CREATE_CHOICE = 'choices:create';
    case CREATE_CREDIT = 'credits:create';
    case CREATE_CUSTOMER = 'customers:create';
    case CREATE_DELIVERY_ZONE = 'delivery-zones:create';
    case CREATE_DISCOUNT = 'discounts:create';
    case CREATE_GIFT_CARD = 'gift-cards:create';
    case CREATE_GIFT_CARD_BATCH = 'gift-cards:batches:create';
    case CREATE_INTEGRATION = 'integrations:create';
    case CREATE_KLAVIYO_INTEGRATION = 'integrations:klaviyo:create';
    case CREATE_MENU = 'menus:create';
    case CREATE_NETSUITE_INTEGRATION = 'integrations:netsuite:create';
    case CREATE_NOTE = 'notes:create';
    case CREATE_ORDER = 'orders:create';
    case CREATE_PAYMENT_GATEWAY = 'gateways:create';
    case CREATE_PAYMENT_METHOD = 'customers:payment-methods:create';
    case CREATE_PRODUCT = 'products:create';
    case CREATE_PACKAGE = 'packages:create';
    case CREATE_SUBSCRIPTION = 'subscriptions:create';
    case CREATE_TAG = 'tags:create';
    case CREATE_TEAM = 'teams:create';
    case CREATE_TRANSACTION = 'transactions:create';
    case CREATE_WEBHOOK = 'webhooks:create';
    case DEACTIVATE_DELIVERY_SCHEDULE = 'delivery-schedules:deactivate';
    case DEACTIVATE_DELIVERY_ZONE = 'delivery-zones:deactivate';
    case DEACTIVATE_DISCOUNT = 'discounts:deactivate';
    case DELETE_API_TOKEN = 'tokens:api:delete';
    case DELETE_CATEGORY = 'categories:delete';
    case DELETE_CUSTOMER = 'customers:delete';
    case DELETE_DISCOUNT = 'discounts:delete';
    case DELETE_GIFT_CARD_BATCH = 'gift-cards:batches:delete';
    case DELETE_MENU = 'menus:delete';
    case DELETE_PACKAGE = 'packages:delete';
    case DELETE_PAYMENT_GATEWAY = 'gateways:delete';
    case DELETE_PAYMENT_METHOD = 'customers:payment-methods:delete';
    case DELETE_PRODUCT = 'products:delete';
    case DELETE_TEAM = 'teams:delete';
    case DELETE_USER = 'users:delete';
    case DELETE_WEBHOOK = 'webhooks:delete';
    case EXPORT_CUSTOMERS_EMAIL = 'customers:export:email';
    case GENERATE_BECOOL_MANIFEST = 'integrations:becool:generate';
    case PURGE_GIFT_CARD = 'gift-cards:purge';
    case GENERATE_REPORTS = 'reports:generate';
    case REFUND_ORDER = 'orders:refund';
    case UPDATE_CATEGORY = 'categories:update';
    case UPDATE_CHOICE = 'choices:update';
    case UPDATE_CUSTOMER = 'customers:update';
    case UPDATE_DELIVERY_ZONE = 'delivery-zones:update';
    case UPDATE_DISCOUNT = 'discounts:update';
    case UPDATE_DISCOUNT_CHOICE = 'discounts:choices:update';
    case UPDATE_GIFT_CARD = 'gift-cards:update';
    case UPDATE_GIFT_CARD_BATCH = 'gift-cards:batches:update';
    case UPDATE_MENU = 'menus:update';
    case UPDATE_ORDER = 'orders:update';
    case UPDATE_PACKAGE = 'packages:update';
    case UPDATE_PAYMENT_GATEWAY = 'gateways:update';
    case UPDATE_PAYMENT_METHOD = 'customers:payment-methods:update';
    case UPDATE_PRODUCT = 'products:update';
    case UPDATE_SETTING = 'settings:update';
    case UPDATE_SUBSCRIPTION = 'subscriptions:update';
    case UPDATE_TEAM = 'teams:update';
    case UPDATE_USER = 'users:update';
    case UPDATE_WEBHOOK = 'webhooks:update';
    case VIEW_ACTIVE_SUBSCRIPTIONS_STAT = 'subscriptions:stats:active:show';
    case VIEW_API_KEYS = 'tokens:api:index';
    case VIEW_BECOOL_INTEGRATION = 'integration:becool:index';
    case VIEW_BECOOL_INTEGRATIONS = 'integrations:becool:index';
    case VIEW_CANCELLED_SUBSCRIPTIONS_STAT = 'subscriptions:stats:cancelled:show';
    case VIEW_CATEGORY = 'categories:show';
    case VIEW_CATEGORIES = 'categories:index';
    case VIEW_CHOICES = 'choices:index';
    case VIEW_CUSTOMER = 'customers:show';
    case VIEW_CUSTOMERS = 'customers:index';
    case VIEW_CUSTOMERS_LTV = 'customers:ltv:show';
    case VIEW_CUSTOMERS_CHURN = 'customers:churn:show';
    case VIEW_DELIVERY_SCHEDULE = 'delivery-schedules:show';
    case VIEW_DELIVERY_SCHEDULES = 'delivery-schedules:index';
    case VIEW_DELIVERY_ZONE = 'delivery-zones:show';
    case VIEW_DELIVERY_ZONES = 'delivery-zones:index';
    case VIEW_DISCOUNT = 'discounts:show';
    case VIEW_DISCOUNTS = 'discounts:index';
    case VIEW_GIFT_CARD = 'gift-cards:show';
    case VIEW_GIFT_CARD_BATCH = 'gift-cards:batches:show';
    case VIEW_GIFT_CARD_BATCHES = 'gift-cards:batches:index';
    case VIEW_GIFT_CARDS = 'gift-cards:index';
    case VIEW_INTEGRATION = 'integration:index';
    case VIEW_INTEGRATIONS = 'integrations:index';
    case VIEW_INVOICES = 'invoices:index';
    case VIEW_KLAVIYO_INTEGRATION = 'integration:klaviyo:index';
    case VIEW_KLAVIYO_INTEGRATIONS = 'integrations:klaviyo:index';
    case VIEW_ITEMS = 'items:index';
    case VIEW_LTV = 'ltv:show';
    case VIEW_MENU = 'menus:show';
    case VIEW_MENUS = 'menus:index';
    case VIEW_MRR = 'mrr:show';
    case VIEW_NETSUITE_INTEGRATION = 'integration:netsuite:index';
    case VIEW_NETSUITE_INTEGRATIONS = 'integrations:netsuite:index';
    case VIEW_NEW_SUBSCRIPTIONS_STAT = 'subscriptions:stats:new:show';
    case VIEW_ORDER = 'orders:show';
    case VIEW_ORDERS = 'orders:index';
    case VIEW_PACKAGE = 'packages:show';
    case VIEW_PACKAGES = 'packages:index';
    case VIEW_PAYMENT_GATEWAY = 'gateways:show';
    case VIEW_PAYMENT_GATEWAYS = 'gateways:index';
    case VIEW_PAYMENT_METHODS = 'customers:payment-methods:index';
    case VIEW_PRODUCT = 'products:show';
    case VIEW_PRODUCTS = 'products:index';
    case VIEW_REPORTS = 'reports:index';
    case VIEW_REVENUE = 'revenue:show';
    case VIEW_SETTINGS = 'settings:index';
    case VIEW_STATEMENTS = 'statements:index';
    case VIEW_SUBSCRIPTION = 'subscriptions:show';
    case VIEW_SUBSCRIPTIONS = 'subscriptions:index';
    case VIEW_SUBSCRIPTIONS_BY_STATUS_STAT = 'subscriptions:stats:status:show';
    case VIEW_SUBSCRIPTIONS_CHURN = 'subscriptions:churn:show';
    case VIEW_SUBSCRIPTIONS_LTV = 'subscriptions:ltv:show';
    case VIEW_TAGS = 'tags:index';
    case VIEW_TEAM = 'teams:show';
    case VIEW_TEAMS = 'teams:index';
    case VIEW_USER = 'users:show';
    case VIEW_USERS = 'users:index';
    case VIEW_WEBHOOK = 'webhooks:show';
    case VIEW_WEBHOOKS = 'webhooks:index';

    /**
     * Retrieve all the permissions as a collection.
     *
     * @return \Illuminate\Support\Collection
     */
    public static function all(): Collection
    {
        return collect(static::cases());
    }
}
