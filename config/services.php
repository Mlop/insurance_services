<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\Models\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'tourico' => [
        'destination' => [
            'wsdl' => env('PROVIDER_TOURICO_HOTEL_WSDL_DESTINATION', false),
            'account' => [
                'ws_user' => env('PROVIDER_TOURICO_HOTEL_USER', false),
                'ws_pass' => env('PROVIDER_TOURICO_HOTEL_PWD', false),
                'ws_lang' => env('PROVIDER_TOURICO_HOTEL_LANG', false),
                'ws_ver' => env('PROVIDER_TOURICO_HOTEL_VER', false)
            ]
        ],
        'hotel' => [
            'wsdl' => env('PROVIDER_TOURICO_HOTEL_WSDL_HOTEL', false),
            'account' => [
                'ws_user' => env('PROVIDER_TOURICO_HOTEL_USER', false),
                'ws_pass' => env('PROVIDER_TOURICO_HOTEL_PWD', false),
                'ws_lang' => env('PROVIDER_TOURICO_HOTEL_LANG', false),
                'ws_ver' => env('PROVIDER_TOURICO_HOTEL_VER', false)
            ]
        ],
        'reservation' => [
            'wsdl' => env('PROVIDER_TOURICO_HOTEL_WSDL_RESERVATION', false),
            'account' => [
                'ws_user' => env('PROVIDER_TOURICO_HOTEL_USER', false),
                'ws_pass' => env('PROVIDER_TOURICO_HOTEL_PWD', false),
                'ws_lang' => env('PROVIDER_TOURICO_HOTEL_LANG', false),
                'ws_ver' => env('PROVIDER_TOURICO_HOTEL_VER', false)
            ]
        ]
    ],

    "front" => [
        "hotelurl" => env('FRONT_HOTEL_URL', "")
    ],
    "payment" => [
        "query" => env('PAYMENT_QUERY_URL', ""),
        "refund" => env('PAYMENT_REFUND_URL', ""),
        "notifyorder" => env('PAYMENT_NOTIFY_ORDER_URL', ""),
        "pay" => env('PAYMENT_PAY_URL', ""),
        "pay_notify" => env('PAYMENT_PAY_NOTIFY_ORDER_URL', ""),
    ],
    "api" => [
        "url" => env('API_SERVICES_URL', ""),
        "order_notify_hotel" => env("ORDER_NOTIFY_HOTEL", ""),
        "order_notify_normal" => env("ORDER_NOTIFY_NORMAL", ""),
    ]
];
