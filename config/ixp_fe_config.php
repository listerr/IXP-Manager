<?php

// Not a traditional Laravel config file - determines what is configurable
// on the IXP Manager frontend

// Laslzo - what else might you think about:


// everything in identity.php
//   vlans.default -> should be a dropdown of VLANs so we'll need a new select options in the array below:
//           'optionsdb' => [ 'model' => 'Vlan', 'keys' => 'id', 'values' => 'name' ]

// ixp_api.json_export_schema
// ixp.as112 as part of modules
// ixp.rpki


return [

    'panels' => [

        'frontend_controllers' => [
            'title'       => 'Modules',
            'description' => "These are features that can be enabled or disabled. Some are
                                    disabled by default as they may require extra configuration settings.",

            'fields' => [

                'console-server-connection' => [
                    'config_key' => 'ixp_fe.frontend.disabled.console-server-connection',
                    'dotenv_key' => 'IXP_FE_FRONTEND_DISABLED_CONSOLE',
                    'type'       => 'radio',
                    'name'       => 'Console Server Connections',
                    'docs_url'   => 'https://docs.ixpmanager.org/features/console-servers/', // can be null
                    'help'       => 'An IXP would typically have out of band access (for emergencies, firmware upgrades, 
                                        etc) to critical infrastructure devices by means of a console server. This 
                                        module allows you to record console server port connections.',
                ],
                'cust-kit'                  => [
                    'config_key' => 'ixp_fe.frontend.disabled.cust-kit',
                    'dotenv_key' => 'IXP_FE_FRONTEND_DISABLED_CUSTKIT',
                    'type'       => 'radio',
                    'name'       => 'Customer Kit',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'docstore'                  => [
                    'config_key' => 'ixp_fe.frontend.disabled.docstore',
                    'dotenv_key' => 'IXP_FE_FRONTEND_DISABLED_DOCSTORE',
                    'type'       => 'radio',
                    'name'       => 'Document Store',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'docstore_customer'         => [
                    'config_key' => 'ixp_fe.frontend.disabled.docstore_customer',
                    'dotenv_key' => 'IXP_FE_FRONTEND_DISABLED_DOCSTORE_CUSTOMER',
                    'type'       => 'radio',
                    'name'       => 'Customer Document Store',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'filtered-prefixes'         => [
                    'config_key' => 'ixp_fe.frontend.disabled.filtered-prefixes',
                    'dotenv_key' => 'IXP_FE_FRONTEND_DISABLED_FILTERED_PREFIXES',
                    'type'       => 'radio',
                    'name'       => 'Filtered Prefixes',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'logs'                      => [
                    'config_key' => 'ixp_fe.frontend.disabled.logs',
                    'dotenv_key' => 'IXP_FE_FRONTEND_DISABLED_LOGS',
                    'type'       => 'radio',
                    'name'       => 'Logs',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'logo'                      => [
                    'config_key' => 'ixp_fe.frontend.disabled.logo',
                    'dotenv_key' => 'IXP_FE_FRONTEND_DISABLED_LOGO',
                    'type'       => 'radio',
                    'name'       => 'Logo',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'lg'                        => [
                    'config_key' => 'ixp_fe.frontend.disabled.lg',
                    'dotenv_key' => 'IXP_FE_FRONTEND_DISABLED_LOOKING_GLASS',
                    'type'       => 'radio',
                    'name'       => 'Looking Glass',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'net-info'                  => [
                    'config_key' => 'ixp_fe.frontend.disabled.net-info',
                    'dotenv_key' => 'IXP_FE_FRONTEND_DISABLED_NETINFO',
                    'type'       => 'radio',
                    'name'       => 'Net Information',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'peering-manager'           => [
                    'config_key' => 'ixp_fe.frontend.disabled.peering-manager',
                    'dotenv_key' => 'IXP_FE_FRONTEND_DISABLED_PEERING_MANAGER',
                    'type'       => 'radio',
                    'name'       => 'Peering Manager',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'peering-matrix'            => [
                    'config_key' => 'ixp_fe.frontend.disabled.peering-matrix',
                    'dotenv_key' => 'IXP_FE_FRONTEND_DISABLED_PEERING_MATRIX',
                    'type'       => 'radio',
                    'name'       => 'Peering Matrix',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'phpinfo'                   => [
                    'config_key' => 'ixp_fe.frontend.disabled.phpinfo',
                    'dotenv_key' => 'IXP_FE_FRONTEND_DISABLED_PHPINFO',
                    'type'       => 'radio',
                    'name'       => 'PHP Information',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'rs-prefixes'               => [
                    'config_key' => 'ixp_fe.frontend.disabled.rs-prefixes',
                    'dotenv_key' => 'IXP_FE_FRONTEND_DISABLED_RS_PREFIXES',
                    'type'       => 'radio',
                    'name'       => 'RS Prefixes',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'rs-filters'                => [
                    'config_key' => 'ixp_fe.frontend.disabled.rs-filters',
                    'dotenv_key' => 'IXP_FE_FRONTEND_DISABLED_RS_FILTERS',
                    'type'       => 'radio',
                    'name'       => 'RS Filters',
                    'docs_url'   => null,
                    'help'       => '',
                ],
            ],
        ],


        'identity' => [

            'title'       => 'IXP Identity',
            'description' => 'IXP Identity Information.',

            'fields' => [
                'legalname'       => [
                    'config_key' => 'identity.legalname',
                    'dotenv_key' => 'IDENTITY_LEGALNAME',
                    'type'       => 'text',
                    'rules'      => '',
                    'name'       => 'Legal Name',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'location.city'   => [
                    'config_key' => 'identity.location.city',
                    'dotenv_key' => 'IDENTITY_CITY',
                    'type'       => 'text',
                    'rules'      => '',
                    'name'       => 'Location: City',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'locationcountry' => [
                    'config_key' => 'identity.location.country',
                    'dotenv_key' => 'IDENTITY_COUNTRY',
                    'type'       => 'text',
                    'rules'      => '',
                    'name'       => 'Location: Country',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'orgname'         => [
                    'config_key' => 'identity.orgname',
                    'dotenv_key' => 'IDENTITY_ORGNAME',
                    'type'       => 'text',
                    'rules'      => '',
                    'name'       => 'Organisation Name',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'name'            => [
                    'config_key' => 'identity.name',
                    'dotenv_key' => 'IDENTITY_NAME',
                    'type'       => 'text',
                    'rules'      => '',
                    'name'       => 'Name',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'email'           => [
                    'config_key' => 'identity.email',
                    'dotenv_key' => 'IDENTITY_EMAIL',
                    'type'       => 'text',
                    'rules'      => 'nullable|max:255|email',
                    'name'       => 'Email Address',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'testemail'       => [
                    'config_key' => 'identity.testemail',
                    'dotenv_key' => 'IDENTITY_TESTEMAIL',
                    'type'       => 'text',
                    'rules'      => 'nullable|max:255|email',
                    'name'       => 'Test Email Address',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'rsvpemail'       => [
                    'config_key' => 'identity.rsvpemail',
                    'dotenv_key' => 'IDENTITY_RSVPEMAIL',
                    'type'       => 'text',
                    'rules'      => 'nullable|max:255|email',
                    'name'       => 'RSVP Email Address',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'watermark'       => [
                    'config_key' => 'identity.watermark',
                    'dotenv_key' => 'IDENTITY_WATERMARK',
                    'type'       => 'text',
                    'rules'      => '',
                    'name'       => 'Watermark',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'support_email'   => [
                    'config_key' => 'identity.support_email',
                    'dotenv_key' => 'IDENTITY_SUPPORT_EMAIL',
                    'type'       => 'text',
                    'rules'      => 'nullable|max:255|email',
                    'name'       => 'Support Email Address',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'support_phone'   => [
                    'config_key' => 'identity.support_phone',
                    'dotenv_key' => 'IDENTITY_SUPPORT_PHONE',
                    'type'       => 'text',
                    'rules'      => '',
                    'name'       => 'Support Phone Number',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'support_hours'   => [
                    'config_key' => 'identity.support_hours',
                    'dotenv_key' => 'IDENTITY_SUPPORT_HOURS',
                    'type'       => 'text',
                    'rules'      => '',
                    'name'       => 'Support Hours',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'billing_email'   => [
                    'config_key' => 'identity.billing_email',
                    'dotenv_key' => 'IDENTITY_BILLING_EMAIL',
                    'type'       => 'text',
                    'rules'      => 'nullable|max:255|email',
                    'name'       => 'Billing Email Address',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'billing_phone'   => [
                    'config_key' => 'identity.billing_phone',
                    'dotenv_key' => 'IDENTITY_BILLING_PHONE',
                    'type'       => 'text',
                    'rules'      => '',
                    'name'       => 'Billing Phone Number',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'billing_hours'   => [
                    'config_key' => 'identity.billing_hours',
                    'dotenv_key' => 'IDENTITY_BILLING_HOURS',
                    'type'       => 'text',
                    'rules'      => '',
                    'name'       => 'Billing Hours',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'sitename'        => [
                    'config_key' => 'identity.sitename',
                    'dotenv_key' => 'IDENTITY_SITENAME',
                    'type'       => 'text',
                    'rules'      => '',
                    'name'       => 'Site Name',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'titlename'       => [
                    'config_key' => 'identity.titlename',
                    'dotenv_key' => 'IDENTITY_TITLENAME',
                    'type'       => 'text',
                    'rules'      => '',
                    'name'       => 'Site Title',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'corporate_url'   => [
                    'config_key' => 'identity.corporate_url',
                    'dotenv_key' => 'IDENTITY_CORPORATE_URL',
                    'type'       => 'text',
                    'rules'      => '',
                    'name'       => 'Corporate Url Address',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'url'             => [
                    'config_key' => 'identity.url',
                    'dotenv_key' => 'APP_URL',
                    'type'       => 'text',
                    'rules'      => '',
                    'name'       => 'Url Address',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'biglogo'         => [
                    'config_key' => 'identity.biglogo',
                    'dotenv_key' => 'IDENTITY_BIGLOGO',
                    'type'       => 'text',
                    'rules'      => '',
                    'name'       => 'Big Logo',
                    'docs_url'   => null,
                    'help'       => '',
                ],
                'vlans.default'   => [
                    'config_key' => 'identity.vlans.default',
                    'dotenv_key' => 'IDENTITY_DEFAULT_VLAN',
                    'type'       => 'select',
                    'options'    => ['type' => 'collection', 'list' => [ 'model' => 'Vlan', 'keys' => 'id', 'values' => 'name' ]],
                    'name'       => 'Default Vlans',
                    'docs_url'   => null,
                    'help'       => '',
                ],
            ],

        ],

        'auth' => [

            'title' => 'Authentication',
            // 'description' => "Authentication related options.",

            'fields' => [

                'login_history' => [

                    'config_key' => 'ixp_fe.login_history.enabled',
                    'dotenv_key' => 'IXP_FE_LOGIN_HISTORY_ENABLED',
                    'type'       => 'radio',
                    'name'       => "Record Login History",
                    'help'       => 'Record the login history for users. Expunged after six months by default.',
                ],

            ],

        ],

        'third_party' => [

            'title'       => '3rd Parties',
            'description' => "Configuration options for third party services.",

            'fields' => [

                'peeringdb_api_key' => [

                    'config_key' => 'ixp_api.peeringdb.api_key',
                    'dotenv_key' => 'IXP_API_PEERING_DB_API_KEY',
                    'type'       => 'text',
                    'name'       => "PeeringDB API Key",
                    'docs_url'   => 'https://docs.peeringdb.com/howto/api_keys/',
                    'help'       => "IXP Manager uses information from PeeringDB in a number of places. Setting an API
                                        key is highly recommended so additional information can be accessed and so that
                                        rate limited can be avoided.",
                ],

            ],

        ],


        'admin_options' => [

            'title'       => 'Admin',
            'description' => "Various administrator related options.",

            'fields' => [

                'default_graph_period' => [

                    'config_key' => 'ixp_fe.admin.default_graph_period',
                    'dotenv_key' => 'IXP_FE_ADMIN_DASHBOARD_DEFAULT_GRAPH_PERIOD',
                    'type'       => 'select',
                    'options'    => ['type' => 'array', 'list' => IXP\Services\Grapher\Graph::PERIODS],
                    'name'       => "Admin Dashbaord Graph Period",
                    'help'       => 'Default graph period on the admin dashboard.',
                ],


                'billing-updates-notification' => [

                    'config_key' => 'ixp_fe.frontend.billing-updates.notification',
                    'dotenv_key' => 'IXP_FE_BILLING_UPDATES',
                    'type'       => 'text',
                    'rules'      => 'nullable|max:255|email',
                    'name'       => 'Billing Updates Notification',
                    'docs_url'   => 'https://docs.ixpmanager.org/usage/customers/#notification-of-billing-details-changed',
                    'help'       => "If a member edits their billing details in their portal, the changes can be emailed to 
                                        this address. If left blank, then no emails will be sent.",
                ],

            ],
        ],


        'misc_options' => [

            'title'       => 'Miscellaneous',
            'description' => "These are various frontend options which you can tweak as appropriate.",

            'fields' => [

                'rs-filters-ttl' => [
                    // this via config() will give default value
                    'config_key' => 'ixp_fe.frontend.rs-filters.ttl',
                    'dotenv_key' => 'IXP_FE_RS_FILTERS_TIME_TO_LIVE',
                    'type'       => 'textarea',
                    'rules'      => 'nullable|max:1024',
                    'name'       => 'Route Server Update Period',
                    //'docs_url'   => '',
                    'help'       => "If you have enabled the route server community filtering via UI option, then your members will
                                        need to know how often you update their configurations. The text you enter here will be 
                                        displayed on the route server filters page.",
                ],
            ],
        ],

    ],


];

