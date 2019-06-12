<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],
    /**
     * 钉钉的配置
     */
    'dingding' => [
        'attend_process_limit_day' => '10',

        //test
//        'corpid' => 'dingf0f4d76a3f74902935c2f4657eb6378f',
//
//        'agentid' => '175088085',
//
//        'corpsecret' => 'sWjBKp09W5M0PonTHkLbK_wLn10nVCu8vMurueGfevKpja3yH-rDlMIcva6Z5XgG',
//
//        'ssosecret' => 'bEs5zRXiyfb0OLYiiQ4Qp49aAsLWYN8suQ8YT2DPjv7XjbLtCjgd3A0pA7E0Grxj',
//
//        'channelsecret' => 'tbhHQ5Y3zwVExrpGPbKlnYNQKGsdvJQpzp7OamvxJwQF4duA-JPoIqpFfbvHf2y6',
//
//        'dir_root' => dirname(__FILE__).'/',
//
//        'opai_host' => "https://oapi.dingtalk.com",
//
//        'appId' => 'dingoayfltxxehw8krzhq4',
//
//        'appSecret' => 'dhHpvL09dMkmHXCp9ZinAlDJ-qkVop7Gr6VOKF95sy5UJLmrMWZYh9hj_jgYI_-P',
//
//        'goto_uri' => 'https://oapi.dingtalk.com/connect/oauth2/sns_authorize?appid=dingoayfltxxehw8krzhq4&response_type=code&scope=snsapi_login&state='.time().'&redirect_uri=http://192.168.1.187/admin/ddauth/login',
//        //'&redirect_uri=http://192.168.1.187/dingdingapi/auth/callback'
//
//        'goto_uri_encode' => urlencode('https://oapi.dingtalk.com/connect/oauth2/sns_authorize?appid=dingoayfltxxehw8krzhq4&response_type=code&scope=snsapi_login&state='.time().'&redirect_uri=http://192.168.1.187/admin/ddauth/login'),
//
//        'it_dep_id' => '67619735',
//
//        'process_code_fill_card' => 'PROC-8A1FB62D-A928-4AE4-85BB-5089D71DE363',
//
//        'process_code_leave' => 'PROC-34501EFD-C5CE-4C76-AA2E-F6E5B0D601DA',
//
//        'process_code_overtime' => 'PROC-F08FE900-C8D9-4FC2-8BAE-2ABE82C19BF7',

        //live
        'corpid' => 'ding0c9a2de8aa68c484',

        //'agentid' => '153525907',
        'agentid' => '190028934',

        //'corpsecret' => 'Xt9vQHds1IalpcTFISl_6g6azSRajyCqcTiEfkrv8r2K216yJ9weIblDZkVawBvy',

        'corpsecret' => 'zZWzUUxPgMLqMdYVpVB77Vs1Ag5W06eHPUu8_4Ti7viI7vfT7zPSRwaOcHYFwIgE',

        'ssosecret' => 'L8X7GEfr6iE-PCGX9w9NpDqAlrq3xocbJeF0OwYORLkMuwu3m_bP3Oieiys--I3-',

        'channelsecret' => '33NLdZVN1tyA_6JJXLWISKTVGplPkAn0pn-Dp6ek4uaT3KCxfaVRdWvjlWsTHfcp',

        'dir_root' => dirname(__FILE__).'/',

        'opai_host' => "https://oapi.dingtalk.com",

        'appId' => 'dingoaeglpebhaff8lrddl',

        'appSecret' => 's2N-5NEp5HTiGW5K9-MgyyFjxgw4dmv52Ik6PyJEpc1G0ynA82mk_sOHzbKqAgoE',

        'redirect_uri' => 'https://m.epcom-cnt.com/dingdingapi/auth/callback',


        'goto_uri' => 'https://oapi.dingtalk.com/connect/oauth2/sns_authorize?appid=dingoaeglpebhaff8lrddl&response_type=code&scope=snsapi_login&state='.time().'&redirect_uri=https://m.epcom-cnt.com/admin/ddauth/login',

        'goto_uri_encode' => urlencode('https://oapi.dingtalk.com/connect/oauth2/sns_authorize?appid=dingoaeglpebhaff8lrddl&response_type=code&scope=snsapi_login&state='.time().'&redirect_uri=https://m.epcom-cnt.com/admin/ddauth/login'),

        'it_dep_id' => '54872385',

        'process_code_fill_card' => 'PROC-EF6YLU2SO2-7GVFD3FDSPVZ231PS4CT2-34VZ6SVI-UV',

        'process_code_leave' => 'PROC-EF6Y0XWVO2-E6V4TQ26PA4C6SLL5RJT1-V0PPE9GI-5C1',

        'process_code_overtime' => 'PROC-EF6YCS6WO2-WZ45XCVHS751Q2GCVU252-OYU5WLGI-57',

        'process_code_prod_except' => 'PROC-PFYJUZMV-OCO3X4KO0F9TACFNLXSB2-BHQ065TJ-81',

        'cb_token' => 'eastpoint',

        'cb_aes_key' => 'zaDi12W3zzsngw0HoYaBds6SFjlUjsxqldhOKhbBatt',

        'cb_url' => 'https://m.epcom-cnt.com/admin/dingding/call-back-sync',
    ],
];
