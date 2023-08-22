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
    case BILL_SUBSCRIPTION = 'subscriptions:bill';
    case CANCEL_ORDER = 'orders:cancel';
    case CANCEL_SUBSCRIPTION = 'subscriptions:cancel';
    case CREATE_API_TOKEN = 'tokens:api:create';
    case CREATE_CATEGORY = 'categories:create';
    case CREATE_CREDIT = 'credits:create';
    case CREATE_CUSTOMER = 'customers:create';
    case CREATE_DELIVERY_ZONE = 'delivery-zones:create';
    case CREATE_DISCOUNT = 'discounts:create';
    case CREATE_MENU = 'menus:create';
    case CREATE_NOTE = 'notes:create';
    case CREATE_PAYMENT_GATEWAY = 'gateways:create';
    case CREATE_PAYMENT_METHOD = 'customers:payment-methods:create';
    case CREATE_PRODUCT = 'products:create';
    case CREATE_PACKAGE = 'packages:create';
    case CREATE_SUBSCRIPTION = 'subscriptions:create';
    case CREATE_TAG = 'tags:create';
    case CREATE_TEAM = 'teams:create';
    case CREATE_TRANSACTION = 'transactions:create';
    case DEACTIVATE_DELIVERY_SCHEDULE = 'delivery-schedules:deactivate';
    case DEACTIVATE_DELIVERY_ZONE = 'delivery-zones:deactivate';
    case DELETE_API_TOKEN = 'tokens:api:delete';
    case DELETE_CATEGORY = 'categories:delete';
    case DELETE_CUSTOMER = 'customers:delete';
    case DELETE_DISCOUNT = 'discounts:delete';
    case DELETE_MENU = 'menus:delete';
    case DELETE_PACKAGE = 'packages:delete';
    case DELETE_PAYMENT_GATEWAY = 'gateways:delete';
    case DELETE_PAYMENT_METHOD = 'customers:payment-methods:delete';
    case DELETE_PRODUCT = 'products:delete';
    case DELETE_TEAM = 'teams:delete';
    case GENERATE_BECOOL_MANIFEST = 'integrations:becool:generate';
    case GENERATE_REPORTS = 'reports:generate';
    case REFUND_ORDER = 'orders:refund';
    case UPDATE_CATEGORY = 'categories:update';
    case UPDATE_CHOICE = 'choices:update';
    case UPDATE_CUSTOMER = 'customers:update';
    case UPDATE_DELIVERY_ZONE = 'delivery-zones:update';
    case UPDATE_DISCOUNT = 'discounts:update';
    case UPDATE_DISCOUNT_CHOICE = 'discounts:choices:update';
    case UPDATE_MENU = 'menus:update';
    case UPDATE_ORDER = 'orders:update';
    case UPDATE_PACKAGE = 'packages:update';
    case UPDATE_PAYMENT_GATEWAY = 'gateways:update';
    case UPDATE_PAYMENT_METHOD = 'customers:payment-methods:update';
    case UPDATE_PRODUCT = 'products:update';
    case UPADTE_SETTING = 'settings:update';
    case UPDATE_SUBSCRIPTION = 'subscriptions:update';
    case UPDATE_TEAM = 'teams:update';
    case VIEW_CATEGORY = 'categories:show';
    case VIEW_CATEGORIES = 'categories:index';
    case VIEW_CHOICES = 'choices:index';
    case VIEW_CUSTOMER = 'customers:show';
    case VIEW_CUSTOMERS = 'customers:index';
    case VIEW_DELIVERY_SCHEDULE = 'delivery-schedules:show';
    case VIEW_DELIVERY_SCHEDULES = 'delivery-schedules:index';
    case VIEW_DELIVERY_ZONE = 'delivery-zones:show';
    case VIEW_DELIVERY_ZONES = 'delivery-zones:index';
    case VIEW_DISCOUNT = 'discounts:show';
    case VIEW_DISCOUNTS = 'discounts:index';
    case VIEW_INTEGRATIONS = 'integrations:index';
    case VIEW_KLAVIYO_INTEGRATIONS = 'integrations:klaviyo:index';
    case VIEW_INVOICES = 'invoices:index';
    case VIEW_ITEMS = 'items:index';
    case VIEW_LTV = 'ltv:show';
    case VIEW_MENU = 'menus:show';
    case VIEW_MENUS = 'menus:index';
    case VIEW_MRR = 'mrr:show';
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
    case VIEW_SETTINGS = 'settings:index';
    case VIEW_STATEMENTS = 'statements:index';
    case VIEW_SUBSCRIPTION = 'subscriptions:show';
    case VIEW_SUBSCRIPTIONS = 'subscriptions:index';
    case VIEW_TAGS = 'tags:index';
    case VIEW_TEAM = 'teams:show';
    case VIEW_TEAMS = 'teams:index';

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
