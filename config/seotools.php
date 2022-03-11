<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "WorldSoftZone", //"It's Over 9000!", // set false to total remove
            'titleBefore'  => false, //"Quality and Commitment", // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => "Website Design and Development, Software Development, Graphic Design agency with Quality and Commitment Service.",
            'separator'    => ' - ',
            'keywords'     => ['website design', 'website development', 'software development', 'mobile app development', 'graphic design', 'virtual assistant'],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => false, //'Over 9000 Thousand!', // set false to total remove
            'description' => "Website Design and Development, Software Development, Graphic Design agency with Quality and Commitment Service.", // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'Website',
            'site_name'   => 'WorldSoftZone',
            'images'      => ['https://worldsoftzone.com/assets/img/favicon.png'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'WorldSoftZone',
            'site'        => '@worldsoftzone',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => false, //'Over 9000 Thousand!', // set false to total remove
            'description' => "Website Design and Development, Software Development, Graphic Design agency with Quality and Commitment Service.", // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'Website', //'WebPage',
            'images'      => ['https://worldsoftzone.com/assets/img/favicon.png'],
        ],
    ],
];
